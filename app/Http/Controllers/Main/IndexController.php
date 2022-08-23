<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Localization;
use App\Http\Requests\Main\MainRequest;
use App\Models\Bid;
use App\Models\Category;
use App\Models\Event;
use App\Models\Setting;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function indexMain()
    {
        $events = Event::all();
        $categories = Category::all();
        foreach ($events as $event){
            $event->categoryTitle = Category::find($event->category_id)->title;
//            $event->urlEvent = route('main.show', $event->id);
        }
        $settings = Setting::first();

        return view('main.listing', compact('events', 'categories', 'settings'));
    }

    public function searchMain(Request $request)
    {
        $categories = Category::all();
        $query = Event::query();

        if($search = $request->input('query')){
            $query->where('title', 'LIKE', "%{$search}%");
        }
        if($categoryFilter = $request->input('category_id')){
            $query->where('category_id', '=', $categoryFilter);
        }
        $events = $query->get();
        foreach ($events as $event){
            $event->categoryTitle = Category::find($event->category_id)->title;
            $event->urlEvent = route('main.show', $event->id);
        }
        $settings = Setting::first();
        return view('main.listing', compact('events','categories','settings'));
    }

    public function showEvent($event){
        $event = Event::query()->where('id',$event)->first();
        return view('main.single', compact('event'));
    }

    public function index(){
        return view('main.index');
    }

    public function getContact(MainRequest $request){
        $data = $request->validated();
        Bid::firstOrCreate($data);
        return redirect()->route('main.listing');
    }

    public function loginView(){
        return view('main.login');
    }
}

<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Event;
use Geocodio\Geocodio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Event\StoreRequest;
use App\Http\Requests\Admin\Event\UpdateRequest;
use App\Models\Category;
use Geocoding\Geocoding;

use Geocoder\Laravel\ProviderAndDumperAggregator as Geocoder;

class EventController extends Controller
{
    public function eventIndex()
    {
        $geo = new City("AIzaSyA8lfYZcB-K2UFBzJ0hvEj2sSNLanD0hpE");
        $adress = $geo->getCoordinates("Одесса, Филатова 12");
        dd($adress);
        $events = Event::all();
        return view('admin.event.index',compact('events'));
    }

    public function eventCreate()
    {
        $categories = Category::all();
        $cities = City::all();
        return view('admin.event.create', compact('categories', 'cities'));
    }

    public function eventStore(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Event::firstOrCreate($data);
        return redirect()->route('admin.event.index');
    }

    public function eventShow( $event)
    {

        $event=Event::query()->where('id',$event)->first();
        return view('admin.event.show', compact('event'));
    }

    public function eventEdit(Event $event)
    {
        $categories = Category::all();
        $cities = City::all();
        return view('admin.event.edit', compact('event','categories', 'cities'));
    }

    public function eventUpdate(UpdateRequest $request, Event $event)
    {
        dd($request);
        $data = $request->validated();
        $data = array_diff($data,array('', NULL, false));
        if(array_key_exists('image',$data)){
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        $event->update($data);
        return view('admin.event.show', compact('event'));
    }

    public function eventDelete(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Setting\StoreRequest;
use App\Http\Requests\Admin\Setting\UpdateRequest;

class SettingController extends Controller
{
    public function settingIndex()
    {
        $settings = Setting::all();
        return view('admin.setting.index',compact('settings'));
    }

    public function settingCreate()
    {
        return view('admin.setting.create');
    }

    public function settingStore(StoreRequest $request)
    {
        $title = $request->except('city','_token');

        $geo = new City("AIzaSyA8lfYZcB-K2UFBzJ0hvEj2sSNLanD0hpE");
        $adress = $geo->getCoordinates($request['city']);
        $array = $title+$adress;
        Setting::firstOrCreate($array);

        return redirect()->route('admin.setting.index');
    }

    public function settingShow( $setting)
    {
        $setting=Setting::query()->where('id',$setting)->first();
        return view('admin.setting.show', compact('setting'));
    }

    public function settingEdit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }

    public function settingUpdate(UpdateRequest $request, Setting $setting)
    {
        $title = $request->except('city','_token');

        $geo = new City("AIzaSyA8lfYZcB-K2UFBzJ0hvEj2sSNLanD0hpE");
        $adress = $geo->getCoordinates($request['city']);
        $array = $title+$adress;
        $setting->update($array);
        return view('admin.setting.show', compact('setting'));
    }

    public function settingDelete(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('admin.setting.index');
    }
}

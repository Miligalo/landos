<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function userIndex()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function userCreate()
    {
        
        return view('admin.user.create');
    }

    public function userStore(StoreRequest $request)
    {
        $data = $request->validated();
        $password = Str::random(10);
        $data['password'] = Hash::make($password);
        $user = User::firstOrCreate(['email' => $data['email']], $data);
        event(new Registered($user));
        return redirect()->route('admin.user.index');
    }

    public function userShow(User $user)
    {
        
        return view('admin.user.show', compact('user',));
    }

    public function userEdit(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function userUpdate(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        if(User::query()->where('email',$request->input('email'))->where('id','!=', $user->id)->exists()){
            abort(400);
        }
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }

    public function userDelete(User $user)
    {
       
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}

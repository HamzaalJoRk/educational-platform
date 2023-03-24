<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\course;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $role = User::find($user->id);
//        $users = User::all();
//        return view('UsersShow',[
//            'users'=>$users
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $role = User::find($user->id);
        $users = User::all();
        return view('UsersShow',[
            'users'=>$users,
            'roleuser' => $role,
        ]);
    }

    public function role(User $user)
    {
        $role = User::find($user->id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        return view('UserEdit',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect('/programmer/users/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/programmer/users/show');
    }
    public function getUsersCourse(){
        $users = course::find(1)->user;
        foreach ($users as $user)
            echo "$user";
    }
}

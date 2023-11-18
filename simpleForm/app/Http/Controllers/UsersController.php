<?php

namespace App\Http\Controllers;
use App\Models\myUsers;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){

        return view('add.index');
    }
    public function addingUser(Request  $request){

        //dd($request);

        $data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'pass' => 'required',
        ]);
        var_dump($data);
        $new_user = myUsers::create($data);
        return redirect(route('add.form'));
    }
    public function show(){
        $myusers = myUsers::all();
        return view('add.form',['myusers'=> $myusers]);
    }

    public function edit(myUsers $user){
        //$myusers = myUsers::all();,['myusers'=> $myusers]
        //dd($user);
        return view('add.editUser',['user' => $user]);
    }
    public function updating(myUsers $user, Request $request){

        $data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'pass' => 'required',
        ]);

        //dd($user);
        $user->update($data);

        return redirect(route('add.user'))->with('success','user updated successfully');

    }
    public function del(myUsers $user){
        //$myusers = myUsers::all();,['myusers'=> $myusers]
        $user->delete();
        return redirect(route('add.user'))->with('success','user deleted successfully');

    }
}

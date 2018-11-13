<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    
    /**
     * Display all users
     */
    public function index(){

        $users = User::all();
        
        // return $users;
        return view('admin.users.index', compact('users'));
    }

    public function setRole($id){

        $user = User::find($id);

        $user->is_admin ? $user->is_admin = false : $user->is_admin = true;


        $user->save();

        // return $user;

        return redirect()->back();
    }
}

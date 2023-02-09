<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user(){
        return view('auth.register');
    }

    public function index(){
        $users  =User::paginate(5);
        return view('admin.userinfo.index',compact('users') );
    }


}

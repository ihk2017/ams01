<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{



    public function index()
   {

        $frontend_cats  =   Category::with('post')->get();
        $frontend_posts =   Post::orderBy('id', 'DESC')->get();
        $apost          =   Post::where('status','Active')->get();
        $ipost          =   Post::where('status','InActive')->get();


        return view('frontend.index',compact('frontend_cats','frontend_posts','apost','ipost'));
    }



    public function home(){
// dd(Auth::user());
        if(Auth::user()){
            if(Auth::user()->user_type == 'admin'){
                return view('admin.dashboard');
            }elseif(Auth::user()->user_type == 'user'){
                $results =Category::get();
                return view('admin.category.index',compact('results'));
            }else{
                return redirect()->route('login');
            }

        }else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }








}

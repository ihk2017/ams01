<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use League\CommonMark\Extension\Mention\Generator\StringTemplateLinkGenerator;

class MysinglePaceController extends Controller
{
    public function mysingle($id)
   {
        $frontend_posts =   Post::where('slug',$id)->first();
        $categories     =   Category::where('status','Active')->get();
        $users          =   User::get();
        $posts          =   Post::orderBy('id', 'DESC')->get();
        $postsimg       =   Post::orderBy('id', 'DESC')->paginate(4);
        $allpost        =   Post::get();
        $apost          =   Post::where('status','Active')->get();
        $ipost          =   Post::where('status','InActive')->get();
        return view('frontend.mymodule.mysingle',compact('frontend_posts','categories','users','posts','postsimg','apost','allpost','ipost'));
    }
}

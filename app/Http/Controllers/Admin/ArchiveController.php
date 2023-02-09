<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;
use File;
use DB;

class ArchiveController extends Controller
{
    public function personal()
    {


        $results = DB::table('archives')->paginate(8);
        return view('admin.archive.personal',compact('results'));
    }

    public function create()
    {
        return view('admin.archive.create');
    }
  //  Insert employee
    public function archivestore(Request $request)

    {
        $request->validate([
            'category'       =>'required',
            'empimg'        =>'required|mimes:png,jpg,jpeg',
        ]);

        $imgup='';
        if($empimg=$request->file('empimg') ){
            $imgup=time().'_'.uniqid().'.'. $empimg->getClientOriginalExtension()  ;
            $empimg->move('images/myimages',$imgup);
        }

        Archive::create([
            'category'  =>$request->category,
            'empimg'    =>$imgup,

        ]);

        if($request)
            {
                return redirect()->route('personal_list')->with('message','Image Uploaded Successfully');
            }else
            {
                return redirect()->back();
            }
    }
}

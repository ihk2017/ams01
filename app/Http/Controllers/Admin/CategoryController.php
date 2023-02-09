<?php

namespace App\Http\Controllers\Admin;

use DB;

use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function index(){
        $results =Category::get();
        return view('admin.category.index',compact('results'));
    }


    // Insert category
    public function store(Request $request)
    {
        $data = [];
        $data['name']   = $request->category;
        $data['status'] = $request->status;
        $data['slug']   = Str::slug($request->category);

        $category = Category::insert($data);

        if($category)
        {
            return redirect()->route('all_category')->with('message','Category added Successfully');

        }else
        {
            return redirect()->back();
        }
    }

    // Edit category
    public function edit($id)
    {
        $result =Category::where('id',$id)->first();
         return view('admin.category.edit',compact('result'));
    }

  // Update execution category
    public function update(Request $request)
    {

        $data = [];
        $data['name'] = $request->category;
        $data['status'] = $request->status;

        $update = Category::where('id', $request->id)->limit(1)->update($data);

        if($update){
                    return redirect()->route('all_category')->with('message','Category Updated Successfully');
                }else{
                    return redirect()->back();
                }
    }

    // Delete category
    public function delete(Request $request){
        $result = Category::where('id',$request->id)->delete();
        if($result){
           return response()->json(['message' => 'Category Deleted Successfully.']);
        }else{
            return redirect()->back();
        }
    }



}

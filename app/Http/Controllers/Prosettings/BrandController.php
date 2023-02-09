<?php

namespace App\Http\Controllers\Prosettings;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
    public function brand_create()
    {
        return view('admin.productsettings.brand_create');
    }
    public function brand_index()
    {
        $results = Brand::orderBy('id', 'DESC')->paginate(10);
        return view('admin.productsettings.brand_index',compact('results'));
    }

     // Insert category
    public function store(Request $request)
    {
        $data = [];
        $data['name']      = $request->name;
        $data['origin']    = $request->origin;

        $brands = Brand::insert($data);
        if($brands)
        {
            return redirect()->route('all_brand')->with('message','Brand added Successfully');

        }else
        {
            return redirect()->back();
        }

    }


    //edit
    public function edit($id)
    {

        $result = Brand::findOrFail($id);
        return view('admin.productsettings.brand_edit',compact('result'));
    }
    // Update category
    public function update(Request $request)
    {
        $brand                      = Brand::find($request->id);
        $brand->name                = $request->name;
        $brand->origin              = $request->origin;

        $brand->save();

        if($brand->save()){
            return redirect()->route('all_brand')->with('message','Brand Updated Successfully');

        }else{
            return redirect()->back();
        }
    }

     // Delete category
     public function delete(Request $request){
        $result = Brand::where('id',$request->id)->delete();
        if($result){
           return response()->json(['message' => 'Brand Deleted Successfully.']);
        }else{
            return redirect()->back();
        }
    }









}

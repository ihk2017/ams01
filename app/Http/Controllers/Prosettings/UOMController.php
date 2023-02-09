<?php

namespace App\Http\Controllers\Prosettings;

use DB;
use App\Models\UOM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UOMController extends Controller
{
    public function uom_index()
    {
        $results = UOM::get();
        return view('admin.productsettings.uom_index',compact('results'));
    }

    public function uom_create()
    {
        return view('admin.productsettings.uom_create');
    }

    public function edit($id)

    {

        $result = UOM::findOrFail($id);
        return view('admin.productsettings.uom_edit',compact('result'));
    }


    // Insert category
    public function store(Request $request)
    {
        $data = [];
        $data['name']           = $request->name;
        $data['description']    = $request->description;
        $uom = DB::table('u_o_m_s')->insert($data);
        if($uom)
        {
            return redirect()->route('all_uom')->with('message','UOM added Successfully');

        }else
        {
            return redirect()->back();
        }

    }

    // Update category
    public function update(Request $request)
    {
        $uom                      = UOM::find($request->id);
        $uom->name                = $request->name;
        $uom->description         = $request->description;

        $uom->save();

        if($uom->save()){
            return redirect()->route('all_uom')->with('message','UOM Updated Successfully');

        }else{
            return redirect()->back();
        }

    }

    // Delete category
    public function delete(Request $request){
        $result = UOM::where('id',$request->id)->delete();
        if($result){
           return response()->json(['message' => 'UOM Deleted Successfully.']);
        }else{
            return redirect()->back();
        }
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\itemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.productsettings.itemtype_index');


        $results =itemType::with('category','user')->orderBy('id', 'DESC')->get();
        return view('admin.productsettings.itemtype_index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::where('status','Active')->get();

        return view('admin.productsettings.itemtype_create',compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Insert category
    public function store(Request $request)
    {
        $data = [];
        $data['name']           = $request->name;
        $data['category_id']    = $request->category_id;
        $data['user_id']        = Auth::user()->id;
        $data['status']         = $request->status;


        $itemType = itemType::insert($data);

        if($itemType)
        {
            return redirect()->route('itemtype_list')->with('message','itemType added Successfully');

        }else
        {
            return redirect()->back();
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\itemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function show(itemType $itemType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\itemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result     =   itemType::find($id);
        $categories =   Category::where('status','Active')->get();
        return view('admin.productsettings.itemtype_edit',compact('categories','result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\itemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = [];
        $data['name']           = $request->name;
        $data['category_id']    = $request->category_id;
        $data['user_id']        = Auth::user()->id;
        $data['status']         = $request->status;


        // $itemType = itemType::insert($data);
        $itemType = itemType::where('id', $request->id)->limit(1)->update($data);

        if($itemType)
        {
            return redirect()->route('itemtype_list')->with('message','itemType Updated Successfully');

        }else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\itemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemType $itemType)
    {
        //
    }

    // Delete category
    public function delete(Request $request){
        $result = itemType::where('id',$request->id)->delete();
        if($result){
        return response()->json(['message' => 'Category Deleted Successfully.']);
        }else{
            return redirect()->back();
        }
    }

}

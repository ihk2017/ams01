<?php

namespace App\Http\Controllers;

use App\Models\itemType;
use App\Models\itemmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $requests =Itemmodel::with('itemType','user')->orderBy('id', 'DESC')->get();
        return view('admin.productsettings.itemmodel_index',compact('requests') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemType= itemType::where('status','Active')->orderBy('name')->get();
        return view('admin.productsettings.itemmodel_create',compact('itemType') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data['model_no']           = $request->model_no;
        $data['item_type_id']       = $request->item_type_id;
        $data['user_id']            = Auth::user()->id;
        $data['status']             = $request->status;


        $itemmodel = Itemmodel::insert($data);

        if($itemmodel)
        {
            return redirect()->route('item_model_list')->with('message','Item Model added Successfully');

        }else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function show(itemmodel $itemmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request    =   Itemmodel::find($id);
        $itemtype   =   itemType::where('status','Active')->get();
        return view('admin.productsettings.itemmodel_edit',compact('request','itemtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, itemmodel $itemmodel)
    // {
    //     //
    // }

    public function update(Request $request)
    {
        $data = [];
        $data['model_no']           = $request->model_no;
        $data['item_type_id']       = $request->item_type_id;
        $data['user_id']            = Auth::user()->id;
        $data['status']             = $request->status;


        // $itemType = itemType::insert($data);
        $itemmodel = Itemmodel::where('id', $request->id)->limit(1)->update($data);

        if($itemmodel)
        {
            return redirect()->route('item_model_list')->with('message','item model Updated Successfully');

        }else
        {
            return redirect()->back();
        }
    }

    // Delete category
    public function delete(Request $request){
        $result = Itemmodel::where('id',$request->id)->delete();
        if($result){
        return response()->json(['message' => 'Item Model Deleted Successfully.']);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemmodel $itemmodel)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Assetitem;
use App\Models\Itemmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AssetitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items  =DB::table('item_details')->orderBy('skuname')->get();
        return view('admin.productsettings.assetitem_index',compact('items') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resutl_b=  Brand::get();
        $reqult_c=  Itemmodel::get();
        $reqult_d=  DB::table('cat_type_models')->orderBy('skuname')->get();
        // dd($reqult_d);
        return view('admin.productsettings.assetitem_create',compact('resutl_b','reqult_c','reqult_d') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $data = [];
            $data['itemname']           = $request->itemname;
            $data['brand_id']           = $request->brand_id;
            $data['itemmodel_id']       = $request->itemmodel_id;
            $data['itemdescription']    = $request->itemdescription;
            $data['user_id']            = Auth::user()->id;
            $data['status']             = $request->status;
            $data['code']               = mt_rand(10000000,99999999);


            $items = Assetitem::insert($data);

            if($items)
            {
                return redirect()->route('item_list')->with('message','Item Created Successfully');

            }else
            {
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assetitem  $assetitem
     * @return \Illuminate\Http\Response
     */
    public function show(Assetitem $assetitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assetitem  $assetitem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $results    =  Assetitem::find($id);
        $resutl_b   =  Brand::get();
        $reqult_c   =  Itemmodel::get();
        $reqult_d   =  DB::table('cat_type_models')->get();
        return view('admin.productsettings.assetitem_edit',compact('results','resutl_b','reqult_c','reqult_d') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assetitem  $assetitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = [];
        $data['itemname']           = $request->itemname;
        $data['brand_id']           = $request->brand_id;
        $data['itemmodel_id']       = $request->itemmodel_id;
        $data['itemdescription']    = $request->itemdescription;
        $data['status']             = $request->status;


        // $itemType = itemType::insert($data);
        $ites = Assetitem::where('id', $request->id)->limit(1)->update($data);

        if($ites)
        {
            return redirect()->route('item_list')->with('message','item Updated Successfully');

        }else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assetitem  $assetitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }

    public function delete(Request $request){
        $result = Assetitem::where('id',$request->id)->delete();
        if($result){
        return response()->json(['message' => 'Item Model Deleted Successfully.']);
        }else{
            return redirect()->back();
        }
    }
}

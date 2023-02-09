<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;
class BioController extends Controller
{
    public function index()
    {
        $results = DB::table('biographies')->orderBy('fullname')->paginate(4);
        return view('admin.biography.index',compact('results'));

    }

    public function create()
    {
        return view('admin.biography.create');
    }

    // Insert category
    public function biostore(Request $request)
    {

        $data = [];
        $data['fullname']           = $request->fullname;
        $data['fathername']         = $request->fathername;
        $data['mothername']         = $request->mothername;
        $data['dateofbirth']        = $request->dateofbirth;
        $data['permanentaddress']   = $request->permanentaddress;
        $data['presentaddress']     = $request->presentaddress;
        $data['religion']           = $request->religion;
        $data['hpbby']              = $request->hpbby;
        $data['topeducation']       = $request->topeducation;
        $data['gender']             = $request->gender;

        $bio = DB::table('biographies')->insert($data);

        if($bio)
        {
            return redirect()->route('all_bio')->with('message','Personal info added Successfully');

        }else
        {
            return redirect()->back();
        }

    }

    public function edit($id)
    {
        $result =DB::table('biographies')->where('id',$id)->first();
         return view('admin.biography.edit',compact('result'));
    }

    // Update execution category
    public function update(Request $request)
    {

        $data = [];
        $data['fullname']           = $request->fullname;
        $data['fathername']         = $request->fathername;
        $data['mothername']         = $request->mothername;
        $data['dateofbirth']        = $request->dateofbirth;
        $data['permanentaddress']   = $request->permanentaddress;
        $data['presentaddress']     = $request->presentaddress;
        $data['religion']           = $request->religion;
        $data['hpbby']              = $request->hpbby;
        $data['topeducation']       = $request->topeducation;
        $data['gender']             = $request->gender;

        $update = DB::table('biographies') ->where('id', $request->id)->limit(1)->update($data);

        if($update){
                    return redirect()->route('all_bio')->with('message','Personal info Updated Successfully');
                }else{
                    return redirect()->back();
                }
    }

    // Delete category
    public function delete(Request $request){

        $result = DB::table('biographies')->where('id',$request->id)->delete();
        if($result){
            // return response()->json(['message' => 'Category Deleted Successfully.']);
            return redirect()->route('all_bio')->with('error','Personal info Deleted');

        }else{
            return redirect()->back();
        }
    }
}

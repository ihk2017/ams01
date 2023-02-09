<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Emp;
use File;
use DB;
class EmpController extends Controller
{
    public function index()
    {
        $results = DB::table('emps')->orderBy('id')->paginate(10);
        return view('admin.employees.index',compact('results'));

    }
    public function create()
    {
        return view('admin.employees.create');
    }

// Insert employee
    public function imgstore(Request $request)

    {
        $request->validate([
            'empname'       =>'required',
            'address'       =>'required',
            'contactno'     =>'required',
            'designation'   =>'required',
            'empimg'        =>'required|mimes:png,jpg,jpeg',
        ]);

        $imgup='';
        if($empimg=$request->file('empimg') ){
            $imgup=time().'_'.uniqid().'.'. $empimg->getClientOriginalExtension()  ;
            $empimg->move('images/myimages',$imgup);
        }

        Emp::create([
            'empname'=>$request->empname,
            'empimg'=>$imgup,
            'address'=>$request->address,
            'contactno'=>$request->contactno,
            'designation'=>$request->designation,

        ]);

        if($request)
            {
                return redirect()->route('all_emp')->with('message','Emp info added Successfully');

            }else
            {
                return redirect()->back();
            }
    }

    public function edit($id)
    {
        // $result =DB::table('emps')->where('id',$id)->first();
        $result=Emp::findOrFail($id);
         return view('admin.employees.edit',compact('result'));
    }

    // // update // Update execution category
    public function update(Request $request,$id)

    {
        $data    = Emp::findOrFail($id);
        $request->validate([
            'empname'       =>'required',
            'address'       =>'required',
            'contactno'     =>'required',
            'designation'   =>'required',
        ]);

        $imgup='';
        $deleteOldImage     = 'images/myimages/'.$data->empimg;

        if($empimg=$request->file('empimg') ){

            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            $imgup=time().'_'.uniqid().'.'. $empimg->getClientOriginalExtension()  ;
            $empimg->move('images/myimages',$imgup);
        }else{
            $imgup =  $data->empimg;
        }

        Emp::where('id',$id)->update([
            'empname'       =>$request->empname,
            'empimg'        =>$imgup,
            'address'       =>$request->address,
            'contactno'     =>$request->contactno,
            'designation'   =>$request->designation,

        ]);

        if($request)
            {
                return redirect()->route('all_emp')->with('message','Emp info Updated Successfully');

            }else
            {
                return redirect()->back();
            }
    }

    public function delete($id){
        $data    = Emp::findOrFail($id);
        $deleteOldImage     = 'images/myimages/'.$data->empimg;
        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }
        $data->delete();
        if($data)
            {
                return redirect()->route('all_emp')->with('message','Emp info Deleted Successfully');

            }else
            {
                return redirect()->back();
            }
    }

}


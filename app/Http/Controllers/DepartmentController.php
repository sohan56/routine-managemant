<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
    public function add_department()
    {
    	return view('admin.department.add_department');
    }
     public function save_department(Request $request)
    {

    	$data = array();
      
    	$data['dept_name'] = $request->dept_name;
        $data['dept_description'] = $request->dept_description;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_department')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-department');
    }
     public function manage_department()
    {
        $all_department = DB::table('tbl_department')
                         ->get();
        return view('admin.department.manage_department')
                         ->with('all_department',$all_department);
        

    }
     public function unpublish_department($dept_id)
    {
        DB::table('tbl_department')
             ->where('dept_id',$dept_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-department');
       

    }
    public function publish_department($dept_id)
    {
        DB::table('tbl_department')
             ->where('dept_id',$dept_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-department');
       

    }
    public function delete_department($dept_id)
    {
        DB::table('tbl_department')
             ->where('dept_id',$dept_id)
             ->delete();
              return Redirect::to('/manage-department');
       

    }
     public function edit_department($dept_id)
    {
       $department_info = DB::table('tbl_department')
             ->where('dept_id',$dept_id)
             ->first();
              return view('admin.department.edit_department')
                         ->with('department_info', $department_info);
    }
     public function update_department(Request $request)
    {
        $data = array();
        $dept_id=$request->dept_id;
        $data['dept_name'] = $request->dept_name;
         $data['dept_description'] = $request->dept_description;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_department')
                  ->where('dept_id',$dept_id)
                  ->update($data);

        return Redirect::to('/manage-department');

    }
}

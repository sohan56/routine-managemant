<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class SemesterController extends Controller
{
    public function add_semester()
    {
    	return view('admin.semester.add_semester');
    }
     public function save_semester(Request $request)
    {

    	$data = array();
    	$data['semester_name'] = $request->semester_name;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_semester')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-semester');
    }
     public function manage_semester()
    {
        $all_semester = DB::table('tbl_semester')
                         ->get();
        return view('admin.semester.manage_semester')
                         ->with('all_semester',$all_semester);
        

    }
     
   
    public function delete_semester($semester_id)
    {
        DB::table('tbl_semester')
             ->where('semester_id',$semester_id)
             ->delete();
              return Redirect::to('/manage-semester');
       

    }
     public function edit_semester($semester_id)
    {
       $semester_info = DB::table('tbl_semester')
             ->where('semester_id',$semester_id)
             ->first();
              return view('admin.semester.edit_semester')
                         ->with('semester_info', $semester_info);
    }
     public function update_semester(Request $request)
    {
        $data = array();
        $semester_id=$request->semester_id;
        $data['semester_name'] = $request->semester_name;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_semester')
                  ->where('semester_id',$semester_id)
                  ->update($data);

        return Redirect::to('/manage-semester');

    }
}

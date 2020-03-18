<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
     public function add_course()
    {
    	$department_info=DB::table('tbl_department')
                                ->get();
    	$semester_info=DB::table('tbl_semester')
                                ->get();
         $teacher_info=DB::table('tbl_teacher')
                                ->get();                      
    	return view('admin.course.add_course')
    	 ->with('semester_info',$semester_info)
    	
    	  ->with('department_info',$department_info)
          ->with('teacher_info',$teacher_info);
    }
    public function save_course(Request $request)
    {

    	$data = array();
    	$data['semester_id'] = $request->semester_id;
    	$data['dept_id'] = $request->dept_id;
        $data['course_title'] = $request->course_title;
        $data['course_type'] = $request->course_type;
        $data['course_code'] = $request->course_code;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_course')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-course');
    }
    public function manage_course()
    {
        $all_course = DB::table('tbl_course')
                         ->get();
                         
        return view('admin.course.manage_course')
                         ->with('all_course',$all_course);
        

    }
     public function unpublish_course($course_id)
    {
        DB::table('tbl_course')
             ->where('course_id',$course_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-course');
       

    }
    public function publish_course($course_id)
    {
        DB::table('tbl_course')
             ->where('course_id',$course_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-course');
       

    }
    public function delete_course($course_id)
    {
        DB::table('tbl_course')
             ->where('course_id',$course_id)
             ->delete();
              return Redirect::to('/manage-course');
       

    }
     public function edit_course($course_id)
    {
       $course_info = DB::table('tbl_course')
             ->where('course_id',$course_id)
             ->first();
              return view('admin.course.edit_course')
                         ->with('course_info', $course_info);
    }
     public function update_course(Request $request)
    {
        $data = array();
        $course_id=$request->course_id;
        $data['semester_id'] = $request->semester_id;
    	
    	$data['dept_id'] = $request->dept_id;
        $data['course_title'] = $request->course_title;
        $data['course_type'] = $request->course_type;
        $data['course_code'] = $request->course_code;
    	$data['publication_status'] = $request->publication_status;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_course')
                  ->where('course_id',$course_id)
                  ->update($data);

        return Redirect::to('/manage-course');

    }
}

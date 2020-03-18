<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Redirect;

class RoutineController extends Controller
{
    public function make_routine()
    {
    	$department_info=DB::table('tbl_department')
         ->where('dept_id', Session::get('dept_id'))
                                ->get();
        $semester_info=DB::table('tbl_semester')
                                ->get(); 
        $teacher_info=DB::table('tbl_teacher')
          ->where('dept_id', Session::get('dept_id'))
                                ->get();
        $course_info=DB::table('tbl_course')
          ->where('dept_id', Session::get('dept_id'))
                                ->get();
        $section_info=DB::table('tbl_section')
                                ->get();
       
                                                             
    	return view('admin.routine.make_routine')
                ->with('department_info',$department_info)
                ->with('semester_info',$semester_info)
                ->with('teacher_info',$teacher_info)
                ->with('course_info',$course_info)
                ->with('section_info',$section_info);
              
               
    }
    public function save_routine(Request $request)
    {

    	$data = array();
    	$data['dept_id'] = $request->dept_id;
      $data['semester_id'] = $request->semester_id;
      $data['teacher_id'] = $request->teacher_id;
    	$data['course_id'] = $request->course_id;
    	$data['section_id'] = $request->section_id;
    	
     
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_routine')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/make-routine');
    }
   
    
    
     
    public function routine()
    {
    	$show_routine = DB::table('tbl_routine')
    	->join('tbl_day', 'tbl_day.day_id', '=', 'tbl_routine.day_id')
       ->join('tbl_teacher', 'tbl_teacher.teacher_id', '=', 'tbl_routine.teacher_id')
       ->join('tbl_course', 'tbl_course.course_id', '=', 'tbl_routine.course_id')
       ->join('tbl_section', 'tbl_section.section_id', '=', 'tbl_routine.section_id')
       ->join('tbl_room', 'tbl_room.room_id', '=', 'tbl_routine.room_id')
       ->join('tbl_time', 'tbl_time.time_id', '=', 'tbl_routine.time_id')
       ->select('tbl_day.day_name','tbl_teacher.teacher_name','tbl_course.course_code','tbl_section.section_name','tbl_room.room_no','tbl_time.time')
         ->where('tbl_routine.dept_id',Session::get('dept_id'))
       ->get();
    	return view('pages.routine',compact('show_routine'));
    }
    
   
    public function department_w_routine($dept_id)
    {
        $department_w_routine = DB::table('tbl_routine')
          ->join('tbl_day', 'tbl_day.day_id', '=', 'tbl_routine.day_id')
       ->join('tbl_teacher', 'tbl_teacher.teacher_id', '=', 'tbl_routine.teacher_id')
       ->join('tbl_course', 'tbl_course.course_id', '=', 'tbl_routine.course_id')
       ->join('tbl_section', 'tbl_section.section_id', '=', 'tbl_routine.section_id')
       ->join('tbl_room', 'tbl_room.room_id', '=', 'tbl_routine.room_id')
       ->join('tbl_time', 'tbl_time.time_id', '=', 'tbl_routine.time_id')
       ->select('tbl_day.day_name','tbl_teacher.teacher_name','tbl_course.course_code','tbl_section.section_name','tbl_room.room_no','tbl_time.time')
                         ->where('tbl_routine.dept_id',$dept_id)
                         
                         ->get();

        return view('pages.department_w_routine',compact('department_w_routine'))
                        ->with('department_w_routine',$department_w_routine);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Auth;

session_start();

class TeacherController extends Controller
{
     public function add_teacher()
    {
    	$department_info=DB::table('tbl_department')
                                ->get();                  
    	return view('admin.teacher.add_teacher')
    	  ->with('department_info',$department_info);
    }
     public function save_teacher(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
        

        $data = array();
        $data['dept_id'] = $request->dept_id;
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_email'] = $request->teacher_email;
        $data['teacher_password'] = $request->teacher_password;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('teacher_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/teacher_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/teacher_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['teacher_img'] = $image_url;
            DB::table('tbl_teacher')
                  ->insert($data);
        

        }
      
        Session::put('message','Save information successfully !');
        return Redirect::to('/add-teacher');
 
       
         
    }
     public function manage_teacher()
    {
        $all_teacher = DB::table('tbl_teacher')
         ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_teacher.dept_id')
                         ->get();
        return view('admin.teacher.manage_teacher')
                         ->with('all_teacher',$all_teacher);

    }
    public function unpublish_teacher($teacher_id)
    {
        DB::table('tbl_teacher')
             ->where('teacher_id',$teacher_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-teacher');
       

    }
    public function publish_teacher($teacher_id)
    {
        DB::table('tbl_teacher')
             ->where('teacher_id',$teacher_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-teacher');
       

    }
    public function delete_teacher($teacher_id)
    {
        DB::table('tbl_teacher')
             ->where('teacher_id',$teacher_id)
             ->delete();
              return Redirect::to('/manage-teacher');
    }
     public function edit_teacher($teacher_id)
    {
       $teacher_info = DB::table('tbl_teacher')
             ->where('teacher_id',$teacher_id)
             ->first();
              return view('admin.teacher.edit_teacher')
                         ->with('teacher_info', $teacher_info);
    }
     public function update_teacher(Request $request)
    {
        $data = array();
        $teacher_id=$request->teacher_id;
        $data['dept_id'] = $request->dept_id;
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_email'] = $request->teacher_email;
        $data['teacher_password'] = $request->teacher_password;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('teacher_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['teacher_img'] = $request->teacher_old_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/teacher_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/teacher_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['teacher_img'] = $image_url;
            DB::table('tbl_teacher')
                  ->where('teacher_id',$teacher_id)
                  ->update($data);
                  unlink($request->teacher_old_img);
                  return Redirect::to('/manage-teacher');
        }
      }
      else{
        DB::table('tbl_teacher')
                  ->where('teacher_id',$teacher_id)
                  ->update($data);

        
        return Redirect::to('/manage-teacher');

        }
          
    }

     public function teacher_deshboard()
    {
        $this->authCheck();
        $show_routine = DB::table('tbl_routine')
      ->join('tbl_day', 'tbl_day.day_id', '=', 'tbl_routine.day_id')
       ->join('tbl_teacher', 'tbl_teacher.teacher_id', '=', 'tbl_routine.teacher_id')
       ->join('tbl_course', 'tbl_course.course_id', '=', 'tbl_routine.course_id')
       ->join('tbl_section', 'tbl_section.section_id', '=', 'tbl_routine.section_id')
       ->join('tbl_room', 'tbl_room.room_id', '=', 'tbl_routine.room_id')
       ->join('tbl_time', 'tbl_time.time_id', '=', 'tbl_routine.time_id')
       ->select('tbl_day.day_name','tbl_teacher.teacher_name','tbl_course.course_code','tbl_section.section_name','tbl_room.room_no','tbl_time.time')
       ->get();
      
      return view('teacher.deshboard',compact('show_routine'));
      
    }
    public function teacher_make_routine()
{
  

         //$this->authCheck();
        $show_routine = DB::table('tbl_routine')
       
     
       ->join('tbl_teacher', 'tbl_teacher.teacher_id', '=', 'tbl_routine.teacher_id')
       ->join('tbl_course', 'tbl_course.course_id', '=', 'tbl_routine.course_id')
       ->join('tbl_section', 'tbl_section.section_id', '=', 'tbl_routine.section_id')
        ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_routine.dept_id')
      
      
     
        
      ->where('tbl_routine.teacher_id', Session::get('teacher_id'))
     
     ->get();
     
      
                               
        return view('teacher.teacher_make_routine',compact('show_routine'));
         // ->with('show_routine',$show_routine);
        
    }
    public function edit_routine($routine_id)
    {
      $routine_info = DB::table('tbl_routine')
             ->where('routine_id',$routine_id)
             ->first();
    
              return view('teacher.update_routine')
                         ->with('routine_info', $routine_info);
                        
            
                        
    }
    public function update_troutine(Request $request)
    {
      $data = array();
       
      $routine_id=$request->routine_id;
      $data['time_id'] = $request->time_id;
      $data['day_id'] = $request->day_id;
      $data['room_id'] = $request->room_id;
      $data['updated_at'] = Carbon::now();
     DB::table('tbl_routine')
                  ->where('routine_id',$routine_id)
                  ->update($data);
           
                  return redirect()->back();
                   
    }

    

     public function day2_troutine(Request $request )
    
    {

      $data = array();
      $data['dept_id'] = $request->dept_id;
      $data['semester_id'] = $request->semester_id;
      $data['teacher_id'] = $request->teacher_id;
      $data['course_id'] = $request->course_id;
      $data['section_id'] = $request->section_id;
      $data['day_id'] = $request->day_id;
      $data['time_id'] = $request->time_id;
      $data['room_id'] = $request->room_id;
      $data['created_at'] = Carbon::now();

      DB::table('tbl_routine')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/teacher-make-routine');
    }
    public function view_routine()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_data_to_html());
     return $pdf->stream();
     return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('reports.invoiceSell')->stream();
    }

    public function convert_data_to_html()
    {
   $show_routine = DB::table('tbl_routine')
        ->join('tbl_day', 'tbl_day.day_id', '=', 'tbl_routine.day_id')
       ->join('tbl_teacher', 'tbl_teacher.teacher_id', '=', 'tbl_routine.teacher_id')
       ->join('tbl_course', 'tbl_course.course_id', '=', 'tbl_routine.course_id')
       ->join('tbl_section', 'tbl_section.section_id', '=', 'tbl_routine.section_id')
       ->join('tbl_room', 'tbl_room.room_id', '=', 'tbl_routine.room_id')
       ->join('tbl_time', 'tbl_time.time_id', '=', 'tbl_routine.time_id')
       
        ->where('tbl_routine.dept_id', Session::get('dept_id'))
       ->get();
        return view('teacher.view_routine',compact('show_routine'));
    }
    public function teacher_logout()
    {
        Session::put('teacher_name','');
        Session::put('teacher_id','');
        Session::put('message','You are successfully Logout !');
        return Redirect::to('/login');
        
      

    }
   public function authCheck()
    {
        $teacher_id=Session::get('teacher_id');
        if ($teacher_id ==NULL)
         {
             return Redirect::to('/login')->send();
        }
    }
}

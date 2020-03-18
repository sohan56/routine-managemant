<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Auth;

session_start();

class StudentController extends Controller
{
     public function add_student()
    {
        $department_info=DB::table('tbl_department')
                                ->get();                  
        return view('admin.student.add_student')
          ->with('department_info',$department_info);
    }
     public function save_student(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
        

        $data = array();
        $data['dept_id'] = $request->dept_id;
        $data['std_name'] = $request->std_name;
        $data['std_id'] = $request->std_id;
        $data['std_password'] = $request->std_password;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('std_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/student_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/student_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['std_img'] = $image_url;
            DB::table('tbl_student')
                  ->insert($data);
        

        }
      
        Session::put('message','Save information successfully !');
        return Redirect::to('/add-student');
 
       
         
    }

    public function manage_student()
    {
        $all_student = DB::table('tbl_student')
         ->join('tbl_department', 'tbl_department.dept_id', '=', 'tbl_student.dept_id')
                         ->get();
        return view('admin.student.manage_students')
                         ->with('all_student',$all_student);

    }

     public function delete_student($std_id)
    {
        DB::table('tbl_student')
             ->where('std_id',$std_id)
             ->delete();
              return Redirect::to('/manage-student');
    }
     public function edit_student($std_id)
    {
       $student_info = DB::table('tbl_student')
             ->where('std_id',$std_id)
             ->first();
              return view('admin.student.edit_student')
                         ->with('student_info', $student_info);
    }
     public function update_student(Request $request)
    {
        $data = array();
        $std_id=$request->std_id;
        $data['dept_id'] = $request->dept_id;
        $data['std_name'] = $request->std_name;
        $data['std_id'] = $request->std_id;
        $data['std_password'] = $request->std_password;
       

        //image uploading code s

        $files = $request->file('std_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['std_img'] = $request->std_old_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/student_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/student_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['std_img'] = $image_url;
            DB::table('tbl_student')
                  ->where('std_id',$std_id)
                  ->update($data);
                  unlink($request->std_old_img);
                  return Redirect::to('/manage-student');
        }
      }
      else{
        DB::table('tbl_student')
                  ->where('std_id',$std_id)
                  ->update($data);

        
        return Redirect::to('/manage-student');

        }
          
    }

    public function student_deshboard()
    {
    	return view ('student.deshboard');
    }

     public function student_profile()
    {
        return view ('student.student_profile');
    }
    
    public function student_logout()
    {
        Session::put('std_name','');
        Session::put('std_id','');
        Session::put('message','You are successfully Logout !');
        return Redirect::to('/login');
        
      

    }
   public function authCheck()
    {
        $std_id=Session::get('std_id');
        if ($std_id ==NULL)
         {
             return Redirect::to('/login')->send();
        }
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
        return view('student.view_routine',compact('show_routine'));
    }
}

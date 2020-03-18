<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class LoginController extends Controller
{
      public function index()
    {
       $this->authCheck();
        return view('login.all_login');
    }
     public function LoginCheck(Request $request)
    {
       
        $email = $request->id;
        $password = $request->password;

       $result = DB::table('tbl_admin')
                ->select('*')
                ->where('admin_email',$email)
                ->where('admin_password',$password)
                ->first();

      $teacher = DB::table('tbl_teacher')
                ->select('*')
                ->where('teacher_email',$email)
                ->where('teacher_password',$password)
                ->first(); 

 $student = DB::table('tbl_student')
                ->select('*')
                ->where('std_id',$email)
                ->where('std_password',$password)
                ->first();  

                if ($result) {

                    Session::put('admin_id',$result->admin_id);
                    Session::put('admin_name',$result->admin_name);
                    Session::put('access_label',$result->access_label);
                    Session::put('dept_id',$result->dept_id);
                    Session::put('admin_img',$result->admin_img);
                    return Redirect::to('/deshboard');
                }
                elseif ($teacher) {

                    Session::put('teacher_id',$teacher->teacher_id);
                    Session::put('dept_id',$teacher->dept_id);
                    Session::put('teacher_name',$teacher->teacher_name);
                    Session::put('teacher_email',$teacher->teacher_email);
                    Session::put('teacher_img',$teacher->teacher_img);
                    return Redirect::to('/teacher-deshboard');
                }
               elseif ($student) {

                    Session::put('std_id',$student->std_id);
                    Session::put('dept_id',$student->dept_id);
                    Session::put('std_name',$student->std_name);
                    Session::put('std_img',$student->std_img);
                    return Redirect::to('/student-deshboard');
                }
               
                else{

                    Session::put('exception','Your User Email Or Password Invalide !');
                    return Redirect::to('/login');
                }

                /*echo '<pre>';
                print_r($result);

                data dekhar jonno use kora hoi
                */
   }
    public function authCheck()
    {
        $admin_id=Session::get('admin_id');
        $teacher_id=Session::get('teacher_id');
       

        
        if ($admin_id !=NULL)
         {
             return Redirect::to('/deshboard')->send();
       }
        elseif ($teacher_id !=NULL)
         {
             return Redirect::to('/teacher-deshboard')->send();
       }
    }

}

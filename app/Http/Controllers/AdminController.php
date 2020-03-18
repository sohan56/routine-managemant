<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function index()
    {
        $this->authCheck();
    	return view('admin.pages.deshboard');
    	
    	

    }
     public function logout()
    {
        Session::put('admin_name','');
        Session::put('admin_id','');
        Session::put('message','You are successfully Logout !');
        return Redirect::to('/login');
        
      

    }
   public function authCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id ==NULL)
         {
             return Redirect::to('/login')->send();
        }
    }
    public function add_admin()
    {

      $department_info=DB::table('tbl_department')
                                ->get();
    	return view('admin.pages.add_admin')
       ->with('department_info',$department_info);
    }
     public function save_admin(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
        

        $data = array();
      
        $data['admin_name'] = $request->admin_name;
        $data['dept_id'] = $request->dept_id;

        $data['admin_email'] = $request->admin_email;
        $data['admin_password'] = $request->admin_password;
        $data['access_label'] = $request->access_label;
       
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('admin_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/admin_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/admin_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['admin_img'] = $image_url;
            DB::table('tbl_admin')
                  ->insert($data);
        

        }
      
        Session::put('message','Save information successfully !');
        return Redirect::to('/add-admin');
 
       
         
    }
     public function manage_admin()
    {
        $all_admin = DB::table('tbl_admin')
                         ->get();
        return view('admin.pages.manage_admin')
                         ->with('all_admin',$all_admin);

    }
    public function unpublish_admin($admin_id)
    {
        DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-admin');
       

    }
    public function publish_admin($admin_id)
    {
        DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-admin');
       

    }
    public function delete_admin($admin_id)
    {
        DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->delete();
              return Redirect::to('/manage-admin');
    }
     public function edit_admin($admin_id)
    {
       $admin_info = DB::table('tbl_admin')
             ->where('admin_id',$admin_id)
             ->first();
              return view('admin.pages.edit_admin')
                         ->with('admin_info', $admin_info);
    }
     public function update_admin(Request $request)
    {
        $data = array();
        $admin_id=$request->admin_id;
        $data['admin_name'] = $request->admin_name;
        $data['dept_id'] = $request->dept_id;
        $data['admin_email'] = $request->admin_email;
        $data['admin_password'] = $request->admin_password;
        $data['access_label'] = $request->access_label;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('admin_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['admin_img'] = $request->admin_old_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/admin_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/admin_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['admin_img'] = $image_url;
            DB::table('tbl_admin')
                  ->where('admin_id',$admin_id)
                  ->update($data);
                  unlink($request->admin_old_img);
                  return Redirect::to('/manage-admin');
        }
      }
      else{
        DB::table('tbl_admin')
                  ->where('admin_id',$admin_id)
                  ->update($data);

        
        return Redirect::to('/manage-admin');

        }
          
    }
   
 public function search(Request $request)
    {
         if($request->search)
         {
           $searchs = DB::table('tbl_teacher')
         ->where('teacher_name', 'like', '%'.$request->search.'%')
       
         
       
         ->get();
         }

         if ($searchs) {
            foreach($searchs as $key=>$search)
       {
        echo '<tr> 
                <td>' .$search->teacher_name.'</td>
               
           <tr>';
         }
    }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{
    public function add_slider()
    {
    	return view('admin.slider.add_slider');
    }
    public function save_slider(Request $request)
    {
       
        $data = array();
        $data['title'] = $request->title;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('slider_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/slider_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/slider_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['slider_img'] = $image_url;
            DB::table('tbl_slider')
                  ->insert($data);
        
        }
       
        Session::put('message','Save information successfully !');
        return Redirect::to('/add-slider');
 
    }
     public function manage_slider()
    {
        $all_slider = DB::table('tbl_slider')
                         ->get();
        return view('admin.slider.manage_slider')
                         ->with('all_slider',$all_slider);

    }
    public function delete_slider($slider_id)
    {
        DB::table('tbl_slider')
             ->where('slider_id',$slider_id)
             ->delete();
              return Redirect::to('/manage-slider');
    }
     public function edit_slider($slider_id)
    {
       $slider_info = DB::table('tbl_slider')
             ->where('slider_id',$slider_id)
             ->first();
              return view('admin.slider.edit_slider')
                         ->with('slider_info', $slider_info);
    }
     public function update_slider(Request $request)
    {
        $data = array();
        $slider_id=$request->slider_id;
        $data['title'] = $request->title;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('slider_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['slider_img'] = $request->slider_old_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/slider_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/slider_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['slider_img'] = $image_url;
            DB::table('tbl_slider')
                  ->where('slider_id',$slider_id)
                  ->update($data);
                  unlink($request->slider_old_img);
                  return Redirect::to('/manage-slider');
        }
      }
      else{
        DB::table('tbl_slider')
                  ->where('slider_id',$slider_id)
                  ->update($data);

        
        return Redirect::to('/manage-slider');

        }
          
    }
}

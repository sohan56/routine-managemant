<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class TimeController extends Controller
{
     public function add_time()
    {
    	return view('admin.time.add_time');
    }
     public function save_time(Request $request)
    {

    	$data = array();
    	$data['time'] = $request->time;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_time')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-time');
    }
     public function manage_time()
    {
        $all_time = DB::table('tbl_time')
                         ->get();
        return view('admin.time.manage_time')
                         ->with('all_time',$all_time);
        

    }
     
   
    public function delete_time($time_id)
    {
        DB::table('tbl_time')
             ->where('time_id',$time_id)
             ->delete();
              return Redirect::to('/manage-time');
       

    }
     public function edit_time($time_id)
    {
       $time_info = DB::table('tbl_time')
             ->where('time_id',$time_id)
             ->first();
              return view('admin.time.edit_time')
                         ->with('time_info', $time_info);
    }
     public function update_time(Request $request)
    {
        $data = array();
        $time_id=$request->time_id;
        $data['time'] = $request->time;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_time')
                  ->where('time_id',$time_id)
                  ->update($data);

        return Redirect::to('/manage-time');

    }
}

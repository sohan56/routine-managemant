<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class DayController extends Controller
{
    public function add_day()
    {
    	return view('admin.day.add_day');
    }
     public function save_day(Request $request)
    {

    	$data = array();
    	$data['day_name'] = $request->day_name;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_day')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-day');
    }
     public function manage_day()
    {
        $all_day = DB::table('tbl_day')
                         ->get();
        return view('admin.day.manage_day')
                         ->with('all_day',$all_day);
        

    }
     
   
    public function delete_day($day_id)
    {
        DB::table('tbl_day')
             ->where('day_id',$day_id)
             ->delete();
              return Redirect::to('/manage-day');
       

    }
     public function edit_day($day_id)
    {
       $day_info = DB::table('tbl_day')
             ->where('day_id',$day_id)
             ->first();
              return view('admin.day.edit_day')
                         ->with('day_info', $day_info);
    }
     public function update_day(Request $request)
    {
        $data = array();
        $day_id=$request->day_id;
        $data['day_name'] = $request->day_name;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_day')
                  ->where('day_id',$day_id)
                  ->update($data);

        return Redirect::to('/manage-day');

    }
}

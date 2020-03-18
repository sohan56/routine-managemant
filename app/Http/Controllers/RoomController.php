<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Redirect;


class RoomController extends Controller
{
    public function add_room()
    {
    	$department_info=DB::table('tbl_department')
                                ->get();
    	return view('admin.room.add_room')
    	 ->with('department_info',$department_info);
    }
    public function save_room(Request $request)
    {

    	$data = array();
    	$data['dept_id'] = $request->dept_id;
        $data['room_no'] = $request->room_no;
        $data['room_type'] = $request->room_type;
    	$data['publication_status'] = $request->publication_status;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_room')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-room');
    }
    public function manage_room()
    {
        $all_room = DB::table('tbl_room')
                         ->get();
                         
        return view('admin.room.manage_room')
                         ->with('all_room',$all_room);
        

    }
     public function unpublish_room($room_id)
    {
        DB::table('tbl_room')
             ->where('room_id',$room_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-room');
       

    }
    public function publish_room($room_id)
    {
        DB::table('tbl_room')
             ->where('room_id',$room_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-room');
       

    }
    public function delete_room($room_id)
    {
        DB::table('tbl_room')
             ->where('room_id',$room_id)
             ->delete();
              return Redirect::to('/manage-room');
       

    }
     public function edit_room($room_id)
    {
       $room_info = DB::table('tbl_room')
             ->where('room_id',$room_id)
             ->first();
              return view('admin.room.edit_room')
                         ->with('room_info', $room_info);
    }
     public function update_room(Request $request)
    {
        $data = array();
        $room_id=$request->room_id;
        $data['dept_id'] = $request->dept_id;
        $data['room_no'] = $request->room_no;
        $data['room_type'] = $request->room_type;
        $data['publication_status'] = $request->publication_status;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_room')
                  ->where('room_id',$room_id)
                  ->update($data);

        return Redirect::to('/manage-room');

    }
}

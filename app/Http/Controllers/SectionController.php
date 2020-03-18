<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class SectionController extends Controller
{
     public function add_section()
    {
    	return view('admin.section.add_section');
    }
     public function save_section(Request $request)
    {

    	$data = array();
    	$data['section_name'] = $request->section_name;
    	$data['created_at'] = Carbon::now();

    	DB::table('tbl_section')
                  ->insert($data);
        Session::put('message','Save  information successfully !');
        return Redirect::to('/add-section');
    }
     public function manage_section()
    {
        $all_section = DB::table('tbl_section')
                         ->get();
        return view('admin.section.manage_section')
                         ->with('all_section',$all_section);
        

    }
     
   
    public function delete_section($section_id)
    {
        DB::table('tbl_section')
             ->where('section_id',$section_id)
             ->delete();
              return Redirect::to('/manage-section');
       

    }
     public function edit_section($section_id)
    {
       $section_info = DB::table('tbl_section')
             ->where('section_id',$section_id)
             ->first();
              return view('admin.section.edit_section')
                         ->with('section_info', $section_info);
    }
     public function update_section(Request $request)
    {
        $data = array();
        $section_id=$request->section_id;
        $data['section_name'] = $request->section_name;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_section')
                  ->where('section_id',$section_id)
                  ->update($data);

        return Redirect::to('/manage-section');

    }
}

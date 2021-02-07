<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class EventController extends Controller
{
    public function index()
    {

        return view('admin.add_event');
    }
  

    public function all_event()
    {
        
        $event_info=DB::table('tbl_event')->get();
        $manage_event=view('admin.all_event')
           ->with('all_event_info', $event_info);

        return view('pages.admin_home_contant')
              ->with('admin.all_event',$manage_event);

      
    }

    public function save_event(Request $request)
   { 
      //$this->AdminAuthCheck();
      $data=array();
      $data['event_name']=$request->event_name;
      $data['event_location']=$request->event_location;
      $data['event_date']=$request->event_date;
      $data['start_time']=$request->start_time;
      $data['end_time']=$request->end_time;
      $data['event_description']=$request->event_description;
     
     

  
      $result=DB::table('tbl_event')->insert($data);
       
        
      Session::put('messege','insert success');
   
      return Redirect::to('/add-event');


    }


    public function delete_event($event_id)
    {
                 //$this->AdminAuthCheck();
                 DB::table('tbl_event')
                ->where('event_id',$event_id)
                ->delete();

                Session::get('messege','Data Delete Succesully');
                return Redirect::to('/all-event');

    }
    public function all_calender()
    {
      return view('admin.dashboard');
    }
}

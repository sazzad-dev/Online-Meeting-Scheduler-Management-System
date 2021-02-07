<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use File;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
{
    public function index()
    {
        return view('admin.add_user');
    }

    public function all_user()
    {
        //$this->AdminAuthCheck();
        $user_info=DB::table('tbl_user')->get();
        $manage_user=view('admin.all_user')
           ->with('all_user_info', $user_info);

        return view('pages.admin_home_contant')
              ->with('admin.all_user',$manage_user);

        //return view('admin.all_category');
    }

    public function save_user(Request $request)
   { 
      //$this->AdminAuthCheck();
      $data=array();
      $data['user_name']=$request->user_name;
      $data['user_mail']=$request->user_mail;
      $data['user_number']=$request->user_number;
     

      $image=$request->file('user_image');

      if($image)
      {
        $image_name=str_random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/image/';
        $image_url= $upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success)
        {
            $data['user_image']=$image_url;

            $result=DB::table('tbl_user')->insert($data);

            Session::put('messege','Data are Succesully Inserted');
            return Redirect::to('/add-user');

        }
      

      }

            $data['user_image']='';
            $result=DB::table('tbl_user')->insert($data);
            Session::put('messege','Data are Succesully Inserted');
            return Redirect::to('/add-user');

    }


    public function delete_user($user_id)
    {
                 //$this->AdminAuthCheck();
                 DB::table('tbl_user')
                ->where('user_id',$user_id)
                ->delete();

                Session::get('messege','Data Delete Succesully');
                return Redirect::to('/all-user');

    }
}

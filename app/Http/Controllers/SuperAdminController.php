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


class SuperAdminController extends Controller
{
    public function logout()
    {
      Session::flush();
      //Session::put('admin_name',null);
      //Session::put('admin_id',null);
      return Redirect::to('/admin');
    }
}

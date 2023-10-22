<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin_login');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

    }
}

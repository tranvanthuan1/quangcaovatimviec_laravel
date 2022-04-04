<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Fancades\Redirect;


class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
    	$UserAdmin = $request ->UserAdmin;
        $MkAdmin = md5($request ->MkAdmin);

        $result = DB::table('admin')->where('UserAdmin',$UserAdmin)->where('MkAdmin',$MkAdmin)->first();
        if($result)
        {
        	Session::put('AdminName',$result->AdminName);
        	Session::put('IdAdmin',$result->IdAdmin);
        	return view('admin.dashboard');
        }
        else{
        	Session::put('massage','Mật khẩu hoặc tài khoản không hợp lệ!!');
        	return view('admin_login');
        }

    }

     public function logout_admin(Request $request){
    	Session::put('AdminName',null);
        Session::put('IdAdmin',null);
        return view('admin_login');
    }

}

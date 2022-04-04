<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\Models\Post;
class LoginController extends Controller
{
    public function getAuthLogin()
    {
    	return view('pages.login');
    }

    public function AuthLogin(){
        $IdNguoiDung = Session::get('IdNguoiDung');
        if($IdNguoiDung){
            return Redirect::to('postAuthLogin');
        }else{
            return Redirect::to('getAuthLogin')->send();
        }
    }

/*    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

    public function postAuthLogin(Request $request)
    {
        $user = $request ->User_account;
        $password = md5($request ->password_account);
        $result = DB::table('nguoitimviec')->where('UserNguoiDung',$user)->where('MKNguoiDung',$password)
        ->where('TrangThaiNTV','Đã Xác Nhận')->first();
        if($result){
            Session::put('IdNguoiDung',$result->IdNguoiDung);
            Session::put('TenNguoiDung',$result->TenNguoiDung);
            return Redirect('/home');
        }
        else{
            Session::flash('error', 'Email hoặc mật khẩu không đúng!');
            return Redirect('/authlogin');
        }
    }


    // nhà tuyển dụng
    public function getLogin_ntd(){
        return view('pages.login_ntd');
    }

    public function postLogin_ntd(Request $request)
    {
        $user = $request ->Ntd_account;
        $password = md5($request ->password_account);
        $result = DB::table('nhatuyendung')->where('UserNtd',$user)->where('MKNtd',$password)
        ->where('TrangThaiTD','Đã Xác Nhận')->first();
        if($result){
            Session::put('IdNtd',$result->IdNtd);
            Session::put('UserNtd',$result->UserNtd);
            //Session::flash('success', 'Đăng nhập thành công!');
            return view('ntd.dashboard');
        }
        else{
            Session::flash('errorr', 'Email hoặc mật khẩu không đúng!');
            return Redirect('/login-ntd');
        }
    }
    public function recruitment(Request $request,$IdBaiDang){
        $this->AuthLogin();
        $data = array();
        $data['IdBaiDang'] = $IdBaiDang;
        $data['IdNguoiDung'] = Session::get('IdNguoiDung');
        DB::table('ungtuyen')->insert($data);
        Session::put('message','Thêm bài viết thành công');
        return redirect('home');
    }
    
    
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;
use Socialite;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class RegisterController extends Controller
{
    //ứng viên
    public function getAuthRegister()
    {
    	return view('pages.register');
    }

    public function postAuthRegister(Request $request) 
    {
        $data = array();
         // $data['IdNguoiDung'] = $request->IdNguoiDung;
        $data['UserNguoiDung'] = $request->UserNguoiDung;
        $data['MkNguoiDung'] = md5($request->MkNguoiDung);
        $data['TenNguoiDung'] = $request->TenNguoiDung;
        $data['GioiTinh'] = $request->GioiTinh;
        $data['SoDt'] = $request->SoDt;
        $data['NamSinh'] = $request->NamSinh;
        $data['DiaChi'] = $request->DiaChi;
        $data['Email'] = $request->Email;
        $data['Cv'] = $request->Cv;
        $data['TrangThaiNTV'] = "Chưa Xác Nhận";

        if($data){
            $IdNguoiDung = DB::table('nguoitimviec')->insertGetID($data);
            Session::put('IdNguoiDung',$IdNguoiDung);
            Session::put('UserNguoiDung',$request->UserNguoiDung);
          //  Session::flash('success', 'Đăng ký thành viên thành công!');
            return Redirect('/home');
        }
        else{
            Session::flash('error', 'Đăng ký thành viên thất bại!');
            return Redirect('/authregister');
        }

    }

    // nhà tuyển dụng

     public function getRegister_ntd()
    {
        return view('pages.register_ntd');
    }

    public function postRegister_ntd(Request $request) 
    {
        $data = array();
       // $data['IdNguoiDung'] = $request->IdNguoiDung;
        $data['UserNtd'] = $request->UserNtd;
        $data['MkNtd'] = md5($request->MkNtd);
        $data['TenNtd'] = $request->TenNtd; 
        $data['MST'] = $request->MST;
        $data['SoDT'] = $request->SoDT;
        $data['DiaChi'] = $request->DiaChi;
        $data['Email'] = $request->Email;
        $data['LinhVuc'] = $request->LinhVuc;
        $data['TrangThaiTD'] = "Chưa Xác Nhận";
        if($data){
            $IdNtd = DB::table('nhatuyendung')->insertGetID($data);
            Session::put('IdNtd',$IdNtd);
            Session::put('TenNtd',$request->TenNtd);
            return Redirect('/home');
        }
        else{
             Session::flash('errorr', 'Đăng ký thành viên thất bại!');
            return Redirect('/register-ntd');
        }
 

    }
}

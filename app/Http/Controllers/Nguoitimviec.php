<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class Nguoitimviec extends Controller
{
   	public function duyetnguoitimviec(){
   		$all_taikhoan = DB::table('nguoitimviec')->get();
    	$manager = view('admin.duyetnguoitimviec')->with('all_taikhoan', $all_taikhoan);
    	/*tên dùng để lấy dữ liệu khi dùng foreach*/
    	return view('admin_layout')->with('admin.duyetnguoitimviec',$manager);
   	}
   	public function pheduyettk($Id_TaiKhoan){
    	DB::table('nguoitimviec')->where('IdNguoiDung',$Id_TaiKhoan)->update(['TrangThaiNTV'=>'Đã Xác Nhận']);
    	return Redirect::to('duyetnguoitimviec');
    }
}




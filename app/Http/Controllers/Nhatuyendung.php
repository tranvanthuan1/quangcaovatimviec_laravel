<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class Nhatuyendung extends Controller
{
	public function duyetnhatuyendung(){
		$all_taikhoan = DB::table('nhatuyendung')->get();
    	$manager = view('admin.duyetnhatuyendung')->with('all_taikhoan', $all_taikhoan);
    	/*tên dùng để lấy dữ liệu khi dùng foreach*/
    	return view('admin_layout')->with('admin.duyetnhatuyendung',$manager);
	}
	public function pheduyettk($Id_TaiKhoan){
    	DB::table('nhatuyendung')->where('IdNtd',$Id_TaiKhoan)->update(['TrangThaiTD'=>'Đã Xác Nhận']);
    	return Redirect::to('duyetnhatuyendung');
    }
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class Baidangtuyen extends Controller
{
    public function duyetbai(){
    	$all_baidang = DB::table('baidangtuyendung')->join('nhatuyendung','nhatuyendung.IdNtd','=','baidangtuyendung.IdNtd')->get();

    	$manager = view('admin.duyetbaidang')->with('all_baidang', $all_baidang);
    	/*tên dùng để lấy dữ liệu khi dùng foreach*/
    	return view('admin_layout')->with('admin.duyetbaidang',$manager);
    }

    public function pheduyet($Id_BaiDang){
    	DB::table('baidangtuyendung')->where('IdBaiDang',$Id_BaiDang)->update(['TrangThaiBD'=>'Đã Xác Nhận']);
    	return Redirect::to('duyetbaidang');
    }
}




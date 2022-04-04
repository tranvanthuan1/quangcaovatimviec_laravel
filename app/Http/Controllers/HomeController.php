<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        // lấy ra tất cả các danh mục sản phẩm và thương hiệu sản phẩm
		$all_job = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);

        $CongNghe = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.NganhNghe','like','Công nghệ / Thiết kế')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);
        $KeToan = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.NganhNghe','like','Kế toán / Kiểm toán')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);
        $BanHang = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.NganhNghe','like','Bán hàng / Kinh doanh')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);
        $Dien = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.NganhNghe','like','Điện / Điện tử / Điện lạnh')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);
        $DuLich = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.NganhNghe','like','Du lịch')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);

    	return view('pages.home')->with('CongNghe',$CongNghe)->with('KeToan',$KeToan)
        ->with('BanHang',$BanHang)->with('Dien',$Dien)->with('DuLich',$DuLich)->with('all_job',$all_job);
    }
    public function default(){
        return view('pages.default');
    }
	public function show_details($IdBaiDang){

        $details_job = DB::table("BaiDangTuyenDung")
        ->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
        ->Where('BaiDangTuyenDung.IdBaiDang',$IdBaiDang)->get();
        return view('pages.show_detail')->with('details_job', $details_job);
    }
    public function search(Request $request)
    {
    	$keywords = $request->keyword;

    	$search_job = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.ChiTietCongViec','like','%'.$keywords.'%')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);
    	return view('pages.search')->with('search_job',$search_job);
    }
	public function search_by_type(Request $request)
    {
    	$keywords = $request->NganhNghe;

    	$search_job = DB::table('BaiDangTuyenDung')
		->join('NhaTuyenDung','NhaTuyenDung.IdNtd','=','BaiDangTuyenDung.IdNtd')
		->where('BaiDangTuyenDung.TrangThaiBD','Đã Xác Nhận')
        ->Where('BaiDangTuyenDung.NganhNghe','like','%'.$keywords.'%')
		->select('BaiDangTuyenDung.*','NhaTuyenDung.*')->paginate(6);
    	return view('pages.search_by_type')->with('search_job',$search_job);
    }
	
}

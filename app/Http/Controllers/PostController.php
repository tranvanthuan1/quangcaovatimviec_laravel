<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\Models\Post;
 
class PostController extends Controller
{
    public function AuthLogin(){
        $IdNtd = Session::get('IdNtd');
        if($IdNtd){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('ntd')->send();
        }
    } 
    public function add_post(){
        $this->AuthLogin();
        //$cate_post = CatePost::orderBy('Id_cp', 'DESC')->get();
        $post = Post::orderBy('IdBaiDang', 'DESC')->get();
 
        return view('ntd.post.add_post')->with(compact('post'));
       
 
    }
 
    public function save_post(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['IdNtd'] = Session::get('IdNtd');
        $data['ChiTietCongViec'] = $request->ChiTietCongViec;
        $data['NganhNghe'] = $request->NganhNghe;
        $data['KhuVuc'] = $request->KhuVuc;
        $data['YeuCau'] = $request->YeuCau;
        $data['QuyenLoi'] = $request->QuyenLoi;
        $data['ThoiGian'] = $request->ThoiGian;
        $data['MucLuong'] = $request->MucLuong;
        $data['SoLuong'] = $request->SoLuong;
        $data['TrangthaiBD'] = "Chưa Xác Nhận";
        /*$post->TieuDe = $data['TieuDe'];
        $post->ChiTietCongViec = $data['ChiTietCongViec'];
        $post->NganhNghe = $data['NganhNghe'];
        $post->KhuVuc = $data['KhuVuc'];
        $post->YeuCau = $data['YeuCau'];
        $post->QuyenLoi = $data['QuyenLoi'];
        $post->ThoiGian = $data['ThoiGian'];
        $post->MucLuong = $data['MucLuong'];
        $post->SoLuong = $data['SoLuong'];
 
        $post->TrangthaiBD = $data['TrangthaiBD'];*/
 
        $get_image = $request->file('ImageBaiDang');
     
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/',$new_image);
            $data['ImageBaiDang'] = $new_image;
            DB::table('baidangtuyendung')->insert($data);
            Session::put('message','Thêm bài viết thành công');
            return Redirect::to('add-post');
        }
        $data['ImageBaiDang'] = '';
        DB::table('baidangtuyendung')->insert($data);
        Session::put('message','Thêm bài viết thành công');
        return Redirect::to('all-post');
    }
   
    public function all_post(){
        $this->AuthLogin();
        $userid = Session::get('IdNtd');
        $all_post = Post::where('BaiDangTuyenDung.IdNtd',$userid)->orderBy('IdBaiDang', 'DESC')->paginate(5);
   
        return view('ntd.post.list_post')->with(compact('all_post'));
    }
 
    public function delete_post($IdBaiDang){
        $this->AuthLogin();
        $post = Post::find($IdBaiDang);
        $ImageBaiDang = $post->ImageBaiDang;
 
        if($ImageBaiDang){
            $path='public/uploads/'.$ImageBaiDang;
            unlink($path);
        }
 
        $post->delete();
 
        Session::put('message','Xóa bài viết thành công');
        return redirect()->back();
    }
   
    public function edit_post($IdBaiDang){
        $this->AuthLogin();
        $post = Post::find($IdBaiDang);
       
        return view('ntd.post.edit_post')->with(compact('post'));
 
    }
 
    public function update_post(Request $request,$IdBaiDang){
        $this->AuthLogin();
        $data = array();
        $data['ChiTietCongViec'] = $request->ChiTietCongViec;
        $data['NganhNghe'] = $request->NganhNghe;
        $data['KhuVuc'] = $request->KhuVuc;
        $data['YeuCau'] = $request->YeuCau;
        $data['QuyenLoi'] = $request->QuyenLoi;
        $data['ThoiGian'] = $request->ThoiGian;
        $data['MucLuong'] = $request->MucLuong;
        $data['SoLuong'] = $request->SoLuong;
 
        $get_image = $request->file('ImageBaiDang');
       
        if($get_image){
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('public/uploads/',$new_image);
                    $data['ImageBaiDang'] = $new_image;
                    DB::table('baidangtuyendung')->where('IdBaiDang',$IdBaiDang)->update($data);
                    Session::put('message','Cập nhật bài viết thành công');
                    return Redirect::to('all-post');
        }
           
        DB::table('baidangtuyendung')->where('IdBaiDang',$IdBaiDang)->update($data);
        Session::put('message','Cập nhật bài viết thành công');
        return Redirect::to('all-post');
    }
    public function show_recruitment($IdBaiDang){
        $this->AuthLogin();
        $all_recruitment = DB::table('UngTuyen')
		->join('NguoiTimViec','NguoiTimViec.IdNguoiDung','=','UngTuyen.IdNguoiDung')
		->where('UngTuyen.IdBaiDang',$IdBaiDang)
		->select('UngTuyen.*','NguoiTimViec.*')->paginate(5);
        return view('ntd.post.recruitment')->with(compact('all_recruitment'));
    }
    public function logout_ntd(Request $request){
    	Session::flush();
        return redirect('home');
    }
    
   
 
   
}


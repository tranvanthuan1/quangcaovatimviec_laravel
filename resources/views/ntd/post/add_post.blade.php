@extends('ntd_layout')
@section('ntd_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm bài đăng
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">
 
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-post')}}" method="post" enctype='multipart/form-data'>
                                    {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Lĩnh Vực</label>
                                      <select name="NganhNghe" class="form-control input-sm m-bot15">
                                            <option>Bán hàng / Kinh doanh</option>
                                            <option>Kế toán / Kiểm toán</option>
                                            <option>Hành chính / Thư ký</option>
                                            <option>Tiếp thị & Marketing</option>
                                            <option>Cơ khí / Ô tô / Tự động hóa</option>
                                            <option>Du lịch</option>
                                            <option>Điện / Điện tử / Điện lạnh</option>
                                            <option>Chăm sóc khách hàng</option>
                                            <option>Sản xuất / Sản xuất vận hành</option>
                                            <option>Tài chính / Đầu tư</option>
                                            <option>Công nghệ / Thiết kế</option>
                                            <option> Kiến trúc / Xây dựng</option>
                                    </select>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại hình công việc</label>
                                      <select name="ThoiGian" class="form-control input-sm m-bot15">
                                            <option>Fulltime / Giờ hành chính</option>
                                            <option>Parttime / Ca</option>
                                    </select>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Khu vực</label>
                                      <select name="KhuVuc" class="form-control input-sm m-bot15">
                                            <option>Quận Liên Chiểu</option>
                                            <option>Quận Hải Châu</option>
                                            <option>Quận Cẩm Lệ</option>
                                            <option>Quận Thanh Khê</option>
                                            <option>Quận Sơn Trà</option>
                                            <option>Quận Ngũ Hành Sơn</option>
                                            <option>Huyện Hòa Vang</option>
                                            <option>Huyện Hoàng Sa</option>
                                    </select>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mức lương</label>
                                    <input type ="Text" class="form-control" name="MucLuong" id="exampleInputPassword1" placeholder="Mức lương"></textarea>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chi tiết công việc</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="ChiTietCongViec" id="exampleInputPassword1" placeholder="Chi tiết công việc"></textarea>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số lượng</label>
                                      <select name="SoLuong" class="form-control input-sm m-bot15">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5 - 10</option>
                                            <option>10 - 15</option>
                                            <option>15 - 20</option>
                                    </select>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Yêu cầu</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="YeuCau" id="exampleInputPassword1" placeholder="Yêu cầu"></textarea>
                                </div>
 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quyền lợi</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="QuyenLoi" id="exampleInputPassword1" placeholder="Quyền lợi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" name="ImageBaiDang" class="form-control" id="exampleInputEmail1">
                               
                                </div>>
 
                                <button type="submit" name="add_post" class="btn btn-info">Thêm</button>
                                </form>
                            </div>
 
                        </div>
                    </section>
 
            </div>
@endsection

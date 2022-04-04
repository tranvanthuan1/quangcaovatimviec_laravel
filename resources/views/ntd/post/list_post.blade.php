@extends('ntd_layout')
@section('ntd_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách bài viết
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Hình ảnh</th>
            <th>Lĩnh vực</th>
            <th>Loại hình công việc</th>
            <th>Khu vực</th>
            <th>Mức lương</th>
            <th>Chi tiết công việc</th>
            <th>Số lượng</th>
            <th>Yêu cầu</th>
            <th>Quyền lợi</th>          
            <th>Trạng thái</th>
           
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_post as $key => $post)
          <tr>
            <td><img src="public/uploads/{{ $post->ImageBaiDang }}" height="100" width="100"></td>
            <td>{{ $post->NganhNghe }}</td>
            <td>{{ $post->ThoiGian }}</td>
            <td>{{ $post->KhuVuc }}</td>
            <td>{{ $post->MucLuong }}</td>
            <td>{{ $post->ChiTietCongViec }}</td>
            <td>{{ $post->SoLuong }}</td>
            <td>{{ $post->YeuCau }}</td>
            <td>{{ $post->QuyenLoi }}</td>
            <td>
               @if($post->TrangThaiBD==0){
                Chờ xét duyệt              
                }
                @else{
                Đã xét duyệt
                }
              @endif
            </td>
           
            <td>
              <a href="{{URL::to('/edit-post/'.$post->IdBaiDang)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa bài viết này không?')" href="{{URL::to('/delete-post/'.$post->IdBaiDang)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              <a href="{{URL::to('/show_recruitment/'.$post->IdBaiDang)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-users">ứng viên</i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
       
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">Showing 5 of N items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {!!$all_post->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection


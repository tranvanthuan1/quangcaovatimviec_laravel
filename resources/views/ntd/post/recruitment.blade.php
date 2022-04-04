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
            <th>Tên</th>
            <th>Giới Tính</th>
            <th>Năm sinh</th>
            <th>Số điện thoại</th>
            <th>   Địa chỉ   </th>
            <th>          CV        </th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_recruitment as $key => $recruitment)
          <tr>
            <td>{{ $recruitment->TenNguoiDung }}</td>
            <td>{{ $recruitment->GioiTinh }}</td>
            <td>{{ $recruitment->NamSinh }}</td>
            <td>{{ $recruitment->SoDt }}</td>
            <td>{{ $recruitment->Email }}</td>
            <td>{{ $recruitment->DiaChi }}</td>
            <td>{{ $recruitment->Cv }}</td>
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
            {!!$all_recruitment->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
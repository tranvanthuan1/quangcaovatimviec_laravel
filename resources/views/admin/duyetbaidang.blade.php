@extends('admin_layout');
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
          Duyệt Bài Đăng
        </div>

        <div class="row w3-res-tb">
          <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">Bulk action</option>
                <option value="1">Delete selected</option>
                <option value="2">Bulk edit</option>
                <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
          </div>
          <div class="col-sm-4">
          </div>
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
          <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th style="width: 100px">Mã bài đăng</th>
                <th style="width:200px">Tiêu đề</th>
                <th style="width: 220px">Tên nhà tuyển dụng</th>
                <th style="width: 120px">Ngày Đăng</th>
                <th style="width: 120px">Trạng thái</th>
                <th style="width:50px;">Thao tác</th>
              </tr>
            </thead>
            <tbody>

              @foreach($all_baidang as $key => $baidang)
              <tr>
                <td><span class="text-ellipsis">{{$baidang->IdBaiDang}}</span></td>
                <td><span class="text-ellipsis">{{$baidang->ChiTietCongViec}}</span></td>
                <td><span class="text-ellipsis">{{$baidang->TenNtd}}</span></td>
                <td><span class="text-ellipsis">{{$baidang->ThoiGian}}</span></td>
                <td><span class="text-ellipsis">{{$baidang->TrangThaiBD}}
{{--                             <select id="gender" onchange="genderChanged(this)" style="width: 150px" class="form-control m-bot15">
                                <option <?php
                                    if ($baidang->TrangThaiBD=="0"){
                                      echo "selected='selected'";
                                    }else{
                                      echo "";
                                    }          
                                  ?> value="0">Chưa phê duyệt</option>
                                <option <?php
                                    if ($baidang->TrangThaiBD=="1"){
                                      echo "selected='selected'";
                                    }else{
                                      echo "";
                                    }          
                                  ?> value="1" >Đã phê duyệt</option>
                                <script type="text/javascript"> 
                                  function genderChanged(obj){
                                    var value = obj.value;
                                    if (value == '0') {
                                      //alert('Chưa xác nhận');

                                    }else if (value == '1') {
                                      window.location="{{URL::to('/pheduyet/'.$baidang->IdBaiDang)}}";
                                    }
                                  }
                                </script>
                            </select>    --}} 

                </span></td>
                <td>
                  <a href="{{URL::to('/pheduyet/'.$baidang->IdBaiDang)}}" class="active" ui-toggle-class="">
                    {{-- <i class="fa fa-check text-success text-active"> --}}
                      <?php
                        if ($baidang->TrangThaiBD == "Chưa Xác Nhận") {
                          echo "<i class='fa fa-check text-success text-active'>";
                        }
                        else{
                          echo "";
                        }
                      ?>
                    </i>
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
              <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">                
              <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
    </div>
</div>
@endsection



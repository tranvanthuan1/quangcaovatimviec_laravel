@extends('welcome')
@section('content')
  <!--Features-Section-Start-->
  <section id="features">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading">
          <h2>AWESOME FEATUR<span>ES</span></h2>
          <div class="line"></div>
          <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
            et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"><h6>công nghệ</h6></i></a></li>
        <li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-laptop"><h6>tài chính kế toán</h6></i></a></li>
        <li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-code"><h6>du lịch</h6></i></a></li>
        <li role="presentation"><a href="#tab-4" role="tab" data-toggle="tab"><i class="fa fa-th-large"><h6>Bán hàng / Kinh doanh</h6></i></a></li>
        <li role="presentation"><a href="#tab-5" role="tab" data-toggle="tab"><i class="fa fa-file-image-o"><h6>bán thời gian</h6></i></a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active feat-sec" id="tab-1">
          <div class="row">
            <div class="col-md-12">
              
              @foreach($CongNghe as $key => $congnghe)
              <div class="col-md-4 blog-sec">
                <a href="{{URL::to('/chi-tiet-cong-viec'.$congnghe->IdBaiDang)}}">
                  <div class="blog-info"> <img src="{{URL::to('public/uploads/'.$congnghe->ImageBaiDang)}}" class="img-responsive" alt="">
                    <div class="data-meta">
                      <h4>Jan</h4>
                      <strong>10</strong><br>
                      2016 </div>
                    <a href="#">
                    <h5>{{$congnghe->ChiTietCongViec}}</h5>
                    </a>
                    <ul class="blog-icon">
                      <li><i class="fa fa-usd"></i><a href="#">
                        <h6>{{number_format($congnghe->MucLuong).' '.'VNĐ'}}</h6>
                        </a></li>
                      <li class="comment"><i class="fa fa-clock-o"></i><a href="#">
                        <h6>{{$congnghe->ThoiGian}}</h6>
                        </a></li>
                    </ul>
                    <p>{{$congnghe->YeuCau}}</p>
                    <p>{{$congnghe->QuyenLoi}}</p>
                    <p>{{$congnghe->YeuCau}}</p>
                    <p>{{$congnghe->TenNtd}}</p>
                    <p>{{$congnghe->SoDt}} || {{$congnghe->Email}}</p>
                    <a href="#" class="btn-blg">Read More</a> 
                  </div>
                </a>
              </div>
              @endforeach
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-7 text-right text-center-xs">                
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    {!!$CongNghe->links()!!}
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-2">
          <div class="row">
            <div class="col-md-12">
              @foreach($KeToan as $key => $ketoan)
              <div class="col-md-4 blog-sec">
                <a href="{{URL::to('/chi-tiet-cong-viec/'.$ketoan->IdBaiDang)}}">
                <div class="blog-info"> <img src="{{URL::to('public/uploads/'.$ketoan->ImageBaiDang)}}" class="img-responsive" alt="">
                  <div class="data-meta">
                    <h4>Jan</h4>
                    <strong>10</strong><br>
                    2016 </div>
                  <a href="#">
                  <h5>{{$ketoan->ChiTietCongViec}}</h5>
                  </a>
                  <ul class="blog-icon">
                    <li><i class="fa fa-usd"></i><a href="#">
                      <h6>{{number_format($ketoan->MucLuong).' '.'VNĐ'}}</h6>
                      </a></li>
                    <li class="comment"><i class="fa fa-clock-o"></i><a href="#">
                      <h6>{{$ketoan->ThoiGian}}</h6>
                      </a></li>
                  </ul>
                  <p>{{$ketoan->YeuCau}}</p>
                  <p>{{$ketoan->QuyenLoi}}</p>
                  <p>{{$ketoan->YeuCau}}</p>
                  <p>{{$ketoan->TenNtd}}</p>
                  <p>{{$ketoan->SoDt}} || {{$ketoan->Email}}</p>
                  <a href="#" class="btn-blg">Read More</a> 
                </div>
                </a>
              </div>
              @endforeach
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-7 text-right text-center-xs">                
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    {!!$KeToan->links()!!}
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-3">
          <div class="row">
            <div class="col-md-12">
              @foreach($DuLich as $key => $dulich)
              <div class="col-md-4 blog-sec">
                <a href="{{URL::to('/chi-tiet-cong-viec/'.$dulich->IdBaiDang)}}">
                <div class="blog-info"> <img src="{{URL::to('public/uploads/'.$dulich->ImageBaiDang)}}" class="img-responsive" alt="">
                  <div class="data-meta">
                    <h4>Jan</h4>
                    <strong>10</strong><br>
                    2016 </div>
                  <a href="#">
                  <h5>{{$dulich->ChiTietCongViec}}</h5>
                  </a>
                  <ul class="blog-icon">
                    <li><i class="fa fa-usd"></i><a href="#">
                      <h6>{{number_format($dulich->MucLuong).' '.'VNĐ'}}</h6>
                      </a></li>
                    <li class="comment"><i class="fa fa-clock-o"></i><a href="#">
                      <h6>{{$dulich->ThoiGian}}</h6>
                      </a></li>
                  </ul>
                  <p>{{$dulich->YeuCau}}</p>
                  <p>{{$dulich->QuyenLoi}}</p>
                  <p>{{$dulich->YeuCau}}</p>
                  <p>{{$dulich->TenNtd}}</p>
                  <p>{{$dulich->SoDt}} || {{$dulich->Email}}</p>
                  <a href="#" class="btn-blg">Read More</a> </div>
                </a>
              </div>
              @endforeach
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-7 text-right text-center-xs">                
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    {!!$DuLich->links()!!}
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-4">
          <div class="row">
            <div class="col-md-12">
              @foreach($BanHang as $key => $banhang)
              <div class="col-md-4 blog-sec">
                <a href="{{URL::to('/chi-tiet-cong-viec/'.$banhang->IdBaiDang)}}">
                <div class="blog-info"> <img src="{{URL::to('public/uploads/'.$banhang->ImageBaiDang)}}" class="img-responsive" alt="">
                  <div class="data-meta">
                    <h4>Jan</h4>
                    <strong>10</strong><br>
                    2016 </div>
                  <a href="#">
                  <h5>{{$banhang->ChiTietCongViec}}</h5>
                  </a>
                  <ul class="blog-icon">
                    <li><i class="fa fa-usd"></i><a href="#">
                      <h6>{{number_format($banhang->MucLuong).' '.'VNĐ'}}</h6>
                      </a></li>
                    <li class="comment"><i class="fa fa-clock-o"></i><a href="#">
                      <h6>{{$banhang->ThoiGian}}</h6>
                      </a></li>
                  </ul>
                  <p>{{$banhang->YeuCau}}</p>
                  <p>{{$banhang->QuyenLoi}}</p>
                  <p>{{$banhang->YeuCau}}</p>
                  <p>{{$banhang->TenNtd}}</p>
                  <p>{{$banhang->SoDt}} || {{$banhang->Email}}</p>
                  <a href="#" class="btn-blg">Read More</a> </div>
                </a>
              </div>
              @endforeach
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-7 text-right text-center-xs">                
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    {!!$BanHang->links()!!}
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-5">
          <div class="row">
            <div class="col-md-12">
              @foreach($Dien as $key => $dien)
              <div class="col-md-4 blog-sec">
                <a href="{{URL::to('/chi-tiet-cong-viec/'.$dien->IdBaiDang)}}">
                <div class="blog-info"> <img src="{{URL::to('public/uploads/'.$dien->ImageBaiDang)}}" class="img-responsive" alt="">
                  <div class="data-meta">
                    <h4>Jan</h4>
                    <strong>10</strong><br>
                    2016 </div>
                  <a href="#">
                  <h5>{{$dien->ChiTietCongViec}}</h5>
                  </a>
                  <ul class="blog-icon">
                    <li><i class="fa fa-usd"></i><a href="#">
                      <h6>{{number_format($dien->MucLuong).' '.'VNĐ'}}</h6>
                      </a></li>
                    <li class="comment"><i class="fa fa-clock-o"></i><a href="#">
                      <h6>{{$dien->ThoiGian}}</h6>
                      </a></li>
                  </ul>
                  <p>{{$dien->YeuCau}}</p>
                  <p>{{$dien->QuyenLoi}}</p>
                  <p>{{$dien->YeuCau}}</p>
                  <p>{{$dien->TenNtd}}</p>
                  <p>{{$dien->SoDt}} || {{$dien->Email}}</p>
                  <a href="#" class="btn-blg">Read More</a> </div>
                </a>
              </div>
              @endforeach
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-7 text-right text-center-xs">                
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                    {!!$Dien->links()!!}
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Pricing-Section-Start-->
  <section id="pricing">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading">
          <h2>PRICE PACKAG<span>ES</span></h2>
          <div class="line"></div>
          
        </div>
      </div>
    </div>  
    <div class="container">
      <div class="row">
        <div class="">
          @foreach($all_job as $key => $job)
          <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
            <ul class="pricing">
              <a href="{{URL::to('/chi-tiet-cong-viec/'.$job->IdBaiDang)}}">
              <li class="plan-header">
                <div class="media service-box">
                  <div class="pull-left"> <i class="fa fa-users"></i> </div>
                  <div class="media-body">
                    <h5 class="media-heading"> {{$job->ChiTietCongViec}} </h5>
                    <i class="fa fa-usd">{{number_format($job->MucLuong).' '.'VNĐ'}}</i><a href="#">
                    </a><i class="fa fa-clock-o">{{$job->ThoiGian}}</i><a href="#">
                    </a>
                    <p>{{$job->YeuCau}}</p>
                    <p>Đơn vị tuyển dụng : {{$job->TenNtd}}</p>
                    <p>Số điện thại : {{$job->SoDt}} || Email : {{$job->Email}}</p>
                    <a href="#" class="btn-blg">Read More</a>
                  </div>
                </div>
              </li>
              </a>  
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <footer class="panel-footer">
      <div class="row">
       
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">Showing 5 of N items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {!!$all_job->links()!!}
          </ul>
        </div>
      </div>
    </footer>

  </section>
  
  <!--Blog-Section-Start-->
  <section id="blog">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading">
          <h2>LATEST BL<span>OG</span></h2>
          <div class="line"></div>
          <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
            et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
      
    </div>
  </section>
@endsection
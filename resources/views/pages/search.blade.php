@extends('welcome')
@section('content')

<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Kết quả tìm kiếm</h2>
                        @foreach($search_job as $key => $job)
                        <div class="col-md-4 blog-sec">
                            <a href="{{URL::to('/chi-tiet-cong-viec'.$job->IdBaiDang)}}">
                              <div class="blog-info"> <img src="{{URL::to('public/uploads/'.$job->ImageBaiDang)}}" class="img-responsive" alt="">
                                <div class="data-meta">
                                  <h4>Jan</h4>
                                  <strong>10</strong><br>
                                  2016 </div>
                                <a href="#">
                                <h5>{{$job->ChiTietCongViec}}</h5>
                                </a>
                                <ul class="blog-icon">
                                  <li><i class="fa fa-usd"></i><a href="#">
                                    <h6>{{number_format($job->MucLuong).' '.'VNĐ'}}</h6>
                                    </a></li>
                                  <li class="comment"><i class="fa fa-clock-o"></i><a href="#">
                                    <h6>{{$job->ThoiGian}}</h6>
                                    </a></li>
                                </ul>
                                <p>{{$job->YeuCau}}</p>
                                <p>{{$job->QuyenLoi}}</p>
                                <p>{{$job->YeuCau}}</p>
                                <p>{{$job->TenNtd}}</p>
                                <p>{{$job->SoDt}} || {{$job->Email}}</p>
                                <a href="#" class="btn-blg">Read More</a> 
                              </div>
                            </a>
                          </div>
                        

        @endforeach
        <footer class="panel-footer">
            <div class="row">
              <div class="col-sm-7 text-right text-center-xs">                
                <ul class="pagination pagination-sm m-t-none m-b-none">
                  {!!$search_job->links()!!}
                </ul>
              </div>
            </div>
          </footer>                     
@endsection
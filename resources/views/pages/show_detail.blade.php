@extends('welcome')
@section('content')
<div role="tabpanel" >
	@foreach($details_job as $key => $job)
	<div class="col-md-6 tab-img"><img src="{{URL::to('public/uploads/'.$job->ImageBaiDang)}}" class="img-responsive" alt=""></div>
    <div class="col-md-6 tab">
      <h3> {{$job->ChiTietCongViec}} </h3>
      <div class="line"></div>
      <div class="clearfix"></div>
      <h5 class="fa fa-usd">{{number_format($job->MucLuong).' '.'VNĐ'}}</h5>
	  <h5 class="fa fa-clock-o">{{$job->ThoiGian}}</h5>
		<h5>{{$job->YeuCau}}</h5>
		<h5>Đơn vị tuyển dụng : {{$job->TenNtd}}</h5>
		<h5>Số điện thại : {{$job->SoDt}} || Email : {{$job->Email}}</h5>
		<form action="{{URL::to('/ung-tuyen/'.$job->IdBaiDang)}}" method="POST">
			{{ csrf_field() }}
			<div style="margin: 10px">
				<input style="height: 35px" type="submit" style="margin-top: 0px;" name="search_items"  value="Ứng Tuyển"/ >
			</div>
		</form>
    </div>

	@endforeach
</div>
@endsection
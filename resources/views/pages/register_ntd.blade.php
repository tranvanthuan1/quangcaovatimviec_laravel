
<!-- Head -->
<head>

<title>Đăng Ký Nhà Tuyển Dụng</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="{{asset('public/frontend/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="{{asset('public/frontend/css/style-login.css')}}" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body style="background: url({{asset('public/frontend/images/b2.jpg')}});">

	<h1>Đăng Ký Nhà Tuyển Dụng</h1>
	<!-- for register popup -->
	<div class="w3layoutscontaineragileits">
	<!--<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">-->
				<form action="{{URL::to('/register-ntd')}}" method="POST">
					 @csrf
					 <?php
						$errorr = Session::get('errorr');
						if($errorr){
							echo $errorr;
							Session::put('errorr',null);
							}
					?>
					<h3>Thông tin đăng nhập</h3>
						<div class="form-sub-w3ls">
							<input placeholder="Tên tài khoản" name="UserNtd" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<!-- @if ($errors->has('UserNguoiDung'))
                				<span class="text-danger text-left">{{ $errors->first('UserNguoiDung') }}</span>
            				@endif -->
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Mật khẩu"  type="password" name="MkNtd" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
							<!-- @if ($errors->has('MkNguoiDung'))
               					 <span class="text-danger text-left">{{ $errors->first('MkNguoiDung') }}</span>
           				 @endif -->
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập lại mật khẩu" name="MkNtdconfirmation" type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
							<!-- @if ($errors->has('MkNguoiDung_confirmation'))
                				<span class="text-danger text-left">{{ $errors->first('MkNguoiDung_confirmation') }}</span>
            					@endif -->
						</div>
						<h3>Thông tin liên hệ</h3>
						<div class="form-sub-w3ls">
							<input placeholder="Tên Công Ty" name="TenNtd" type="text" required="">
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Mã Số Thuế" name="MST" type="text" required="">
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Số điện thoại" name="SoDT"  type="text" required="">
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Địa chỉ" name="DiaChi" type="text" required="">
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Email" class="mail" name="Email" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
							<!-- @if ($errors->has('Email'))
               					 <span class="text-danger text-left">{{ $errors->first('Email') }}</span>
            				@endif -->
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Lĩnh Vực Hoạt Động" name="LinhVuc" type="text" required="">
						</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Tôi chấp nhận các Điều khoản & Điều kiện</label>
					</div>
					<div class="submit-w3l" >
						<input type="submit" value="Đăng ký">
					</div>
					<center><a href="{{URL::to('/login-ntd')}}">Quay về đăng nhập</a></center>
				</form>
			<!--</div>
		</div>	
	</div>-->
</div>
	<!-- //for register popup -->
	
	
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.1.4.min.js')}}"></script>

	<!-- pop-up-box-js-file -->  
		<script src="{{asset('public/frontend/js/jquery.magnific-popup.js')}}" type="text/javascript')}}"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->
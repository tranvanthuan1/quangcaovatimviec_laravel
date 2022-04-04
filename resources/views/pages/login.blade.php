
<!-- Head -->
<head>

<title>Đăng nhập Ứng viên</title>

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

<!--Thong báo -->

<!-- Body style="background: url({{asset('public/frontend/images/b2.jpg')}});" -->
<body style="background: url({{asset('public/frontend/images/b2.jpg')}});">
	<h1>Đăng Nhập Ứng Viên</h1>

	<div class="w3layoutscontaineragileits">
		<!--  @php $token = md5(now()); @endphp -->
		<form action="{{URL::to('/authlogin')}}" method="POST">			
		@csrf
		<?php
			$error = Session::get('error');
			if($error){
				echo $error;
				Session::put('error',null);
				}
		?>
			<input type="text" Name="User_account" placeholder="Tên tài khoản" required="">
				<!-- @if ($errors->has('Email'))
                     <span class="help-block" style="color: red">
                       <strong>{{ $errors->first('Email') }}</strong>
                      </span>
                 @endif   -->
			<input type="password" Name="password_account" placeholder="Mật khẩu" required="">
			<!-- @if ($errors->has('MKNguoiDung'))
                <span class="help-block" style="color: red">
                	<strong>{{ $errors->first('MKNguoiDung') }}</strong>
           		</span>
            @endif -->
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Nhớ đăng nhập</label>
					<a href="#">Quên mật khẩu?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<p><a class="w3_play_icon1" href="{{URL::to('/home')}}">Back </a><span> ←</span> Đăng ký tài khoản <span>→</span> <a class="w3_play_icon1" href="{{URL::to('/authregister')}}"> Click Here</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	
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
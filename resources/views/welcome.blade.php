<!DOCTYPE html>
<!--
	Cosmix by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Cosmix Free HTML5 Responsive Template | Template Stock</title>
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.css')}}">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/stylelpus.css')}}">
<!--Responsive-->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}">
<!--Animation-->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/animate.css')}}">
<!--Prettyphoto-->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/prettyPhoto.css')}}">
<!--Font-Awesome-->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/font-awesome.css')}}">
<!--Owl-Slider-->
<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{('public/frontend/css/owl.transitions.css')}}">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  [endif]-->
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
<!--Navigation-->
<header id="menu">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#menu"><img src="public/frontend/images/Logo/01.png" alt=""></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav">
            <li class="active"><a class="scroll" href="{{URL::to('/')}}">Home</a></li>
            <li><a class="scroll" href="#about">About</a></li>
            <li><a class="scroll" href="#service">Service</a></li>
            <li><a class="scroll" href="#features">Features</a></li>
            <?php  
              $TenNguoiDung = Session::get('TenNguoiDung');
                $TenNtd = Session::get('TenNtd');
                if ($TenNguoiDung == false && $TenNtd == false) {
                  // echo "Xin chào $TenNguoiDung"; 
                  // echo "Xin chào $TenNtd";
            ?>
             <li class="sub-menu"><a href="javascript:;"><i class="fa fa-lock"></i> Đăng Nhập</a>
                  <ul class="sub">
                      <li><a href="{{URL::to('/login-ntd')}}" >Nhà tuyển dụng</a></li> 
                      <li><a href = "{{URL::to('/authlogin')}}">Ứng viên</a></li> 
                  </ul>
                </li>
               
                <?php 
                }else{
                  ?>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
            <?php } ?>
            


          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
</header>
<!--Slider-Start-->
<section id="slider">
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image:url(public/frontend/images/Slider/01.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages also included in this theme with lots of CSS and JQuery animations</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(public/frontend/images/Slider/02.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages layouts also in this theme with lots of CSS and JQuery animations</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(public/frontend/images/Slider/03.jpg)">
        <div class="carousel-caption container">
          <div class="row">
             <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple page also included in this theme with lots of CSS and JQuery animations</p>
            </div>
          </div>
        </div>
      </div>
      <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
  </div>
  <!--/#home-carousel-->
</section>
<div class="container">
  <div >
    <form action="{{URL::to('/tim-kiem')}}" method="POST">
        {{ csrf_field() }}
        <div style="margin: 10px">
            <input style="width: 50%; height: 35px;" type="text" name="keyword" placeholder="Tìm kiếm sản phẩm"/ >
            <input style="height: 35px" type="submit" style="margin-top: 0px;" name="search_items"  value="Tìm kiếm"/ >
        </div>
    </form>
    <form role="form" action="{{URL::to('/tim-kiem-theo-nganh')}}" method="POST">
      {{ csrf_field() }}
      <div style="margin: 10px">
        <select style="height: 35px" name="NganhNghe">
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
          <option>Kiến trúc / Xây dựng</option>
        </select>
        <input style="height: 35px" type="submit" style="margin-top: 0px;" name="search_items"  value="Tìm kiếm theo ngành"/ >
      </div>
    </form>
  </div>
</div>

<!--Service-Section-Start-->
<section id="service">
  <div class="container">
    <div class="experience">
      <div class="col-sm-6 col-xs-12">
        <div class="our-skills wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p class="lead">User Experiances</p>
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="90" style="width: 95%;"> 95% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
            <p class="lead">Web Design</p>
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"> 80% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <p class="lead">Programming</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="60" style="width: 60%;"> 60% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
            <p class="lead">Fun</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="70" style="width: 70%;"> 70% </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms"> <img src="public/frontend/images/Service/01.png" class="img-responsive" alt=""> </div>
    </div>
  </div>
</section>
<section id="features">
  <div class="container">
    @yield('content')
  </div>
</section>    
<!--Client-Section-Start-->
<div id="client">
  <div class="container">
    <div id="client-slider" class="owl-carousel">
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/1.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/2.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/3.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/4.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/5.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/6.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="public/frontend/images/clients/7.png" class="img-responsive" alt=""/></a> </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="bg-sec">
    <div class="container">
      <h2>LOOKING FORWARD TO <strong>HEARING </strong>FROM YOU!</h2>
    </div>
  </div>
</footer>
<footer id="footer-down">
  <h2>Follow Us On</h2>
  <ul class="social-icon">
    <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
    <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
    <li class="google-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
    <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
  </ul>
  <p> &copy; Copyright 2016 Cosmix - Created By : <a href="http://templatestock.co" target="_blank">Template Stock</a> </p>
</footer>
<!--Jquery-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.js')}}"></script>
<!--Preetyphoto-Jquery-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
<!--NiceScroll-Jquery-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.nicescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
<!--Isotopes-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.isotope.js')}}"></script>
<!--Wow-Jquery-->
<script type="text/javascript" src="{{asset('public/frontend/js/wow.js')}}"></script>
<!--Count-Jquey-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.inview.min.js')}}"></script>
<!--Owl-Crousels-Jqury-->
<script type="text/javascript" src="{{asset('public/frontend/js/owl.carousel.js')}}"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="{{asset('public/frontend/js/script.js')}}"></script>
</body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Study</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/animate.css">

    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/magnific-popup.css">

    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/aos.css">

    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/ionicons.min.css">

    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/icomoon.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/style.css">
      {{--<link rel="stylesheet" href="{{url('/')}}/assets/front/css/style1.css">--}}
      {{--<link rel="stylesheet" href="{{url('/')}}/assets/front/lib/bootstrap/css/bootstrap.min.css">--}}
      {{--<link rel="stylesheet" href="{{url('/')}}/assets/front/lib/bootstrap/css/bootstrap.css">--}}
      {{--<link rel="stylesheet" href="{{url('/')}}/assets/front/lib/wow/wow.min.css">--}}


  </head>
  <body>
  <style>
      .float{
          position:fixed;
          width:60px;
          height:60px;
          bottom:40px;
          right:40px;
          background-color:#25d366;
          color:#FFF;
          border-radius:50px;
          text-align:center;
          font-size:30px;
          box-shadow: 2px 2px 3px #999;
          z-index:100;
      }

      .my-float{
          margin-top:16px;
      }

  </style>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=+905378291629" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
  </a>

	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="{{url('/')}}/aboutus">Fox. <span>University</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 1235 2355 98</span>
						    </div>
					    </div>
					    {{--<div class="col-md topper d-flex align-items-center justify-content-end">--}}
					    	{{--<p class="mb-0">--}}
					    		{{--<a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">--}}
					    			{{--<span>Apply now</span>--}}
					    		{{--</a>--}}
					    	{{--</p>--}}
					    {{--</div>--}}
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{url('/')}}/" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="{{url('/')}}/aboutus" class="nav-link">About</a></li>
	        	{{--<li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li>--}}
	        	<li class="nav-item"><a href="{{url('/')}}/university" class="nav-link">Universites</a></li>
	        	<li class="nav-item"><a href="{{url('/')}}/scholarship" class="nav-link">Scholarships</a></li>
	          <li class="nav-item"><a href="{{url('/')}}/contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

    <!-- END nav -->

@yield('slider')

@yield('content')



    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                    <li><a href="{{url('/')}}/"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>

                    <li><a href="{{url('/')}}/university"><span class="ion-ios-arrow-round-forward mr-2"></span>Universities</a></li>
                    <li><a href="{{url('/')}}/scholarship"><span class="ion-ios-arrow-round-forward mr-2"></span>Scholarships</a></li>
                    <li><a href="{{url('/')}}/aboutus"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                    <li><a href="{{url('/')}}/contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">

            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                    <li class="ftco-animate" ><a href="#"><span class="icon-twitter"style="color: #0b93d5"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"style="color: #2d49ff"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"style="color: indianred"></span></a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://idesigns.info" target="https://idesigns.info">SMART</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{url('/')}}/assets/front/js/jquery.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/popper.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/jquery.easing.1.3.js"></script>
  <script src="{{url('/')}}/assets/front/js/jquery.waypoints.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/jquery.stellar.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/jquery.magnific-popup.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/aos.js"></script>
  <script src="{{url('/')}}/assets/front/js/jquery.animateNumber.min.js"></script>
  <script src="{{url('/')}}/assets/front/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{url('/')}}/assets/front/js/google-map.js"></script>
  <script src="{{url('/')}}/assets/front/js/main.js"></script>
      {{--<script src="{{url('/')}}/assets/front/js/wow/wow.min.js"></script>--}}
      {{--<script src="{{url('/')}}/assets/front/js/wow/wow.js"></script>--}}


  </body>
</html>
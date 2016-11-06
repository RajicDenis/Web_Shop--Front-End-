<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PC Tech</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <!-- jQuery & jQuery UI-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- JCarousel -->
	<script type="text/javascript" src="http://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="http://sorgalla.com/jcarousel/dist/jquery.jcarousel-control.min.js"></script>
	<script>
	
	$(document).ready(function() { 

		$('.scl').hover(function() {
			$('.social').css('z-index', 3);
		}, function() {
			$('.social').css('z-index', 1);
		});

		$('.jcarousel').jcarousel({wrap: 'circular'})
			.jcarouselAutoscroll({
	            interval: 3500,
	            target: '+=1',
	            autostart: true
	        });

        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
        	.on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.hamburg').on('click', function() {
    		$('.content').toggleClass('push', 50);
    	});

        $('.panel-title').on('click', function() {
        	$('.panel-body').slideToggle();
        });

        $('.f').hover(function() {
        	$('.cloud', this).css('transform', 'scale(1)');
        }, function() {
        	$('.cloud', this).css('transform', 'scale(0)');
        });

        $('.c-box').hover(function() {
        	$('.c-name', this).css('display', 'block');
        }, function() {
        	$('.c-name', this).css('display', 'none');
        })
	});	

	</script>
	
	<style>
		html {
			height: 100%;
		}
		body {
			min-height: 100%;
			display: flex;
			flex-direction: column;
			background-image: url({{ URL::asset('images/main-bg2.jpg')  }});
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: 'Acme', sans-serif;
		}
		a {
			color: white !important;
			text-decoration: none !important;
		}
		a:hover {
			transform: scale(1.1);
		}
		.star-rating {
			position: relative;
			display: inline-block;
			background-image: url({{ URL::asset('images/star.png') }});
			background-repeat: repeat-x;
			width: 105px;
			height: 25px;
		}
		.star-ratingInner {
			position: absolute;
			background-image: url({{ URL::asset('images/star.png') }});
			background-position: 0 -30px; 
			width: 105px;
			height: 20px;
			top: 0px;
			left: 0;
		}
		.r5 {
			width: 105px;
		}
		.r4 {
			width: 84px;
		}
		.r3 {
			width: 62px;
		}
		.r2 {
			width: 41px;
		}
		.r1 {
			width: 20px;
		}

	</style>

	<link rel="stylesheet" media="all" type="text/css" href="{{ URL::asset('css/layout.css') }}">
	<link rel="stylesheet" media="all" type="text/css" href="{{ URL::asset('css/sidebar-hover.css') }}">
	<link rel="stylesheet" media="all" type="text/css" href="{{ URL::asset('css/homepage.css') }}">

	</style>

</head>
<body>

	<div>
		<ul class='social'>
			<li>
			    <a class="fa fa-facebook scl" href="https://www.facebook.com/">  
			    	<span>Facebook</span>
			    </a> 
			</li>		  
			<li>
			    <a class="fa fa-twitter scl" href="https://twitter.com">
			    	<span>Twitter</span>
			    </a>
			</li>		  
			<li>
			    <a class="fa fa-linkedin scl" href="https://www.linkedin.com">
			    	<span>LinkedIn</span>
			    </a>
			</li>		  
			<li>
			    <a class="fa fa-google-plus scl" href="https://plus.google.com/">
			    	<span>Google Plus</span>
			    </a> 
			</li>		  
		</ul>
	</div>

	<div class="top-header">		
		<div class="container">
			<a href="#"><h5 class="login-txt"><i class="fa fa-user-plus" aria-hidden="true" style="color: white"></i> Register</h5></a>
			<a href="#"><h5 class="login-txt"><i class="fa fa-user" aria-hidden="true" style="color: white"></i> Log In</h5></a>
		</div>
	</div>

	<div class="banner">
		<div class="container">
			<div class="logo-box"><img src="{{ URL::asset('images/logo.png') }}" class="logo"/></div>
			<div class="logo-title">PC Tech</div>

			<div class="search_box">
				<form class="search_form" action="#" method="GET">			
				    <div class="input-group">
				        {{ Form::text('srch_term', Request::get('srch_term'), ['class' => 'form-control', 'placeholder' => 'Search...']) }}
					    <span class="input-group-btn">
					      	<button class="btn btn-default search-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					    </span>
				    </div>			  	
				</form>
			</div>

		</div>
	</div>

	<div class="container">
		<nav class="navbar navbar-inverse navbar-static-top">
		    
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			    	<button type="button" class="navbar-toggle collapsed hamburg" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			    	</button>	    	
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="glyphicon glyphicon-home fa-2x" aria-hidden="true"></span></a></li>
						<li class="nav-link"><a href="#">About Us</a></li>
						<li class="nav-link"><a href="#">Contact</a></li>
						<li class="nav-link"><a href="#">FAQ</a></li>
						<li class="nav-link"><a href="#">Partners</a></li>      
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li style="margin-right: 20px;"><a href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart fa-2x" aria-hidden="true"></span></a></li></li>
					</ul>			
				</div><!-- /.navbar-collapse -->
		</nav>
	</div><!-- /.container -->

	<div class="container">
		<div class="content">

			<div class="side-content col-md-2">

				<div class="panel panel-default">
					<div class="panel-heading">
				    	<h3 class="panel-title">Categories</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<div class="f"><button type="button" class="list-group-item">Mobile Phones</button>
					    		<div class="cloud c1">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/mobile/android.jpg') }});"><div class="overlay pulse"></div><span class="c-name">Android</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/mobile/windows.jpg') }});"><div class="overlay"></div><span class="c-name">Windows</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/mobile/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
							<div class="f"><button type="button" class="list-group-item">Televisions</button>
					    		<div class="cloud c9">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/mobile/android.jpg') }});"><div class="overlay pulse"></div><span class="c-name">Android TV</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/tv/smart.jpg') }});"><div class="overlay"></div><span class="c-name">Smart TV</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/tv/4k.jpg') }});"><div class="overlay"></div><span class="c-name">4K Ultra HD</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/tv/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
					    	<div class="f"><button type="button" class="list-group-item">Monitors</button>
					    		<div class="cloud c9">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/tv/4k.jpg') }});"><div class="overlay pulse"></div><span class="c-name">4K</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/monitor/led.jpg') }});"><div class="overlay"></div><span class="c-name">LED</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/monitor/touch.jpg') }});"><div class="overlay"></div><span class="c-name">Touch</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/monitor/gaming.jpg') }});"><div class="overlay"></div><span class="c-name">Gaming</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/monitor/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
					    	<div class="f"><button type="button" class="list-group-item">Laptops</button>
					    		<div class="cloud c9">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/laptop/gaming.jpg') }});"><div class="overlay pulse"></div><span class="c-name">Gaming</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/laptop/touch.jpg') }});"><div class="overlay"></div><span class="c-name">Touch</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/laptop/mac.jpg') }});"><div class="overlay"></div><span class="c-name">Mac Book</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/laptop/acces.jpg') }});"><div class="overlay"></div><span class="c-name">Accessories</span></div>
									<div class="ssd c-box" style="background-image: url({{ URL::asset('images/icons/laptop/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
					    	<div class="f"><button type="button" class="list-group-item">Mice</button>
					    		<div class="cloud c9">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/mouse/wireless.jpg') }});"><div class="overlay pulse"></div><span class="c-name">Wireless</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/mouse/wired.jpg') }});"><div class="overlay"></div><span class="c-name">Wired</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/mouse/gaming.jpg') }});"><div class="overlay"></div><span class="c-name">Gaming</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/mouse/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
					    	<div class="f"><button type="button" class="list-group-item">Keyboards</button>
					    		<div class="cloud c9">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/keyboard/wireless.jpg') }});"><div class="overlay pulse"></div><span class="c-name">Wireless</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/keyboard/wired.jpg') }});"><div class="overlay"></div><span class="c-name">Wired</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/keyboard/gaming.jpg') }});"><div class="overlay"></div><span class="c-name">Gaming</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/keyboard/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
					    	<div class="f"><button type="button" class="list-group-item">Flash Drives</button>
					    		<div class="cloud c1">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/usb/2.jpg') }});"><div class="overlay pulse"></div><span class="c-name">USB 2.0</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/usb/3.jpg') }});"><div class="overlay"></div><span class="c-name">USB 3.0</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/usb/all.jpg') }});"><div class="overlay"></div><span class="c-name">All</span></div>
								</div>					    	
					    	</div>
					    	<div class="f"><button type="button" class="list-group-item">Components</button>
					    		<div class="cloud c9">
									<div class="gpu c-box" style="background-image: url({{ URL::asset('images/icons/gpu-bg.jpg') }});"><div class="overlay pulse"></div><span class="c-name">GPU</span></div>
									<div class="cpu c-box" style="background-image: url({{ URL::asset('images/icons/cpu-bg.jpg') }});"><div class="overlay"></div><span class="c-name">CPU</span></div>
									<div class="ram c-box" style="background-image: url({{ URL::asset('images/icons/ram-bg.jpg') }});"><div class="overlay"></div><span class="c-name">RAM</span></div>
									<div class="mb c-box" style="background-image: url({{ URL::asset('images/icons/mb-bg.jpg') }});"><div class="overlay"></div><span class="c-name">Motherboard</span></div>
									<div class="ssd c-box" style="background-image: url({{ URL::asset('images/icons/ssd-bg.jpg') }});"><div class="overlay"></div><span class="c-name">SSD</span></div>
									<div class="psu c-box" style="background-image: url({{ URL::asset('images/icons/psu-bg.jpg') }});"><div class="overlay"></div><span class="c-name">PSU</span></div>
								</div>					    	
					    	</div>

						</div>

					</div>
				</div>
				
				<div class="side-info">
				
					<div class="support">
						<div class="inf-icon"><i class="fa fa-phone fa-btn fa-2x" aria-hidden="true"></i></div>
						<div class="supp-info">Customer support between 7pm and 7am (GMT)</div>
					</div>

					<div class="tel"><img src="{{ URL::asset('images/cro-flag.png') }}" class="flag">+35 1878 11 11</div>
				
				</div>

			</div><!-- END side-content -->

			@yield('content')

		</div><!-- END content -->
	</div><!-- END container -->

	<footer class="footer">
		<div class="container ftr">
			<div class="footer-content">
				
				<div class="footer-block">
					<h4>Shopping</h4>
					<ul class="ul">
						<li class="l"><a href="#">Delivery information</a></li>
						<li class="l"><a href="#">Payment information</a></li>
						<li class="l"><a href="#">Terms and conditions</a></li>
					</ul>
				</div>
				<div class="footer-block">
					<h4>Orders</h4>
					<ul class="ul">
						<li class="l"><a href="#">My Orders</a></li>
						<li class="l"><a href="#">Order Status</a></li>
						<li class="l"><a href="#">Warranty Status</a></li>
						<li class="l"><a href="#">Complaints</a></li>
					</ul>
				</div>
				<div class="footer-block">
					<h4>Abouts Us</h4>
					<ul class="ul">
						<li class="l"><a href="#">History</a></li>
						<li class="l"><a href="#">Company Mission & Vision</a></li>
						<li class="l"><a href="#">Contact Us</a></li>
						<li class="l"><a href="#">FAQ</a></li>

					</ul>
				</div>

			</div>

			<div class="copyright"><i class="fa fa-copyright" aria-hidden="true"> 2016 PCTech.com</i></div>

		</div>
	</footer>


</body>
</html>
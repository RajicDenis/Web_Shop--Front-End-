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
	.ul {
		padding: 0;
		margin: 0;
		height: 150px;
	}
	.l {
		list-style: none;
		padding-top: 15px;
	}
	.l:before {    
	    font-family: 'FontAwesome';
	    content: '\f06c';
	    color: #33AFCB;
	    margin:0 5px 0 -15px;
	}
	.l:hover {
		transform: scale(1.07);
	}
	h4 {
		color: white;
	}
	.login-txt {
		color: white;
		float: right;
		padding-left: 10px;
		padding-right: 10px;
		border-left: 1px solid white;
	}
	.content {
		position: relative;
		display: flex;
		flex-direction: row;
		padding: 15px;
		background: #F7F7F7;
		flex: 1;
		border: 3px solid #ddd;
		border-radius: 20px;
		box-shadow: 0px 0px 15px 2px black;
		z-index: 2;
		margin-top: 10px;
		margin-bottom: 1px;
	}
	.top-header {
		height: 30px;
		background: #03467B;
		border-bottom: 1px solid white;
	}
	.banner {
		height: 140px;
		background: transparent;
	}
	.logo {
		margin-top: 20px;
		height: 80px;
		width: 90px;
	}
	.logo-box {
		display: inline-block;
		padding-left: 30px;
	}
	.logo-title {
		display: inline-block;
		margin-top: 20px;
		padding-left: 20px;
		color: white;
		height: 80px;
		vertical-align: middle;
		font-size: 40px;
		font-weight: 900;
		line-height: 80px;
		font-style: italic;
		font-family: 'Lobster', sans-serif;
	}
	.search_box {
		display: inline-block;
		margin-top: 20px;
		width: 300px;
		height: 80px;
		float: right;
		line-height: 80px;
		padding-right: 30px;
	}
	.form-control {
		float: none !important;
	}
	.navbar {
		background: #03467B;
		background-repeat: repeat;
		background-size: cover;
		border-bottom: 1px solid white;
		margin-bottom: 0 !important;
		border-radius: 10px;
	}
	.footer {
		display: flex;
		align-items: center;
		height: 300px;
		background: #03467B;
		border-top: 1px solid white;
	}
	.footer-content {
		display: flex;
		flex-direction: row;
		justify-content: space-around;
	}
	.copyright {
		color: white;
		text-align: right;
		padding-top: 30px;
	}
	.fa-home {
		color: white;
	}
	.nav-link {
		padding-top: 5px;
		border-right: 1px solid white;
		margin-right: 5px;
		font-family: 'Amaranth', sans-serif !important;
		font-size: 16px;
	}
	.nav-link:hover {
		background: #03467B; 
		transform: scale(1.1);
		z-index: 3;
	}
	.social {
		position: relative;
		width: 200px;
		height: 220px;
		position: fixed;
		margin-top: 30px;
		perspective: 1000px;
		list-style: none;
		top: 40%;
		padding-left: 0;
		z-index: 1;	
	}
	.social li a {
		display: inline-block;
		height: 40px;
		width: 40px;
		background: #222;
		border-bottom: 1px solid #333;
		font: normal normal normal
		16px/20px 
		'FontAwesome', 'Source Sans Pro', Helvetica, Arial, sans-serif;
		color: #fff;
		-webkit-font-smoothing: antialiased;
		padding: 10px;
		text-decoration: none;
		text-align: center;
		transition: background .5s ease .300ms
	}

	.social li:first-child a:hover { background: #3b5998 }
	.social li:nth-child(2) a:hover { background: #00acee }
	.social li:nth-child(3) a:hover { background: #ea4c89 }
	.social li:nth-child(4) a:hover { background: #dd4b39 }

	.social li:first-child a { border-radius: 0 5px 0 0 }
	.social li:last-child a { border-radius: 0 0 5px 0 }
	    
	.social li a span {
		width: 100px;
		float: left;
		text-align: center;
		background: #222;
		color: #fff;
		margin: -25px 74px;
		padding: 8px;
		transform-origin: 0;
		visibility: height: 	;n;
		opacity: 0;
		transform: rotateY(45deg);
		border-radius: 5px;
		transition: all .5s ease .300ms;
	}

	.social li span:after {
		content: '';
		display: block;
		width: 0;
		height: 0;
		position: absolute;
		left: -20px;
		top: 7px;
		border-left: 10px solid transparent;
		border-right: 10px solid #222;
		border-bottom: 10px solid transparent;
		border-top: 10px solid transparent;
	}

	.social li a:hover span {
		visibility: visible;
		opacity: 1;
		transform: rotateY(0);
	}
	/*Side content CSS */
	.side-content {
		border: 1px solid #ddd;
		border-radius: 10px;
		margin-right: 5px;
		padding: 0;
		background: white;
	}
	.panel {
		border: none;
	}
	.panel-body {
		padding: 0 0 15px 0;
	}
	.panel-heading {
		border-bottom: none;
		background-color: #03467B !important;
		border-radius: 10px;
	}
	.panel-title {
		color: white;
		font-family: 'Acme', sans-serif;
		text-align: center;
		cursor: pointer;
		display: block;
	}
	.list-group-item {
		border-left: none;
		border-right: none;
		font-family: 'Acme', sans-serif;
		text-align: center !important;
	}
	.side-info {
		padding: 10px;
		padding-bottom: 40px;
		border-bottom: 1px solid #f5f5f5;
	}
	.supp-info {
		color: #A6A6A6;
	}
	.support {
		display: flex;
		flex-direction: row;
	}
	.inf-icon {
		display: block;
		height: 100%;
		width: 100px;
		float: left;
		margin: auto auto;
		text-align: center;
		color: #2F8DCD;
	}
	.tel {
		margin-top: 20px;
		color: #A6A6A6;
	}
	.flag {
		width: 23px;
		height: 17px;
		margin-right: 15px;
		margin-left: 5px;
	} /*END side-content */
	.push {
		top: 280px;
	}
	@media screen and (max-width: 800px) {
		body {

			background-image: none;
			background: #0073AA; 
		}
		.navbar {
		    height: 40px;
		    position: absolute;
		    background: #0073AA;
		    border: none;
		    top: 50px;
		    right: 10px;
		    
		}
		.navbar-collapse {
			border-color: #0073AA;
		    border: none;
		    box-shadow: none;
		    overflow: hidden;
		}
		.nav-link {
			border: none;
		}
		.nav-link:hover {
			background: none;
			transform: scale(1);
		}
		.logo-box {
			padding-left: 0;
		}
		.search_box {
			display: none;
		}
		.content {
			transition-property: top, bottom;
        	transition-duration: 0.5s;
        	flex-direction: column;
		}
		.side-content {
			width: 100% !important;
		}
		.side-info {
			display: none;
		}
		.panel {
			margin-bottom: 0;
		}
		.panel-title {
			cursor: pointer;
		}
		.panel-body {
			display: none;
		}
		.footer {
			height: 500px;
		}
		.footer-content {
			flex-wrap: wrap;		
		}
		.ftr {
			width: 90%;
		}
	}

	@media screen and (max-width: 400px) { 
		.navbar {
			top: 130px;
			right: 120px;
		}
		.content {
			margin-top: 50px;
		}
		.logo-box {
			padding-left: 50px;
		}
	}
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
							
							<style>
								.cloud {
									position: absolute;
									display: block;
									width: 300px;
									height: 215px;
									left: 190px;
									margin-top: -80px;
								    border: 1px solid black;
								    border-radius: 10px;
								    z-index: 4;
								    background: white;
								    box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.5);;
								    transform: scale(0);
								    transform-origin: left;
								    transition: all 0.3s cubic-bezier(0.42, 0, 0.77, 1.44) 0s;
								}
								/* creates the larger triangle */
								.cloud:before {
								  content: ' ';
								  position: absolute;
								  width: 0;
								  top: 84px;
								  bottom: auto;
								  left: -30px;								  
								  border-style: solid;
								  border-width: 16px 30px 16px 0;
    							  border-color: transparent rgba(0,0,0,0.4);
    							  display: block;
								}
								.c1:before {
									top: 55px;
								}
								.c1:after {
									top: 61px !important;
								}
								/* creates the smaller  triangle */
								.cloud:after {
								  content: ' ';
								  position: absolute;
								  width: 0;
								  left: -21px;
								  top: 90px;
								  bottom: auto;
								  border-width: 10px 21px 10px 00;
    							  border-color: transparent #fff;
    							  display: block;
    							  border-style: solid;
								}
								.c1 {
									margin-top: -50px;
									text-align: center;
								    padding-top: 40px;
								    height: 150px;
								}
								.c9 {
									padding-left: 25px;
									padding-top: 25px;
								}
								.c-box {
									display: inline-block;
									width: 70px;
									height: 70px;
									margin-right: 15px;
									margin-bottom: 15px;
									box-shadow: 0 0 7px 3px rgba(0,0,0,0.4);
									border-radius: 50%;
									background-size: cover;
									background-repeat: no-repeat;
									background-position: center;
									cursor: pointer;
								}
								.c-box:hover > .overlay {
								    width:70px;
								    height:70px;
								    position:absolute;
								    background-color:#000;
								    opacity:0.5;
								    border-radius: 50%;
								    -webkit-animation: pulse 1s linear infinite;
									animation: pulse 1s linear infinite;
									box-shadow: 0 0 0 3px rgba(0,0,0,0.7);
								}

								.f {
									position: relative;
									display: flex;
									flex-direction: row;
								}
								.c-name {
									display: none;
									position: absolute;
									line-height: 70px;
									width: 70px;									
									color: white;
									text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
									text-align: center;
									opacity: 1 !important;
								}
								@-webkit-keyframes pulse {
								    0% { -webkit-transform: scale(1); }
								    50% { -webkit-transform: scale(1.1); }
								    100% { -webkit-transform: scale(1); }
								}
								@keyframes pulse {
								    0% { transform: scale(1); }
								    50% { transform: scale(1.11); }
								    100% { transform: scale(1); }
								}
								.pulse {
								    -webkit-animation-name: pulse;
								    animation-name: pulse;
								}
								

							</style>

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
						<li class="l"><a href="#">Company Mission $ Vision</a></li>
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
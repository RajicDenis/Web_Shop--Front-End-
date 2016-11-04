@extends('layouts.app')

@section('content')

<style>
	.main-content {
		display: flex;
		flex-direction: column;
		border: none;
		margin-right: 5px;
	}
	.block {
		display: block;
		margin-top: 5px;
		margin-bottom: 20px;
	}
	.block-content {
		display: flex;
		flex-direction: row;
		justify-content: center;
		border: 1px solid #ddd;
		border-top: none;
		border-radius: 10px;
		padding: 10px 10px 0 10px;
		overflow: hidden;
		background: white;
		box-shadow: 5px 0 5px -4px black;
	}
	.block-image {
		background-size: cover;
		width: 242px;
		height: 200px;
	}
	.block-title {
		display: block;
		margin-left: 10px;
		width: 98%;
		height: 50px;
		border-bottom: 1px solid #ddd;
	}
	.thumbnail {
		margin-right: 10px;
		background: white;
		font-family: 'Lato', sans-serif;
	}
	.thumbnail:hover {
		transform: scale(1.02);
		box-shadow: 0px 0px 10px black;
		cursor: pointer;
	}
	.thumbnail img {
		height: 160px;
		width: 200px;
	}
	.title-text {
		position: relative;
		display: block;
		text-align: center;
		line-height: 50px;
		font-size: 18px;
		width: 200px;
		height: 50px;
		border: 1px solid #ddd;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		border-bottom: 5px solid white;
		margin-left: 30px;
		background: white;
		box-shadow: 5px 0 5px -4px black;
		z-index: 3;
	}
	/* Reviews */
	.review-wrapper {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 250px;
		box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
		margin: 30px 0 40px 0;
	}
	.box-wrap {
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 200px;
	}
	.review-box {
		position: relative;
		display: inline-block;
		width: 250px;
		min-height: 140px;
		padding: 10px;
		margin: 0 15px 0 15px;
		border: 1px solid #A6A6A6;
		border-radius: 5px;
		text-align: center;
		color: gray;
	}
	.show-rev {
		margin-bottom: 20px;
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
	.rev-comment {
		padding: 10px 0 5px 0;
	}
	.rev-footer {
		position: absolute;
		display: flex;
		justify-content: space-between;
		width: 100%;
		bottom: 0;
		left: 0px;
		padding: 0 10px 10px 10px;
	}

	/* JCarousel */
	.jcarousel-wrapper {
	    margin: 20px auto;
	    position: relative;
	    border: 10px solid #fff;
	    width: 600px;
	    height: 300px;
	    -webkit-border-radius: 5px;
	       -moz-border-radius: 5px;
	            border-radius: 5px;
	    -webkit-box-shadow: 0 0 2px #999;
	       -moz-box-shadow: 0 0 2px #999;
	            box-shadow: 0 0 2px #999;
	}
	/** Carousel **/
	.jcarousel {
	    position: relative;
	    overflow: hidden;
	}
	.jcarousel ul {
	    width: 20000em;
	    position: relative;
	    list-style: none;
	    margin: 0;
	    padding: 0;
	}
	.jcarousel li {
	    float: left;
	}

	/** Carousel Controls **/
	.jcarousel-control-prev,
	.jcarousel-control-next {
	    position: absolute;
	    top: 130px;
	    width: 30px;
	    height: 30px;
	    text-align: center;
	    background: #4E443C;
	    color: #fff;
	    text-decoration: none;
	    text-shadow: 0 0 1px #000;
	    font: 24px/27px Arial, sans-serif;
	    -webkit-border-radius: 30px;
	       -moz-border-radius: 30px;
	            border-radius: 30px;
	    -webkit-box-shadow: 0 0 2px #999;
	       -moz-box-shadow: 0 0 2px #999;
	            box-shadow: 0 0 2px #999;
	}
	.jcarousel-control-prev {
	    left: -50px;
	}
	.jcarousel-control-next {
	    right: -50px;
	}
	.jcarousel-control-prev:hover span,
	.jcarousel-control-next:hover span {
	    display: block;
	}
	.jcarousel-control-prev.inactive,
	.jcarousel-control-next.inactive {
	    opacity: .5;
	    cursor: default;
	}

	@media screen and (max-width: 960px) {
		.jcarousel-wrapper {
			width: 400px;
	    	height: 200px;
		}
		.carousel-img {
			width: 400px;
	    	height: 180px;
		}
		.jcarousel-control-prev,
		.jcarousel-control-next {
			top: 80px;
		}
		.block-content {
			flex-wrap: wrap;
		}
		.thumbnail {
			width: 150px;
			height: 250px;
		}
		.thumbnail img {
			height: 100px;
			width: 120px;
		}
		h3 {
			padding-top: 5px;
			font-size: 15px;
		}
		p {
			font-size: 10px;
		}
		.side-content {
			width: 170px;
		}
	}

	@media screen and (max-width: 800px) { 
		.social {
			display: none;
		}
	}

	@media screen and (max-width: 500px) {
		.jcarousel-wrapper {
			width: 290px;
	    	height: 200px;
		}
		.carousel-img {
			width: 290px;
	    	height: 180px;
		}
		.jcarousel-control-prev,
		.jcarousel-control-next {
			top: 80px;
		}
		.thumbnail {
			width: 200px;
			height: 220px;
		}
		.thumbnail img {
			height: 100px;
			width: 120px;
		}
	}

	@media screen and (max-width: 400px) {
		.jcarousel-control-prev,
		.jcarousel-control-next {
			display: none;
		}
		.top-header, .banner {
			width: 391px;
		}
	}

</style>

<div class="main-content col-md-10">

	<div class="jcarousel-wrapper">
		<div class="jcarousel" data-jcarousel="true">
		    <ul style="height: 100%;">
		        <li><a href="#"><img src="{{ URL::asset('images/carousel3.jpg') }}" class="carousel-img" width="600" height="280" alt=""></a></li>
		        <li><a href="#"><img src="{{ URL::asset('images/carousel2.png') }}" class="carousel-img" width="600" height="280" alt=""></a></li>
		        <li><a href="#"><img src="{{ URL::asset('images/carousel1.jpg') }}" class="carousel-img" width="600" height="280" alt=""></a></li>
		        <li><a href="#"><img src="{{ URL::asset('images/carousel4.jpg') }}" class="carousel-img" width="580" height="280" alt=""></a></li>
		    </ul>
		</div>
		<a href="#" class="jcarousel-control-prev inactive" data-jcarouselcontrol="true">‹</a>
		<a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true">›</a>
	</div>

	<div class="review-wrapper">
		<div class="box-wrap">
			<div class="review-box">
				<div class="star-rating"><span class="star-ratingInner r5"></span></div>
			 	<div class="rev-comment">"This shit is cray!"</div>
			 	<div class="rev-footer"><span class="rev-name">Some Dude</span><span class="rev-date">10 Nov 2016</span></div>
			</div>

			<div class="review-box">
				<div class="star-rating"><span class="star-ratingInner r5"></span></div>
			 	<div class="rev-comment">"I got paid to give 5 stars."</div>
			 	<div class="rev-footer"><span class="rev-name">Snitch</span><span class="rev-date">10 Nov 2016</span></div>
			</div>

			<div class="review-box">
				<div class="star-rating"><span class="star-ratingInner r4"></span></div>
			 	<div class="rev-comment">"I don't even exist, this is just a fake review."</div>
			 	<div class="rev-footer"><span class="rev-name">Self-aware Dude</span><span class="rev-date">10 Nov 2016</span></div>
			</div>
		</div>

		<div class="show-rev"><a class="btn btn-primary">Show All</a></div>
	</div>

	<div class="block">
		<div class="block-title"><span class="title-text">Best Deals</span></div>
			
		<div class="block-content">	
			
				<div class="thumbnail">
			    	<img src="{{ URL::asset('images/gpu/390x.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/gpu/sapphire390x.jpeg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/gpu/gtx1080.png') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/gpu/gtx1070.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>
			
		</div>
	</div>

	<div class="block">
		<div class="block-title"><span class="title-text">Top Gaming</span></div>
			
		<div class="block-content">	
			
				<div class="thumbnail">
			    	<img src="{{ URL::asset('images/cpu/i7.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/cpu/i7-1.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/cpu/i7-2.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/cpu/i7-3.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>
			
		</div>
	</div>

	<div class="block">
		<div class="block-title"><span class="title-text">New Arrivals</span></div>
			
		<div class="block-content">	
			
				<div class="thumbnail">
			    	<img src="{{ URL::asset('images/ssd/ssd.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/ssd/ssd1.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/ssd/ssd2.jpg') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>

			    <div class="thumbnail">
			    	<img src="{{ URL::asset('images/ssd/ssd3.png') }}" class="block-image">
			    	<div class="caption">
			        	<h3>Test product</h3>
			        	<p>Description of test product</p>
			        	<p>Price</p>
			    	</div>
			    </div>
			
		</div>
	</div>

</div>

@endsection
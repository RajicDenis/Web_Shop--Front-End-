@extends('layouts.app')

@section('content')

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
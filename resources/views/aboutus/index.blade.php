@extends('layouts.front')

@section('title') About Us | Imperial Estate @endsection

@section('styles')
{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/style30f4.css?v=3') }}"> --}}
<style type="text/css">
video {
  width: 100%;
  height: auto;
}
</style>
@stop

@push('meta_property')

@endpush

@section('content')

<div class="container-fluid no-padd">
	<div class="row-fluid no-padd">
		<div class="col-sm-12 no-padd">
			<div class="container-fluid top-banner hero_banner no-padd  simple light">
				<span class="overlay"></span> <img src="{{ asset('public/assets/img/about-us-min.jpg') }}" class="s-img-switch" alt="banner image">
				<div class="content">
					<div class="prague-svg-animation-text">
					</div>
					<div class="subtitle">ABOUT US</div>
					<h1 class="title">Redefining the art of Event Planning</h1>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="container no-padd">
	<div class="row-fluid margin-lg-50t ">
		<div class=" no-padd col-sm-12 col-lg-6 col-md-6 col-xs-12  margin-lg-65t margin-sm-0t">
			<div class=" no-padd-md">
				<div class="prague-counter  multi_item no-figure">
					<div class="figures ">

					</div>
					<div class="counter-outer" style="padding:10px;">
						
						{{-- <div class="showcase">
                            <img class="img-fluid" src="{{ asset('public/assets/img/thumbnail.jpg') }}" alt="Image">
                            
                                <div class="showcase-icons">
                                    <a class="video-link" target="_blank" href="{{ asset('public/assets/img/Teaser.mp4') }}"><i class="fa fa-youtube-play"></i></a>
                                </div> 
                                <div id="overlay"></div>                           
                           
                        </div> --}}

                        <video width="450" controls crossorigin playsinline
				            poster="{{ asset('public/assets/img/thumbnail.jpeg') }}">
				            
				            <!-- Video files -->
				            <source
				              src="{{ asset('public/assets/img/Teaser.mp4') }}"
				              type="video/mp4"/>
				        </video>

					</div>
				</div>
			</div>
		</div>
		<div class="no-padd col-sm-12 col-lg-6 col-md-6 col-xs-12  margin-sm-20t">
			<div class="no-padd-md">
				<div class="heading  left dark">
					{{-- <div class="subtitle ">ABOUT US</div>
					<h2 class="title"> Enhancing all your event experiences </h2> --}}
					<h2 class="title"> About Us </h2>
					<div class="content text-justify">
						{{-- <p>A multipurpose luxurious venue known for hosting grand weddings, reception ceremonies thus providing specialized, all-inclusive amenities and services.</p> --}}
						<p>Every special occasion deserves a grand location. Imperial Estate serves the perfect choice for your next event in Guwahati. It is a multipurpose venue built luxuriously to host grand weddings, cocktail parties, corporate events, birthday celebrations and more. We are known to bring dream occasions to life with our finest arrangements including premium decor, delicious food and of course, an impeccable 6000 sq. ft pillar-less banquet hall that leads to a sprawling 18000 sq. ft open lawn area. At Imperial Estate, we make sure that memories from your events stay with you forever.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row-fluid no-padd margin-lg-65t">
	<div class="no-padd col-sm-12 ">
		<div class="column-inner ">
			<div class="prague-shortcode-parent ">
				<div class="prague-shortcode-parent-img">
					<span class="overlay"></span>
					<img src="#" data-lazy-src="{{ asset('public/assets/img/banner_8.jpg') }}" class="s-img-switch" alt="middle-banner image" />
				</div>
				<div class="prague-shortcode-content-wrapp no-padd-md no-padd-xs">
					<div class="prague-shortcode-heading  light left ">
						{{-- <div class="parent-subtitle ">SERVICES</div> --}}
							<h2 class="parent-title">Our Services</h2>
						{{-- </div> --}}
						<div data-unique-key="0bf3c8aa9017e52dd041b7e2c3327621" class="js-load-more" data-start-page="1" data-max-page="2" data-next-link="#">
							<div class="row prague_services prague_count_col3 prague_gap_col15  no-footer-content prague-load-wrapper" data-columns="prague_count_col3" data-gap="prague_gap_col15">
								
								@if(count($services)>0)
								@foreach($services as $service)
								<div class="portfolio-item-wrapp prague_filter_class  column_paralax">
									<div class="portfolio-item">
										<div class="prague-services-wrapper">
											{{-- <span class="services-item-icon icon-lightbulb"></span> --}}
											<h3 class="services-item-title">{{ ucwords($service->title) }}</h3>
											<div class="services-item-description">
												<p>{{ $service->sub_title }}</p>
											</div>
											{{-- <a href="{{ route('service-details',$service->slug) }}" class="prague-services-link a-btn-2 creative" target="_self">
												<span class="a-btn-line"></span>
											READ </a> --}}
										</div>
									</div>
								</div>
								@endforeach
								@endif
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container no-padd">
	<div class="row-fluid  margin-lg-10t margin-sm-20t">
		<div class="col-sm-12 no-padd">
			<div class="no-padd-md">
				<div class="heading  left dark">
					<div class="subtitle ">TESTIMONIALS</div>
					<h2 class="title">They love us.</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row  row-fluid margin-lg-10t margin-lg-80b margin-sm-70b">
		<div class="testimonials-wrapper  no-figure">
			<div class="testimonials-swiper swiper-container" data-speed='2000' data-loop='1' data-autoplay='3000' data-center='0' data-mode='vertical' data-slides-per-view='1' data-lg-slides='1,0' data-md-slides='1,0' data-sm-slides='1,0' data-xs-slides='1,0'>

				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>I celebrated my birthday this Jan with 200 guests. The process of executing the decor, menu and music was smooth. I didn’t have to lift a finger! To my advantage, the service was taken care of with the whites and food that I love the most.</p>
							</blockquote>
							<h4 class="testimonials-author">Prija Goswami</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>So a couple days ago attended the grand opening of the Imperial Estate, which is a banquet hall located at Nalapara Road, NH37, near Mercedes Showroom, Guwahati...and have to say, it was refined elegance and class at its best! </p>
							</blockquote>
							<h4 class="testimonials-author">Parthadeep D Bhuyan</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>A place Guwahati needed from the longest time. A perfect destination for all your events and special days. They have a wide indoor space followed by an outdoor seating which is huge. The property is everything you can think of when it comes to your big days. Definitely a hit! </p>
							</blockquote>
							<h4 class="testimonials-author">Salma Nasrin</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>This place is ideal for exquisite events and celebrations with world class catering with various packages. The food was really too good.  The Imperial Villa is comfortable and elegant for exquisite events. With parking space for 500 cars and is an ideal place for all events.</p>
							</blockquote>
							<h4 class="testimonials-author">Goodfood Ghy</h4>
						</div>
					</div>
				</div>

				<div class="testimonials-pagination-wrapper">
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
<script src="{{ asset('public/assets/js/magnific-popup.min.js') }}"></script>  
<script type="text/javascript">

	$('.video-link').magnificPopup({type:'iframe'});

	$('.showcase-icons.popup a').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
</script>
@stop
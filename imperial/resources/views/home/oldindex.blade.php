@extends('layouts.front')

@section('title') Home | Imperial Estate @endsection

@section('styles')
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/css/bootstrap/zebra_datepicker.min.css"> --}}


<style type="text/css">
.project-detail-parallax-item .detail-parallax-item-bg {
    display: block!important;
}
.margin-lg-35b {
	margin-bottom: 35px;
}
.project-detail-parallax-item {
    pointer-events: auto!important;
}
.top-banner.light .content .title{
    text-transform: uppercase!important;
    font-family: 'Poppins', sans-serif!important;
    letter-spacing: 3px!important;
}
.mb_10 {
	margin-bottom: 10px;
}
.s-back-switch_home {
	background-size: contain!important;
	background-position: top;
	width: 100%!important;
}

/*.content {
	text-align: center;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: white;
}*/

.my_style_input {
	font-family: roboto,sans-serif;
	font-size: 12px;
	/*line-height: 26px;*/
	font-weight: 300;
	-webkit-box-shadow: none;
	box-shadow: none;
	border-radius: 0;
	border: none;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
	border-bottom-style: solid;
	border-bottom-width: 3px;
	border-bottom-color: transparent;
	padding: 16px 25px;
	height: 37px;
	background-color: #f2f2f2;
	color: rgba(17,17,17,.5);
	-webkit-transition: border-bottom-color .3s ease-in,color .3s ease-in;
	-o-transition: border-bottom-color .3s ease-in,color .3s ease-in;
	transition: border-bottom-color .3s ease-in,color .3s ease-in;
	
}
.my_style_input:focus {
	border-bottom-color: #222!important;
	box-shadow: none!important;
}
textarea {
  resize: none;
}

.showcase {
    display: block;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: #f5f5f5;
    border: solid 0px !important;
    
}

.fit-image {
    height: 250px !important;
    border: solid 1px #ddd !important;
    padding: 1em !important;
    /*background: #EFEFEF;*/
}

.fit-image img {
    position: relative;
    max-width: 100%;
    object-fit: contain !important;
    width: 100% !important;
    height: 100% !important;
}
.carousel-inner, .item {
    height: auto !important;
}
.Zebra_DatePicker_Icon_Wrapper {
	width: 100%!important;
}
.detail-parallax-text-item .detail-parallax-item-left {
	width: 486px!important;
}

.my_style_input_select {
    width: 100%;
    height: 37px;
    box-shadow: none;
	border-radius: 0;
	border: none;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
	border-bottom-style: solid;
	border-bottom-width: 3px;
	border-bottom-color: transparent;
	background-color: #f2f2f2;
	color: rgba(17,17,17,.5);
	font-family: roboto,sans-serif;
	font-size: 12px;


    /*outline: none;*/
    background-image: url(public/assets/img/arrow-down.png);
    background-repeat: no-repeat;
    background-position: 91% center;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    white-space: nowrap;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-border-radius: 0;
    -webkit-padding-end: 15px;
    -webkit-padding-start: 15px;
    -webkit-user-select: none;
    overflow: hidden;
}
video {
  width: 100%;
  height: auto;
}

</style>
@stop

@push('meta_property')

@endpush

@section('content')


<div class="row">
	<div class="col-xs-12 no-padd">
		<div class="owl-carousel owl-theme" id="hero">
			
		
		<div class="container-fluid top-banner  big  light item">
			<img src="{{ asset('public/assets/img/banner_7.jpg') }}" class="s-back-switch"  alt="top-banner image" />
			<span class="overlay"></span>
			<div class="content">
				<div class="prague-svg-animation-text"></div>
				{{-- <div class="subtitle">Imperial Estate</div> --}}
				<h1 class="title">Welcome to Imperial Estate</h1>
				<div class="description">
					<p>Suits. Celebrations. Events</p>
				</div>
				<a href="{{ route('contact-us') }}" class="a-btn creative" target=" _blank">
					<span class="a-btn-line "></span>Contact Us</a>
				</div>
				<div class="top-banner-cursor"></div>
			</div>

			<div class="container-fluid top-banner  big  light item">
			<img src="{{ asset('public/assets/img/banner_5.jpg')}}" class="s-back-switch"  alt="top-banner image" />
			<span class="overlay"></span>
			<div class="content">
				<div class="prague-svg-animation-text"></div>
				{{-- <div class="subtitle">Imperial Estate</div> --}}
				<h1 class="title">Imperial Estate</h1>
				<div class="description">
					<p>Redefining the art of Event Planning</p>
				</div>
				<a href="#" class="a-btn creative" target=" _blank">
					<span class="a-btn-line "></span>EXPLORE IT</a>
				</div>
				<div class="top-banner-cursor"></div>
			</div>

			<div class="container-fluid top-banner  big  light item">
			<img src="{{ asset('public/assets/img/banner_6.jpg')}}" class="s-back-switch"   alt="top-banner image" />
			<span class="overlay"></span>
			<div class="content">
				<div class="prague-svg-animation-text"></div>
				{{-- <div class="subtitle">Imperial Estate</div> --}}
				<h1 class="title">Imperial Estate</h1>
				<div class="description">
					<p>Spacious and Luxurious</p>
				</div>
				<a href="#" class="a-btn creative" target=" _blank">
					<span class="a-btn-line "></span>EXPLORE IT</a>
				</div>
				<div class="top-banner-cursor"></div>
			</div>


		</div>
	</div>
</div>



<div class="container no-padd">
	<div class="row-fluid  ">
		<div class=" no-padd col-sm-12 col-lg-6 col-md-6 col-xs-12  margin-lg-65t margin-sm-0t">
			<div class=" no-padd-md">
				<div class="prague-counter  multi_item no-figure">
					<div class="figures ">

					</div>
					<div class="counter-outer" style="padding:10px;">
						{{-- <div class="showcase">
                            <img class="img-fluid" src="{{ asset('public/assets/img/thumbnail.jpg') }}" style="background-color: rgba(240, 195, 115, 0.6);" alt="Image">
                            
                                <div class="showcase-icons">
                                    <a class="video-link" target="_blank" href="{{ asset('public/assets/img/Teaser.mp4') }}">
                                    	<i class="fa fa-youtube-play"></i></a>

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
					<div class="subtitle ">ABOUT US</div>
					<h2 class="title"> Enhancing all your event experiences </h2>
					<div class="content text-justify">
						{{-- <p>A multipurpose luxurious venue known for hosting grand weddings, reception ceremonies thus providing specialized, all-inclusive amenities and services.</p> --}}
						<p>A multipurpose luxurious venue known for hosting grand weddings and reception ceremonies, pre-wedding functions, engagements, anniversaries, cocktail, corporate and birthday parties. We believe every ceremony must reflect the beauty it holds, every celebration should be an insignia of the luxury it seeks and every moment in these ceremonies and celebrations should be an experience of a lifetime. At Imperial Estate, we make sure your events feel as grand as they are and stay with you forever.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container no-padd">
	<div class="row-fluid">
		<div class="col-md-12 margin-lg-45t margin-sm-20t">
			<div class="text-center">
				<p>Our packages are intended to suit your needs. Whether tying the knot, or cutting a ribbon, we are here to make weddings, corporate events and functions unforgettable.</p>
				<a href="{{ route('packages') }}" class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 creative">
				<span class="a-btn-line"></span> View Packages </a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid no-padd">
	<div class="row-fluid no-padd">
		<div class="wpb_column vc_column_container col-sm-12 no-padd margin-sm-20t margin-lg-65t">

			<div class="project-detail-parallax-item detail-parallax-text-item">
				<div class="detail-parallax-item-bg js-detail-parallax-item-bg ">
					<img src="{{ asset('public/assets/img/banner_8.jpg') }}" class="attachment-full size-full" alt="Check date availability " />
				</div>
				<div class="detail-parallax-item-right ">
					<h6 class="detail-parallax-item-right-subtitle">
					Check date availability </h6>
					<p>Let us check availability for your event! Share with us your need and we'll contact you quickly.</p>
					<div class="row">
						<div class="col-md-12">
							<form action="{{ route('booking.post') }}" method="post">
								@csrf

								@if ($errors->any())
						          <div class="alert alert-danger alert-dismissible">
						              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
						              <ul>
						                  @foreach ($errors->all() as $error)
						                      <li>{{ $error }}</li>
						                  @endforeach
						              </ul>
						          </div>
						        @endif
								
								<div class="row">
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="name" class="form-control my_style_input" name="name" value="" placeholder="Name"  required />
									</div>
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="phone_no" class="form-control my_style_input" name="phone_no" value="" placeholder="Phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="email" id="email" class="form-control my_style_input" name="email" value="" placeholder="Your email" required />
									</div>
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="booking_date" name="booking_date" class="datepicker form-control my_style_input" value="" placeholder="Request Date" required />
									</div>
								</div>
								
								<div class="row mb_10">
									<div class="col-md-12">
										<textarea name="message" class="form-control my_style_input" id="message" rows="5" placeholder="Message" required></textarea>
									</div>
								</div>
								
								<div class="frm_submit">
									{{-- <input type="submit" value="Request Booking" />
									<span class="arrow-right"></span> --}}
									<button class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 creative">
									<span class="a-btn-line"></span>Request Date Availability </button>
								</div>
									
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<div class="margin-lg-20t margin-sm-30t">
	<div class="container">
		<div class="row">
			<div class="column colum-container col-sm-12 no-padd margin-lg-20b">
				<div class="heading  left dark">
					<div class="subtitle ">OUR FACILITIES </div>
					<h2 class="title">A symbol of contemporary art and luxury combined </h2>
				</div>
			</div>
			<div class="no-padd-left no-padd-right margin-lg-20t">
				<div class="wrapper">
					<div data-unique-key="139714cb2b9c35c987d2544328454258" class="js-load-more" data-start-page="1" data-max-page="5" data-next-link="http://prague.loc/page/2/">
						<div class="row prague_list prague_count_col1 prague_gap_col10  no-footer-content no-figure prague-load-wrapper" data-columns="prague_count_col1" data-gap="prague_gap_col10">
							
							@php $i=1 @endphp
							@if(count($facilities)>0)
								@foreach($facilities->take(3) as $facility)
									@if($i%2)
									<div class="project-list-item">
										<div class="project-list-outer">
											<div class="project-list-wrapper">
												<div class="project-list-img">
													<img src="#" data-lazy-src="{{ url('public/uploads/facility/cover/'.$facility->facility_cover_img) }}" class="s-img-switch" alt="{{ ucwords($facility->title) }}" />
												</div>
												<div class="project-list-content">
													<div class="project-list-category">{{ ucwords($facility->caption) }}</div>
													<h3 class="project-list-title"><a href="#" target="_self">{{ ucwords($facility->title) }}</a></h3>
													<div class="project-list-excerpt">
														<p>{!! $facility->details !!}</p>
													</div>
													{{-- <a href="#" class="project-list-link a-btn-arrow-2" target="_self">
														<span class="arrow-right"></span>
													READ</a> --}}
												</div>
											</div>
										</div>
									</div>
									@else
									<div class="project-list-item  column_paralax">
										<div class="project-list-outer">
											<div class="project-list-wrapper">
												<div class="project-list-img">
													<img src="#" data-lazy-src="{{ url('public/uploads/facility/cover/'.$facility->facility_cover_img) }}" class="s-img-switch" alt="{{ ucwords($facility->title) }}" />
												</div>
												<div class="project-list-content">
													<div class="project-list-category">{{ ucwords($facility->caption) }}</div>
													<h3 class="project-list-title"><a href="#" target="_self">{{ ucwords($facility->title) }}</a></h3>
													<div class="project-list-excerpt">
														<p>{!! $facility->details !!}</p>
													</div>
													{{-- <a href="#" class="project-list-link a-btn-arrow-2" target="_self">
														<span class="arrow-right"></span>
													READ</a> --}}
												</div>
											</div>
										</div>
									</div>
									@endif
								@php $i++ @endphp
								@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="{{ route('facilities') }}" class="margin-lg-50b margin-md-50b margin-sm-30b a-btn-2 creative">
		   <span class="a-btn-line"></span> View More </a>
		</div>
	</div>
</div>


<div class="container-fluid no-padd">
	<div class="row-fluid no-padd">
		<div class="wpb_column vc_column_container col-sm-12 no-padd">

			<div class="project-detail-parallax-item detail-parallax-text-item">
				<div class="detail-parallax-item-bg js-detail-parallax-item-bg ">
					<img src="{{ asset('public/assets/img/banner_1-min.jpg') }}" class="attachment-full size-full" alt="banner image" />
				</div>
				<div class="detail-parallax-item-left">
					<h6 class="detail-parallax-item-left-subtitle">
					Get Quote </h6>
					<p>Get the best and reasonable quotes for all your upcoming events. Brief us and find out what we have in store for you.</p>
					<div class="row">
						<div class="col-md-10">
							<button type="button" data-toggle="collapse" data-target="#demo" class="margin-lg-5t margin-md-5t margin-sm-5t a-btn-2 creative">
							<span class="a-btn-line"></span> Send me a quote</button>
						</div>
					</div>

					<div class="row collapse margin-lg-20t margin-md-20t margin-sm-15t" id="demo">
						<div class="col-md-12">
							<form action="{{ route('send-quote.post') }}" method="post">
								@csrf

								@if ($errors->any())
						          <div class="alert alert-danger alert-dismissible">
						              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
						              <ul>
						                  @foreach ($errors->all() as $error)
						                      <li>{{ $error }}</li>
						                  @endforeach
						              </ul>
						          </div>
						        @endif

								<div class="row">
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="name" class="form-control my_style_input" name="name" value="" placeholder="Your name"  required />
									</div>
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="estimated_guest" class="form-control my_style_input" name="estimated_guest" value="" placeholder="Estimated Guests" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mb_10">
										{{-- <label for="ocation_id"> Select an ocation </label> --}}
										<select name="ocation_id" class="my_style_input_select" id="ocation_id">
											<option value="" selected='selected' disabled> -- Select an ocation -- </option>
											@foreach($ocations as $ocation)
						                    	<option value="{{ $ocation->id }}" data-themeid="{{ $ocation->id }}" {{ old('ocation_id') == $ocation->id ? 'selected' : '' }}>{{ ucwords($ocation->name) }}</option>
						                    @endforeach
										</select>
									</div>
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="req_date" name="req_date" class="datepicker form-control my_style_input" value="" placeholder="Request Date" required />
									</div>	
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="email" id="email" class="form-control my_style_input" name="email" value="" placeholder="Your email" required />
									</div>
									<div class="col-md-6 col-sm-6 mb_10">
										<input type="text" id="phone_no" class="form-control my_style_input" name="phone_no" value="" placeholder="Your phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
									</div>
								</div>

								<div class="row mb_10">
									<div class="col-md-12">
										{{-- <label for="preferance_id"> Select your Preference </label> --}}
										<select name="preferance_id" class="my_style_input_select" id="preferance_id">
											<option value="" > -- Select your Preference -- </option>

											@foreach($preferances as $preferance)
						                    	<option value="{{ $preferance->id }}" data-themeid="{{ $preferance->id }}" {{ old('preferance_id') == $preferance->id ? 'selected' : '' }}>{{ ucwords($preferance->name) }}</option>
						                    @endforeach

										</select>
									</div>
								</div>
								
								<div class="frm_submit">
									{{-- <input type="submit" value="Request Booking" />
									<span class="arrow-right"></span> --}}
									<button class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 creative">
									<span class="a-btn-line"></span> Request Booking </button>
								</div>
									
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		{{-- <div class="container"> --}}
			<div class="column colum-container col-sm-12 no-padd margin-lg-20b">
				<div class="heading  left dark">
					<div class="subtitle "> OUR GALLERY </div>
					<h2 class="title">An “Imperial” reflection of contemporary architecture</h2>
				</div>
			</div>
		{{-- </div> --}}
	</div>
	<div id="g_imgs" class="owl-carousel owl-item">

        @if(isset($gallery_imgs))
		@foreach($gallery_imgs as $gallery_img)
		@foreach($gallery_img->g_img as $g_img)
        <div class="item">
            <div class="showcase fit-image">
                <a href="{{ url('public/uploads/gallery_img/'.$g_img->g_img) }}" data-toggle="lightbox" data-gallery="our-campus-gallery" data-max-width="600"><img src="{{ url('public/uploads/gallery_img/'.$g_img->g_img) }}" alt="" class="img-responsive"></a>
            </div>
        </div>
        @endforeach
		@endforeach
		@endif

    </div>
    <div class="row-fluid">
		<div class="col-md-12  margin-sm-15t">
			<div class="text-center">
				<a href="{{ route('gallery') }}" class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 creative">
				<span class="a-btn-line"></span> View More </a>
			</div>
		</div>
	</div>
</div>

<div class="heading left dark container margin-lg-20t margin-sm-30t">
	<div class="subtitle ">TESTIMONIALS</div>
	<h2 class="title">They love us.</h2>
</div>
<div class="container">
	<div class="row  row-fluid margin-lg-10t margin-lg-145b margin-sm-70b">
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/zebra_datepicker.min.js"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/lightbox.js') }}"></script>

<script type="text/javascript">
	

	$('.datepicker').Zebra_DatePicker({
        direction: true,
        format: 'Y-m-d'
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true,
          showArrows: true
        })
    });

    $("#g_imgs").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        singleItem:true,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
        responsive: {
            991: {
                items: 1,
            },
            767: {
                items: 1,
            },
            320: {
                items: 1,
            },
        }
    });
</script>
@stop

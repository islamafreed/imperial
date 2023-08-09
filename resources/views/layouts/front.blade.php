<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

<title>@yield('title')</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no" />
<meta name="author" content="Zakti Digital Services Pvt Ltd">
<meta name="description" content="Imperial Estate, a unit of Merrymaking Conventions LLP is one of the most contemporary and technologically advanced banquet halls in Guwahati. 
A multipurpose luxurious venue, known for hosting grand weddings and reception ceremonies, pre-wedding functions, engagements, anniversaries, cocktails, corporate, and birthday parties.">
<meta name="keywords" content="wedding venues,wedding venues near me,venues near me,cheap wedding venues,outdoor wedding venues,bibah bhawan in guwahati,wedding resorts in guwahati,banquet halls in guwahati,wedding reception venues,outdoor wedding venues near me,	cheap wedding venues near me,wedding spot,affordable wedding venues,reception halls near me,catering halls near me,wedding sites,Best Banquet hall near me,Best banquet hall for reception,Banquet hall for baby showe,Best banquet hall in budget">
<meta name=”robots” content=”noindex, follow”>
<meta name="format-detection" content="telephone=no">


@stack('meta_property')

<!-- ========== Favicon Icon ========== -->
<link rel="shortcut icon" href="{{ asset('public/assets/img/fav.png')}}" type="image/x-icon">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="{{ asset('public/assets/css/swiper.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/plugins/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/css/et-line-font.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/css/before-after.min.css')}}">
{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css')}}"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
{{-- <link rel="stylesheet" href="{{ asset('public/assets/css/unit-test.css')}}"> --}}
<link rel="stylesheet" href="{{ asset('public/assets/css/stylec164.css?v=9')}}">
<link rel="stylesheet" href="{{ asset('public/assets/css/aos.css')}}"/>
<link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
<link href="{{ asset('public/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
<!-- Sweet Alert 2 -->
<link rel="stylesheet" href="{!! asset('public/admin_assets/plugins/sweetalert2/sweetalert2.css') !!}">
<link rel="stylesheet" href="{{ asset('public/assets/css/custom-14.css') }}">
<style type="text/css">
	.uq-themes-sidebar.is-init {
		display: none!important;
	}
	.crisp-client {
		display: none!important;
	}
	.hidden {
		display: none!important;
	}
	#owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
	/*scroll to top*/
	#scroll {
	   width: 50px;
		height: 50px;
		line-height: 50px;
		position: fixed;
		bottom: 15px;
		right: 15px;
		font-size: 16px;
		z-index: 99;
		color: #fff;
		text-align: center;
		text-indent: -9999px;
		cursor: pointer;
		background-color: #A67D3B;
		transition: 1s ease;
		display: none;

	}
	#scroll{
	    display: inline;
	    z-index: 9999;
	}
	#scroll span {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-left: -8px;
	    margin-top: -12px;
	    height: 0;
	    width: 0;
	    border: 8px solid transparent;
	    border-bottom-color: #ffffff;
	}
	#scroll:hover {
	    background-color: #dedede;
	    opacity: 1;
	    filter: "alpha(opacity=100)";
	    -ms-filter: "alpha(opacity=100)";
	    box-shadow: 0 0 18px 0 rgba(0, 0, 0, 0.12);
	}
	#scroll:hover span {
	    border-bottom-color: #A67D3B;
	}
	   
	.prague-header .prague-social-nav .social-content {
	    right: 37px;
	    left: -37px;
	}
	.prague-header.light .prague-social-nav a {
	    background: rgba(0,0,0,1);
	}
	.prague-footer .footer-content-outer {
	    padding: 80px 0!important;
	}
	.prague-footer .footer-top-content .prague-footer-main-block .footer-main-content p {
		font-size: 16px!important;
	}
	.prague-footer-info-block .footer-info-block-content p {
		font-size: 16px!important;
	}
	.prague-footer-info-block .footer-info-block-title {
	    font-weight: 600;
	}
	.prague-footer .footer-top-content .prague-footer-info-block {
		text-align: left!important;
		margin-top: 56px;
	}
	
</style>
@yield('styles')

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '362756502341433');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=362756502341433&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>
<body>

<div class="prague-loader">
	<div class="prague-loader-wrapper">
		<div class="prague-loader-bar" >
			Imperial Estate
		</div>
	</div>
</div>

{{-- <div id="loading">
     <img src="{{ asset('public/assets/img/loading.gif') }}" alt="Loading" />
     Loading...
</div> --}}


@include('layouts.header')

@yield('content')

@include('layouts.footer')

<a href="#" id="scroll"><span></span></a>


<script src="{{ asset('public/assets/js/jquery.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery-ui.js')}}"></script>
{{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('public/assets/js/slick.min.js')}}"></script>
<script src="{{ asset('public/assets/js/swiper.min.js')}}"></script>
<script src="{{ asset('public/assets/js/hammer.min.js')}}"></script>
<script src="{{ asset('public/assets/js/foxlazy.min.js')}}"></script>
<script src="{{ asset('public/assets/js/all3860.js?v=1')}}"></script>
<script src="{{ asset('public/assets/js/aos.js')}}"></script>
<script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/assets/js/isotope.pkgd.min.js')}}"></script>
<!-- Sweet Alert 2 js -->
<script type="text/javascript" src="{!! asset('public/admin_assets/plugins/sweetalert2/sweetalert2.min.js') !!}"></script>
<script src="{{ asset('public/assets/js/magnific-popup.min.js')}}"></script>
<script type="text/javascript">
	$.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

	// $(window).load(function(){
	//    $('#loading').fadeOut();
	// });

    $('.image.popup a').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });

    $('.showcase.popup a').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });

	$('[data-toggle="tooltip"]').tooltip(); 

	$("#header a").on("click", function(){
	   $("#header").find(".active").removeClass("active");
	   $(this).parent().addClass("active");
	});

	$(".uq-themes-sidebar").hide();
	$(function () {
		 $('.crisp-client').addClass('hidden');
	 });
	// $(".crisp-client").hide();

	
	/*sticky menu*/
	$(document).on("scroll", function() {
	    if ($(document).scrollTop() > 86) {
	        $("#header").addClass("sticky");
	    } else {
	        $("#header").removeClass("sticky");
	    }
	});

	
	$(document).ready(function() {

		$('[data-toggle="tooltip"]').tooltip();

		/*animation on scroll*/
		AOS.init({
	        duration: 1200,
	    });

		/*top scroll*/
	    $('#scroll').hide();
	    $(window).on('scroll',function() {
	        if ($(this).scrollTop() > 150) {
	            $('#scroll').fadeIn();
	        } else {
	            $('#scroll').fadeOut();
	        }
	    });
	    $('#scroll').on('click',function() {
	        $("html, body").animate({
	            scrollTop: 0
	        }, 1200);
	        return false;
	    });

	      $("#hero").owlCarousel({
 
		      navigation : false, // Show next and prev buttons
		      slideSpeed : 1000,
		      paginationSpeed : 800,
		      pagination: true,
		      singleItem:true,
		      autoplay:true,
			  autoplayTimeout:10000,
			  autoplayHoverPause:true,
		 	  items : 1, 
		      itemsDesktop : true,
		      itemsDesktopSmall : true,
		      itemsTablet: true,
		      itemsMobile : true,
		      responsiveClass: true,
		      responsive: {
			    0: {
			      items: 1
			    },

			    600: {
			      items: 1
			    },

			    1024: {
			      items: 1
			    },

			    1366: {
			      items: 1
			    }
			  }
		 
		  });
	});

	@if (Session::has('error'))

	swal(
	    'Error',
	    '{{ Session::get("error") }}',
	    'error'
	    );

	@endif

	@if (Session::has('success'))

	swal(
	    'Success',
	    '{{ Session::get("success") }}',
	    'success'
	    );

	@endif
</script>
@yield('scripts')

</body>

</html>

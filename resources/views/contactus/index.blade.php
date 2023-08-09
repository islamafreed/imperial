@extends('layouts.front')

@section('title') Contact Us | Imperial Estate @endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('public/assets/css/unit-test.css')}}">
<style type="text/css">
.arrow-right {
    display: inline-block;
    position: absolute;
    top: 50%;
    margin-top: -1px;
    right: 10px;
    width: 31px;
    height: 1px;
    -webkit-transition: right .3s ease-in;
    -o-transition: right .3s ease-in;
    transition: right .3s ease-in;
}
.arrow-right::before {
    bottom: 1px;
    -webkit-transform: translateX(0px) translateY(3px) rotate(-45deg);
    -ms-transform: translateX(0px) translateY(3px) rotate(-45deg);
    transform: translateX(0px) translateY(3px) rotate(-45deg);
}
.arrow-right::before, .arrow-right::after {
    position: absolute;
    display: block;
    right: 0;
    width: 6px;
    height: 1px;
    content: '';
}
.arrow-right::after {
    top: 1px;
    -webkit-transform: translateX(0px) translateY(-3px) rotate(45deg);
    -ms-transform: translateX(0px) translateY(-3px) rotate(45deg);
    transform: translateX(0px) translateY(-3px) rotate(45deg);
}
.prague-formidable .frm_forms.with_frm_style .frm_compact .frm_dropzone.dz-clickable .dz-message, .prague-formidable .frm_forms.with_frm_style input[type="submit"], .prague-formidable .frm_forms.with_frm_style .frm_button_submit, .prague-formidable .frm_forms.with_frm_style .frm_submit input[type="button"], .prague-formidable .frm_form_submit_style, .prague-formidable .frm_forms.with_frm_style.frm_login_form input[type="submit"] {
    font-family: roboto,sans-serif;
    font-size: 11px;
    line-height: 18px;
    letter-spacing: 1.5px;
    font-weight: 700;
    background-color: transparent;
    border: none;
    color: #111;
    border-radius: 0;
    padding: 7px 40px 7px 10px;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin: 0;
    position: relative;
    background-image: url(public/assets/img/arrow-btn.png);
    background-repeat: no-repeat;
    background-position: 100% 43%;
}
#gmap {
    height: 500px;
}
</style>
@stop

@push('meta_property')

@endpush

@section('content')

<div class="container no-padd">
	<div class="row-fluid no-padd">
		<div class=" col-sm-12 no-padd">
			<div class="container-fluid top-banner no-padd  simple  dark  dark no-marg-bottom vindow-height">
				<div class="content">
					<div class="prague-svg-animation-text">
					</div>
					<div class="subtitle">CONTACT US</div>
					<h2 class="title">We'd Love To Hear From You</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="container no-padd margin-lg-30t margin-sm-30t margin-md-0t">
	<div class="row-fluid ">
		<div class="margin-md-90t margin-sm-20t col-sm-12 col-lg-offset-0 col-lg-6 col-md-offset-0 col-md-6 col-sm-offset-0 col-xs-12 padd-only-xs">
			<div class="heading  left dark ">
				<div class="subtitle ">Get In Touch</div>
				<h2 class="title">Want to know more about our venue?</h2>
				<div class="content">
					<p>Drop in for a visit or get in touch over the phone / email as per your convenience. </p>
				</div>
			</div>
			<div class="row-fluid vc_custom_1488483852815">
				<div class="col-sm-6 no-padd">
					<div class="column-inner">
						<div class="adddress-block  ">
							<div class="address-block-outer">
								<span class="separator"></span>
								<h4 class="address-title">PHONE</h4>
								<p><a href="tel:+(91)9577100000"><i class="fa fa-phone"></i>&nbsp;+(91) 9577100000</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 no-padd">
						<div class="adddress-block  ">
							<div class="address-block-outer">
								<span class="separator"></span>
								<h4 class="address-title">EMAIL</h4>
								<p><a href="#"><span><i class="fa fa-envelope"></i>&nbsp;sudiptaacharya@imperialestate.in</span></a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 no-padd">
							<div class="adddress-block">
								<div class="address-block-outer">
									<span class="separator"></span>
									<h4 class="address-title">Address</h4>
									<p><i class="fa fa-briefcase"></i> NH-37, Nalapara Road, Near Mercedes Benz Showroom Sarusajai Guwahati, Assam 781029 India</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-xs-12  margin-lg-70t margin-sm-40t margin-md-70t no-padd">
					<div class="vc_column-inner vc_custom_1488483852815">
						<div class="prague-formidable  vc_formidable">
							<div class="frm_forms  with_frm_style frm_style_formidable-style-2-2" id="frm_form_3_container">
								<form action="{{ route('contact-us.post') }}" enctype="multipart/form-data" method="post" class="frm-show-form contact-us-form" id="">
									@csrf
									<div class="frm_form_fields ">
										<fieldset>
											<div class="frm_fields_container">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div id="frm_field_15_container" class="frm_form_field form-field  frm_required_field frm_none_container">
															<input type="text" id="name" name="name" value="" placeholder="Name" data-reqmsg="This field cannot be blank." data-invmsg="Name is invalid" required />
														</div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div id="frm_field_16_container" class="frm_form_field form-field  frm_none_container">
															<input type="text" id="phone_no" name="phone_no" value="" placeholder="Phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" data-invmsg="Phone is invalid" required />
														</div>
													</div>
												</div>
												<div id="frm_field_17_container" class="frm_form_field form-field  frm_required_field frm_none_container">
													<input type="email" id="email" name="email" value="" placeholder="example@mail.com" data-reqmsg="This field cannot be blank." data-invmsg="Email Address is invalid" required />
												</div>
												<div id="frm_field_18_container" class="frm_form_field form-field  frm_none_container">
													<textarea name="message" id="message" rows="5" placeholder="Message" data-invmsg="Paragraph Text is invalid" required></textarea>
												</div>
												
												<div class="frm_submit">
													<input type="submit" value="Send" />
													<span class="arrow-right"></span>
												</div>
											</div>
										</fieldset>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="margin-lg-25t margin-sm-30t container-fluid no-padd">
			<div data-vc-full-width='true' data-vc-full-width-init="true" data-vc-stretch-content="true" class="contact_map row-fluid no-padd margin-lg-115t margin-sm-50t no-padd" style="position:relative; box-sizing: border-box;">
				<div class="col-sm-12 no-padd">
					<div id="gmap"></div>
				</div>
			</div>
		</div>

@endsection


@section('scripts')
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('public/assets/js/gmap.min.js')}}"></script>
<script type="text/javascript">
    

        var map;

        map = new GMaps({
            el: '#gmap',
            lat: 26.1570,
            lng: 91.7830,
            scrollwheel:false,
            zoom: 19,
            zoomControl : true,
            panControl : false,
            streetViewControl : true,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });

        var image = 'public/assets/img/map-icon.png';
        map.addMarker({
            lat: 26.1570,
            lng: 91.7830,
            icon: image,
            animation: google.maps.Animation.DROP,
            verticalAlign: 'top',
            horizontalAlign: 'center',
            backgroundColor: '#d3cfcf',
        });


        var styles = [ 

        {
            "featureType": "road",
            "stylers": [
            { "color": "#979797" }
            ]
        },{
            "featureType": "water",
            "stylers": [
            { "color": "#aaaaaa" }
            ]
        },{
            "featureType": "landscape",
            "stylers": [
            { "color": "#e2e2e2" }
            ]
        },{
            "elementType": "labels.text.fill",
            "stylers": [
            { "color": "#000000" }
            ]
        },{
            "featureType": "poi",
            "stylers": [
            { "color": "#b9b9b9" }
            ]
        },{
            "elementType": "labels.text",
            "stylers": [
            { "saturation": 1 },
            { "weight": 0.1 },
            { "color": "#101010" }
            ]
        }

        ];

        map.addStyle({
            styledMapName:"Styled Map",
            styles: styles,
            mapTypeId: "map_style"  
        });

        map.setStyle("map_style");
   
</script>
@stop
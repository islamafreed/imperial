@extends('layouts.front')

@section('title') Gallery | Imperial Estate @endsection

@section('styles')
<style type="text/css">
.body-content.gallery {
    columns: 4;
    column-gap: 15px;
    width: 100%;
    margin: 0 auto;
    padding: 15px;
    margin-bottom: 70px;
}

.box-content {
  	z-index: -1;
    width: 100%;
    position: relative;
    overflow: hidden;
    break-inside: avoid;
    background-color: #fff;
    border-radius: 5px;
    margin-bottom: 15px;
    box-shadow: 0 0 2px rgba(0, 0, 0, .3);
}

.box-content .image {
    width: 100%;
    position: relative;
}

.box-content .image img {
    max-width: 100%;
}

.box-content .title {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    text-transform: capitalize;
    align-items: center;
}

.box-content .image:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.20);
    display: none;
}

.box-content .image:hover::before {
    display: block;
    cursor: pointer;
}

.box-content .title a {
    color: #38443d;
}
.top-banner.dark .top-banner-cursor {
    cursor: url(public/assets/img/cursor-dark.png),auto;
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
					<div class="subtitle">OUR GALLERY</div>
					<h2 class="title">An “Imperial” reflection of contemporary architecture</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
	
		<div class="row-fluid">
			<div class="content">
				<div class="head-content"></div>
				<div class="body-content gallery">

					@if(isset($gallery_imgs))
					@foreach($gallery_imgs as $gallery_img)
					@foreach($gallery_img->g_img as $g_img)

					<div class="box-content" title="{{ ucwords($gallery_img->caption) }}">
						<div class="image">
							<a href="{{ url('public/uploads/gallery_img/'.$g_img->g_img) }}" data-toggle="lightbox" data-gallery="imperial-estate" title="{{ ucwords($gallery_img->caption) }}">
								<img title="{{ ucwords($g_img->caption) }}" src="{{ url('public/uploads/gallery_img/'.$g_img->g_img) }}" alt="gallery images">
							</a>
						</div>
						{{-- <div class="title">
							<a href="#" data-placement="top" data-toggle="tooltip" title="{{ ucwords($gallery_img->caption) }}">
								<p data-placement="top" data-toggle="tooltip" title="{{ ucwords($gallery_img->caption) }}">{{ ucwords($gallery_img->caption) }}</p>
							</a>
							<a href="#" data-toggle="tooltip" class="add-whist">
								<i class="fa fa-heart"></i>
							</a>
						</div> --}}
					</div>

					@endforeach
					@endforeach
					@endif

				</div>
			</div>
		</div>
	
</div>

@endsection


@section('scripts')
<script type="text/javascript" src="{{ asset('public/assets/js/lightbox.js') }}"></script>
<script type="text/javascript">
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true,
          showArrows: true
        })
    });
</script>
@stop


@extends('layouts.front')

@section('title') Packages | Imperial Estate @endsection

@section('styles')
<style type="text/css">
	.scrollable{
      overflow-y: auto;
      max-height: 150px;
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
					<div class="subtitle">OUR PACKAGES</div>
					<h2 class="title">Choose your ideal package</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
	<div class="row-fluid no-padd">
		@if(count($packages) > 0)
		@foreach($packages as $package)
		<div class="col-sm-4 col-xs-12 no-padd">
			<div class="vc_column-inner ">
				<div class="prague-pricing-wrapper  featured_image">
					<div class="pricing-img-wrapp">
						<img class="s-img-switch" src="{{ url('public/uploads/package/'.$package->package_img) }}" alt="package image">
					</div>
					<div class="prague-pricing-content-wrapper">
						<div class="prague-pricing-subtitle">
						from </div>
						<h3 class="prague-pricing-price">
						@php
							setlocale(LC_MONETARY, 'en_IN');
							$amount = App\Helpers\Helper::moneyFormatIndia($package->package_price);
						@endphp
						<i class="fa fa-rupee"></i> {{ $amount }} </h3>
						<h3 class="prague-pricing-title">
						{{ ucwords($package->name) }} </h3>
						<div class="prague-pricing-description">
							<div class="scrollable">
								@foreach($package->tags as $tag)
	                                @if(isset($tag))
										<p><i class="fa fa-check text-success"></i> {{ ucwords($tag->name) }}</p>
									@endif
	                            @endforeach
                            </div>
						</div>
						<a class="prague-pricing-link a-btn-arrow-2" href="{{ route('packages-details',$package->slug) }}" target="_blank">
							<span class="arrow-right"></span>
						Request Quote </a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@endif
	</div>
</div>

@endsection


@section('scripts')

@stop
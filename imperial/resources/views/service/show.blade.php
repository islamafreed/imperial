@extends('layouts.front')

@section('title') Service Details | Imperial Estate @endsection

@section('styles')

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
					<div class="subtitle">OUR SERVICES</div>
					<h2 class="title">Providing a wide range of services to meet all our customer's needs</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="container padd-only-xs margin-xs-20t margin-md-0t">
	<div class="row">
		<div class="col-xs-12 padd-only-xs">

			<div class="services-detailed">
				<div class="post-content">
					<h3>{{ ucwords($service->title) }}</h3>
					<h5>{{ ucwords($service->sub_title) }}</h5>
					<p>{!! $service->details !!}</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')

@stop
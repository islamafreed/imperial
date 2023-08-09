@extends('layouts.front')

@section('title') Facilities | Imperial Estate @endsection

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
					<div class="subtitle">FACILITIES AT IMPERIAL</div>
					<h2 class="title"> A symbol of contemporary art & luxury </h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="margin-lg-20t margin-sm-30t">
	<div class="container">
		<div class="row">
			<div class="no-padd-left no-padd-right margin-lg-20t">
				<div class="wrapper">
					<div data-unique-key="139714cb2b9c35c987d2544328454258" class="js-load-more" data-start-page="1" data-max-page="5" data-next-link="http://prague.loc/page/2/">
						<div class="row prague_list prague_count_col1 prague_gap_col10  no-footer-content no-figure prague-load-wrapper" data-columns="prague_count_col1" data-gap="prague_gap_col10">
							
							@php $i=1 @endphp
							@if(count($facilities)>0)
								@foreach($facilities as $facility)
									@if($i%2)
									<div class="project-list-item">
										<div class="project-list-outer">
											<div class="project-list-wrapper">
												<div class="project-list-img">
													<img src="#" data-lazy-src="{{ url('public/uploads/facility/cover/'.$facility->facility_cover_img) }}" class="s-img-switch" alt="{{ ucwords($facility->title) }}" />
												</div>
												<div class="project-list-content">
													
													<h3 class="project-list-title"><a href="#" target="_self">{{ ucwords($facility->title) }}</a></h3>
													<div class="project-list-excerpt text-justify">
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
													
													<h3 class="project-list-title"><a href="#" target="_self">{{ ucwords($facility->title) }}</a></h3>
													<div class="project-list-excerpt text-justify">
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

@endsection


@section('scripts')

@stop
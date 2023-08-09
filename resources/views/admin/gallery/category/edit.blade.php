@extends('admin_layouts.front')

@section('title') Edit Gallery Category @endsection

@section('styles')

@stop

@section('content')

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Edit Gallery Category</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="{{ route('admin.gallery-category') }}" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="{{ route('admin.update-gallery-category',Crypt::encrypt($g_img_cat->id)) }}">
					{{ csrf_field() }}
					{!! method_field('PATCH') !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{ old('name',$g_img_cat->name) }}" autocomplete="off" required>

                                    <label class="form-label">Category Name</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@stop
@extends('admin_layouts.blog')

@section('title') Add Blog @endsection

@section('styles')
<link href="{!!asset('public/admin_assets/plugins/dropify/css/dropify.min.css')!!}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('public/admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/css/bootstrap/zebra_datepicker.min.css">

<link href="{{ asset('public/admin_assets/plugins/summernote/summernote.min.css') }}" rel="stylesheet">

<style type="text/css">
    .bootstrap-tagsinput {
        border-radius: 0!important;
        padding: 6px 6px!important;
        width: 100%!important;
        height: 45px;
    }
    .bootstrap-tagsinput .tag {
        margin-right: 0!important;
    }
    .bootstrap-tagsinput input {
        width: 20%;
        padding: 6px!important;
    }
    .form-group .datep .form-label {
        top: -10px!important;
    }
</style>
@stop

@section('content')

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Add Blog</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="{{ route('admin.blog') }}" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="{{ route('admin.add-blog.post') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" autocomplete="off" required>

                                    <label class="form-label">Blog Name</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="author_name" value="{{ old('author_name') }}" autocomplete="off" required>

                                    <label class="form-label">Author Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line datep">
                                    <input type="text" class="form-control datepicker" name="blog_date" value="{{ old('blog_date') }}" autocomplete="off" required>

                                    <label class="form-label">Blog Date</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Tags</label> <small style="color: red;">Enter tab after every tag</small>
                                    <input name="tags" id="tags" value="{{ old('tags') }}" data-role="tagsinput" type="text" class="form-control filter-input" placeholder="Enter the service name" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Details</label>
                                <textarea name="details" class="form-control summernote">{{ old('details') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Blog image</label> <small style="color: red;">Dimension: 1280 x 853 px</small>
                                <input type="file" name="blog_img" class="dropify" data-height="100" {{ old('blog_img') }}>
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
<script src="{!! asset('public/admin_assets/plugins/dropify/js/dropify.min.js') !!}" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('public/admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/zebra_datepicker.min.js"></script>

<script src="{{ asset('public/admin_assets/plugins/summernote/summernote.min.js')}}"></script>

<script type="text/javascript">

    $('.datepicker').Zebra_DatePicker({
        direction: false,
        format: 'Y-m-d'
    });

    $('.dropify').dropify();
    
    $('.summernote').summernote({
       placeholder: '',
       tabsize: 2,
       height: 200
    });
</script>
@stop
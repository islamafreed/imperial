@extends('admin_layouts.blog')

@section('title') Add Package @endsection

@section('styles')
<link href="{!!asset('public/assets/plugins/dropify/css/dropify.min.css')!!}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">

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
				<h2>Add Package</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="{{ route('admin.package') }}" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="{{ route('admin.add-package.post') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" autocomplete="off" required>

                                    <label class="form-label">Package Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="package_price" value="{{ old('package_price') }}" autocomplete="off" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required>

                                    <label class="form-label">Package Price</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Package points</label> <small style="color: red;">Enter tab after every tag</small>
                                    <input name="tags" id="tags" value="{{ old('tags') }}" data-role="tagsinput" type="text" class="form-control filter-input" placeholder="Enter the package points" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Remarks</label>
                                <textarea name="remarks" class="form-control tinymce">{{ old('remarks') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Package image</label> <small style="color: red;">Dimension: 800 x 400 px</small>
                                <input type="file" name="package_img" class="dropify" data-height="100" {{ old('package_img') }}>
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
<script src="{!! asset('public/assets/plugins/dropify/js/dropify.min.js') !!}" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('public/assets/plugins/tinymce/tinymce.js')}}"></script>

<script type="text/javascript">

    $('.dropify').dropify();
    
    //TinyMCE
    tinymce.init({
        selector: "textarea.tinymce",
        theme: "modern",
        height: 100,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools autoresize'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = "{{asset('public/assets/plugins/tinymce')}}";
</script>
@stop



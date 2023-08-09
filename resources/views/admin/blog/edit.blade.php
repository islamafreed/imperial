@extends('admin_layouts.blog')

@section('title') Edit Blog @endsection

@section('styles')
<link href="{!!asset('public/admin_assets/plugins/dropify/css/dropify.min.css')!!}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('public/admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
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
    .form-group .datep .form-label  {
        top: -10px!important;
    }
</style>
@stop

@section('content')

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Edit Blog</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="{{ route('admin.blog') }}" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="{{ route('admin.update-blog',Crypt::encrypt($blog->id)) }}" enctype="multipart/form-data">
					{{ csrf_field() }}
                    {!! method_field('PATCH') !!}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{ old('name',$blog->name) }}" autocomplete="off" required>

                                    <label class="form-label">Blog Name</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="author_name" value="{{ old('author_name',$blog->author_name) }}" autocomplete="off" required>

                                    <label class="form-label">Author Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line datep">
                                    <input type="text" class="form-control datepicker" name="blog_date" value="{{ old('blog_date',date('Y-m-d', strtotime($blog->blog_date))) }}" autocomplete="off" required>

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
                                    <input name="tags" id="tags" value="@if(isset($tags)){{ old('tags',implode(', ', $tags)) }} @endif" data-role="tagsinput" type="text" class="form-control filter-input" placeholder="Enter the service name" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Details</label>
                                <textarea name="details" class="form-control tinymce">{{ old('details',$blog->details) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Blog image</label> <small style="color: red;">Dimension: 1280 x 853 px</small>
                                <input type="file" name="blog_img" class="dropify" data-height="100" {{ old('blog_img') }} data-default-file="@if(isset($blog->blog_img)){{ url('public/uploads/blog/'.$blog->blog_img) }}@endif">
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script src="{{asset('public/admin_assets/plugins/tinymce/tinymce.js')}}"></script>
<script src="{!! asset('public/admin_assets/plugins/dropify/js/dropify.min.js') !!}" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('public/admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script type="text/javascript">

    $('.dropify').dropify();
    //  $(function () {

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
    tinyMCE.baseURL = "{{asset('public/admin_assets/plugins/tinymce')}}";
// });
</script>
@stop
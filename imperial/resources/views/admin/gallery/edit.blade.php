@extends('admin_layouts.front')

@section('title') Edit Gallery Image @endsection

@section('styles')
{{-- <link href="{!!asset('public/admin_assets/plugins/dropify/css/dropify.min.css')!!}" rel="stylesheet" /> --}}
<link rel="stylesheet" href="{!! asset('public/admin_assets/plugins/jquery-filer/css/jquery.filer.css') !!}">
<link rel="stylesheet" href="{!! asset('public/admin_assets/plugins/jquery-filer/css/themes/jquery.filer-dragdropbox-theme.css') !!}">

<style type="text/css">
	
	.form-group .form-line .form-label {
		top: -12px!important;
	}

	.jFiler-input-dragDrop {
        width: 100%;
        border-radius: 2px;
        border: 1px dashed #ccc;
        background-color: #f9f9f9;
    }
    .jFiler-input-text p {
        text-align: center;
    }
    .gall_img {
        height: 150px;
    }
</style>
@stop

@section('content')

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Edit Gallery Image</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="{{ route('admin.gallery-img') }}" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="{{ route('admin.update-gallery-img',Crypt::encrypt($gallery_img->id)) }}" enctype="multipart/form-data">
					@csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="caption" value="{{ old('caption',$gallery_img->caption) }}" autocomplete="off" required>

                                    <label class="form-label">Caption</label>
                                </div>
                            </div>
                        </div>
                    </div>   

					<div class="row clearfix">
                        <div class="col-sm-12">

						   <label for="gallery_cat_id">Gallery Category</label> 

							<select class="form-control" name="gallery_cat_id" id="gallery_cat_id" required>
                                <option value="">-- Please select category --</option>
                                @foreach($gallery_cats as $gallery_cat)
			                    	<option value="{{ $gallery_cat->id }}" data-themeid="{{ $gallery_cat->id }}" {{ old('gallery_cat_id',$gallery_img->gallery_cat_id) == $gallery_cat->id ? 'selected' : '' }}>{{ ucwords($gallery_cat->name) }}</option>
			                    @endforeach
                            </select>
						
					</div>
				</div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Remarks</label>
                            <textarea name="remarks" class="form-control tinymce">{{ old('remarks',$gallery_img->remarks) }}</textarea>
                        </div>
                    </div>
                </div>

					<div class="row">
                        @if(count($gallery_img->g_img))
                        @foreach($gallery_img->g_img as $g_img)
                        <div class="col-md-4">
                            <img src="{{ url('public/uploads/gallery_img/'.$g_img->g_img) }}" alt="Gallery Image" class="gall_img">
                        <br>
                        <a href="{{ route('admin.delete-image',['id' => Crypt::encrypt($g_img->id), 'gallery_img_id' => $gallery_img->id]) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></a>

                        </div>
                        @endforeach
                        @endif
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
<script type="text/javascript">
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
</script>
@stop




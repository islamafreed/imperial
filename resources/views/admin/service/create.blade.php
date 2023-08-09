@extends('admin_layouts.blog')

@section('title') Add Service @endsection

@section('styles')

@stop

@section('content')

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Add Service</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="{{ route('admin.service') }}" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="{{ route('admin.add-service.post') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" autocomplete="off" required>

                                    <label class="form-label">Service Title</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="sub_title" value="{{ old('sub_title') }}" autocomplete="off"  required>

                                    <label class="form-label">Service Sub Title</label>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Details</label>
                                <textarea name="details" class="form-control tinymce">{{ old('details') }}</textarea>
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

<script src="{{asset('public/assets/plugins/tinymce/tinymce.js')}}"></script>

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
    tinyMCE.baseURL = "{{asset('public/assets/plugins/tinymce')}}";
</script>
@stop



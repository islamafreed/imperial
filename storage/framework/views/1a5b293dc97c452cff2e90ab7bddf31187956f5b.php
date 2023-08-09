<?php $__env->startSection('title'); ?> Add Gallery Image <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('public/admin_assets/plugins/jquery-filer/css/jquery.filer.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/admin_assets/plugins/jquery-filer/css/themes/jquery.filer-dragdropbox-theme.css')); ?>">

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

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Add Gallery Image</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="<?php echo e(route('admin.gallery-img')); ?>" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="<?php echo e(route('admin.add-gallery-img.post')); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="caption" value="<?php echo e(old('caption')); ?>" autocomplete="off" required>

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
                                <?php $__currentLoopData = $gallery_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                    	<option value="<?php echo e($gallery_cat->id); ?>" data-themeid="<?php echo e($gallery_cat->id); ?>" <?php echo e(old('gallery_cat_id') == $gallery_cat->id ? 'selected' : ''); ?>><?php echo e(ucwords($gallery_cat->name)); ?></option>
			                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
						
					</div>
				</div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Remarks</label>
                            <textarea name="remarks" class="form-control tinymce"><?php echo e(old('remarks')); ?></textarea>
                        </div>
                    </div>
                </div>

					<div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Gallery image</label> <small>Select multiple</small>
                                
                                <div id="photo"></div>
                        
		                        <input 
		                            type="file" 
		                            class="mb2" 
		                            name="files[]" 
		                            id="filer_input" 
		                            multiple="multiple" 
		                            data-jfiler-extensions="png,jpg,jpeg" 
		                            data-jfiler-maxSize="4" 
		                            data-jfiler-limit="20">
                            </div>
                        </div>
                    </div>
		         
					<button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
					
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('public/admin_assets/plugins/tinymce/tinymce.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/admin_assets/plugins/jquery-filer/js/jquery.filer.min.js')); ?>"></script>

<script>

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
    tinyMCE.baseURL = "<?php echo e(asset('public/admin_assets/plugins/tinymce')); ?>";
    

	// $('.dropify').dropify();
	$('#filer_input').filer({
        // changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-folder"></i></div><div class="jFiler-input-text"><h3>Click on this box</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><p>Drag and drop files here or click</p></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\
                    <div class="jFiler-item-container">\
                        <div class="jFiler-item-inner">\
                            <div class="jFiler-item-thumb">\
                                <div class="jFiler-item-status"></div>\
                                <div class="jFiler-item-thumb-overlay">\
                                    <div class="jFiler-item-info">\
                                        <div style="display:table-cell;vertical-align: middle;">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
                                            <span class="jFiler-item-others">{{fi-size2}}</span>\
                                        </div>\
                                    </div>\
                                </div>\
                                {{fi-image}}\
                            </div>\
                            <div class="jFiler-item-assets jFiler-row">\
                                <ul class="list-inline pull-left">\
                                    <li>{{fi-progressBar}}</li>\
                                </ul>\
                                <ul class="list-inline pull-right">\
                                    <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                </ul>\
                            </div>\
                        </div>\
                    </div>\
                </li>',
            itemAppend: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-thumb-overlay">\
                                        <div class="jFiler-item-info">\
                                            <div style="display:table-cell;vertical-align: middle;">\
                                                <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
                                                <span class="jFiler-item-others">{{fi-size2}}</span>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left">\
                                        <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                canvasImage: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-items-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action'
                }
            },
            dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        remove: 0,
        uploadFile: {

            url: '<?php echo e(route("admin.gallery.image.ajax")); ?>', //URL to which the request is sent {String}
            data: {
                _token: $('input[name="_token"]').val()
            },  
            type: 'POST',  
            enctype: 'multipart/form-data', 
            beforeSend: function(){},
            dataType: "json",
            // success: function(data, ele) {
            //     alert(data);

            //     var d = JSON.parse(data);
            //     $.each(d, function (index, file) {
            //         // console.log('Added file: ' + file.name);
            //         $('#photo').append('<input type="hidden" name="trip_image[]" value="'+ file + '">');
            //     });

            // }
            success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
                var parent = itemEl.find(".jFiler-jProgressBar").parent(),
                    new_file_name = JSON.parse(data),
                    filerKit = inputEl.prop("jFiler");

                filerKit.files_list[id].name = new_file_name;

                itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                });

                var d = JSON.parse(data);
                $.each(d, function (index, file) {
                    // console.log('Added file: ' + file.name);
                    $('#photo').append('<input type="hidden" name="gallery_img[]" value="'+ file + '">');
                });
            },
            error: function(el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                });
            },
            statusCode: null,
            onProgress: null,
            onComplete: null
        },
        files: null,
        addMore: false,
        allowDuplicates: true,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
            var filerKit = inputEl.prop("jFiler"),
                file_name = filerKit.files_list[id].name;

            $.post('<?php echo e(route('admin.gallery.image.delete.ajax')); ?>', {file: file_name});
        },
        onEmpty: null,
        options: null,
        dialogs: {
            alert: function(text) {
                return alert(text);
            },
            confirm: function (text, callback) {
                confirm(text) ? callback() : null;
            }
        },
        captions: {
            errors: {
                filesType: "Only images files are allowed to be uploaded.",
            }
        }

    });
	

</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin_layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/gallery/create.blade.php ENDPATH**/ ?>
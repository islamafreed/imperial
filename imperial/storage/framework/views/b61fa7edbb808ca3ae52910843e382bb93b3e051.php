<?php $__env->startSection('title'); ?> Edit Package <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="<?php echo asset('public/assets/plugins/dropify/css/dropify.min.css'); ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>">

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Edit Package</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="<?php echo e(route('admin.package')); ?>" class="btn btn-success">View all</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="<?php echo e(route('admin.update-package',Crypt::encrypt($package->id))); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name',$package->name)); ?>" autocomplete="off" required>

                                    <label class="form-label">Package Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="package_price" value="<?php echo e(old('package_price',$package->package_price)); ?>" autocomplete="off" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required>

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
                                    <input name="tags" id="tags" value="<?php if(isset($tags)): ?><?php echo e(old('tags',implode(', ', $tags))); ?> <?php endif; ?>" data-role="tagsinput" type="text" class="form-control filter-input" placeholder="Enter the package points" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Remarks</label>
                                <textarea name="remarks" class="form-control tinymce"><?php echo e(old('remarks',$package->remarks)); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Package image</label> <small style="color: red;">Dimension: 800 x 400 px</small>
                                <input type="file" name="package_img" class="dropify" data-height="100" <?php echo e(old('package_img')); ?> data-default-file="<?php if(isset($package->package_img)): ?><?php echo e(url('public/uploads/package/'.$package->package_img)); ?><?php endif; ?>">
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
<script src="<?php echo asset('public/assets/plugins/dropify/js/dropify.min.js'); ?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo e(asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')); ?>"></script>
<script src="<?php echo e(asset('public/assets/plugins/tinymce/tinymce.js')); ?>"></script>

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
    tinyMCE.baseURL = "<?php echo e(asset('public/assets/plugins/tinymce')); ?>";
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin_layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/package/edit.blade.php ENDPATH**/ ?>
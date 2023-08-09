<?php $__env->startSection('title'); ?> Add Booked Date <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/css/bootstrap/zebra_datepicker.min.css">

<style type="text/css">
    .form-group .datep .form-label {
        top: -10px!important;
    }
    .Zebra_DatePicker_Icon_Wrapper  {
        width: 100%!important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Add Booked Date</h2>
				<ul class="header-dropdown m-r--5">
					
					<li><a href="<?php echo e(route('admin.check-date-availability')); ?>" class="btn btn-success">View all Request</a></li>
                    <li><a href="<?php echo e(route('admin.booked-date')); ?>" class="btn btn-warning">View all booked dates</a></li>
					
				</ul>
			</div>
			<div class="body">
				<form id="form_validation" method="POST" action="<?php echo e(route('admin.add-booked-date.post')); ?>">
					<?php echo e(csrf_field()); ?>


                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autocomplete="off" required>

                                    <label class="form-label">Booked for (Person's Name)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" value="<?php echo e(old('phone_no')); ?>" autocomplete="off" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required>

                                    <label class="form-label">Booked for (Person's Phone no)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" autocomplete="off" required>

                                    <label class="form-label">Booked for (Person's Email)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line datep">
                                    <input type="text" class="form-control datepicker" name="booked_date" value="<?php echo e(old('booked_date')); ?>" autocomplete="off" required>

                                    <label class="form-label">Booked Date</label>
                                </div>
                            </div>
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

                    
                    
                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/zebra_datepicker.min.js"></script>

<script src="<?php echo e(asset('public/admin_assets/plugins/tinymce/tinymce.js')); ?>"></script>

<script type="text/javascript">

    $('.datepicker').Zebra_DatePicker({
        direction: true,
        format: 'Y-m-d'
    });

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
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/check_date_availability/booked_date/create.blade.php ENDPATH**/ ?>
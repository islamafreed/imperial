<?php $__env->startSection('title'); ?> Get Quote | Imperial Estate <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/css/bootstrap/zebra_datepicker.min.css">
<style type="text/css">
.arrow-right {
    display: inline-block;
    position: absolute;
    top: 50%;
    margin-top: -1px;
    right: 10px;
    width: 31px;
    height: 1px;
    -webkit-transition: right .3s ease-in;
    -o-transition: right .3s ease-in;
    transition: right .3s ease-in;
}
.arrow-right::before {
    bottom: 1px;
    -webkit-transform: translateX(0px) translateY(3px) rotate(-45deg);
    -ms-transform: translateX(0px) translateY(3px) rotate(-45deg);
    transform: translateX(0px) translateY(3px) rotate(-45deg);
}
.arrow-right::before, .arrow-right::after {
    position: absolute;
    display: block;
    right: 0;
    width: 6px;
    height: 1px;
    content: '';
}
.arrow-right::after {
    top: 1px;
    -webkit-transform: translateX(0px) translateY(-3px) rotate(45deg);
    -ms-transform: translateX(0px) translateY(-3px) rotate(45deg);
    transform: translateX(0px) translateY(-3px) rotate(45deg);
}
input[type="submit"]{
    font-family: roboto,sans-serif;
    font-size: 11px;
    line-height: 18px;
    letter-spacing: 1.5px;
    font-weight: 700;
    background-color: transparent;
    border: none;
    color: #111;
    border-radius: 0;
    padding: 7px 40px 7px 10px;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin: 0;
    position: relative;
    background-image: url(public/assets/img/arrow-btn.png);
    background-repeat: no-repeat;
    background-position: 100% 43%;
}
.mb_30 {
	margin-bottom: 30px;
}
.text-right {
	text-align: right!important;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('meta_property'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="container no-padd">
	<div class="row-fluid no-padd">
		<div class=" col-sm-12 no-padd">
			<div class="container-fluid top-banner no-padd  simple  dark  dark no-marg-bottom vindow-height">
				<div class="content">
					<div class="prague-svg-animation-text">
					</div>
					<div class="subtitle">Get Quote</div>
					<h2 class="title">Get the best and reasonable quotes for all your upcoming events. Brief us and find out what we have in store for you.</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="margin-lg-20t margin-sm-30t margin-lg-70b margin-sm-70b">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form action="<?php echo e(route('send-quote.post')); ?>" method="post">
					<?php echo csrf_field(); ?>

					
					<div class="row mb_30">
						<div class="col-md-6 col-sm-6">
							<input type="text" id="name" class="form-control" name="name" value="" placeholder="Your name"  required />
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="text" id="estimated_guest" class="form-control" name="estimated_guest" value="" placeholder="Estimated Guests" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
						</div>
					</div>
					<div class="row mb_30">
						<div class="col-md-6 col-sm-6">
							<select name="ocation_id" class="form-control">
								<option value=""> -- Please select an ocation -- </option>
								<?php $__currentLoopData = $ocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ocation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                    	<option value="<?php echo e($ocation->id); ?>" data-themeid="<?php echo e($ocation->id); ?>" <?php echo e(old('ocation_id') == $ocation->id ? 'selected' : ''); ?>><?php echo e(ucwords($ocation->name)); ?></option>
			                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>

						<div class="col-md-6 col-sm-6">
							<input type="text" id="req_date" name="req_date" class="datepicker form-control" value="" placeholder="Request Date Availability" required />
						</div>	
					</div>
					<div class="row mb_30">
						<div class="col-md-6 col-sm-6">
							<input type="email" id="email" class="form-control" name="email" value="" placeholder="example@mail.com" required />
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="text" id="phone_no" class="form-control" name="phone_no" value="" placeholder="Your phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
						</div>
					</div>
					
					<div class="row mb_30">
						<div class="col-md-12">
							<label>Facilities required </label>
							<span class="text-right">
							<input type="checkbox" name="select_all" id="select_all" class="filled-in chk-col-cyan" />
							<label for="select_all">Select All</label>
							</span>
						</div> 

						<?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-6">

								<input type="checkbox" id="facility<?php echo e($facility->id); ?>" name="facility_id[]" class="chk-col-cyan facility" value="<?php echo e($facility->id); ?>" />
								<label for="facility<?php echo e($facility->id); ?>"><?php echo e($facility->title); ?></label>

							</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					
					<div class="frm_submit">
						<input type="submit" value="Request Booking" />
						<span class="arrow-right"></span>
					</div>
						
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.15/zebra_datepicker.min.js"></script>
<script type="text/javascript">
	$('.datepicker').Zebra_DatePicker({
        direction: true,
        format: 'Y-m-d'
    });

    $('#select_all').click(function() {
			var checkboxes = $('.facility');
		// alert($(this).is(':checked'));
		if($(this).is(':checked')) {
			checkboxes.prop("checked" , true);
		} else {
			checkboxes.prop ( "checked" , false );
		}
		});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/getquote/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?> Booking | Imperial Estate <?php $__env->stopSection(); ?>

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
.mb_10 {
	margin-bottom: 10px;
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
					<div class="subtitle">BOOKING</div>
					<h2 class="title">Make a Right Choice, Book Your Special Events With Us!</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="margin-lg-20t margin-sm-30t margin-lg-70b margin-sm-70b">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form action="<?php echo e(route('booking.post')); ?>" method="post">
					<?php echo csrf_field(); ?>
					
					<div class="row ">
						<div class="col-md-6 col-sm-6 mb_10">
							<input type="text" id="name" class="form-control my_style_input" name="name" value="" placeholder="Name"  required />
						</div>
						<div class="col-md-6 col-sm-6 mb_10">
							<input type="text" id="phone_no" class="form-control my_style_input" name="phone_no" value="" placeholder="Phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
						</div>
					</div>
					<div class="row ">
						<div class="col-md-6 col-sm-6 mb_10">
							<input type="email" id="email" class="form-control my_style_input" name="email" value="" placeholder="example@mail.com" required />
						</div>
						<div class="col-md-6 col-sm-6 mb_10">
							<input type="text" id="booking_date" name="booking_date" class="datepicker form-control my_style_input" value="" placeholder="Your Preferred Date" required />
						</div>
					</div>
					
					<div class="row mb_10">
						<div class="col-md-12">
							<textarea name="message" class="form-control my_style_input" id="message" rows="5" placeholder="Message" required></textarea>
						</div>
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/booking/index.blade.php ENDPATH**/ ?>
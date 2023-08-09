<?php $__env->startSection('title'); ?> Packages | Imperial Estate <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style type="text/css">
	.scrollable{
      overflow-y: auto;
      max-height: 150px;
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
					<div class="subtitle">OUR PACKAGES</div>
					<h2 class="title">Choose your ideal package</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
	<div class="row-fluid no-padd">
		<?php if(count($packages) > 0): ?>
		<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4 col-xs-12 no-padd">
			<div class="vc_column-inner ">
				<div class="prague-pricing-wrapper  featured_image">
					<div class="pricing-img-wrapp">
						<img class="s-img-switch" src="<?php echo e(url('public/uploads/package/'.$package->package_img)); ?>" alt="package image">
					</div>
					<div class="prague-pricing-content-wrapper">
						<div class="prague-pricing-subtitle">
						from </div>
						<h3 class="prague-pricing-price">
						<?php
							setlocale(LC_MONETARY, 'en_IN');
							$amount = App\Helpers\Helper::moneyFormatIndia($package->package_price);
						?>
						<i class="fa fa-rupee"></i> <?php echo e($amount); ?> </h3>
						<h3 class="prague-pricing-title">
						<?php echo e(ucwords($package->name)); ?> </h3>
						<div class="prague-pricing-description">
							<div class="scrollable">
								<?php $__currentLoopData = $package->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <?php if(isset($tag)): ?>
										<p><i class="fa fa-check text-success"></i> <?php echo e(ucwords($tag->name)); ?></p>
									<?php endif; ?>
	                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
						</div>
						<a class="prague-pricing-link a-btn-arrow-2" href="<?php echo e(route('packages-details',$package->slug)); ?>" target="_blank">
							<span class="arrow-right"></span>
						Request Quote </a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/package/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?> Facilities | Imperial Estate <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

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
					<div class="subtitle">FACILITIES AT IMPERIAL</div>
					<h2 class="title"> A symbol of contemporary art & luxury </h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>
</div>

<div class="margin-lg-20t margin-sm-30t">
	<div class="container">
		<div class="row">
			<div class="no-padd-left no-padd-right margin-lg-20t">
				<div class="wrapper">
					<div data-unique-key="139714cb2b9c35c987d2544328454258" class="js-load-more" data-start-page="1" data-max-page="5" data-next-link="http://prague.loc/page/2/">
						<div class="row prague_list prague_count_col1 prague_gap_col10  no-footer-content no-figure prague-load-wrapper" data-columns="prague_count_col1" data-gap="prague_gap_col10">
							
							<?php $i=1 ?>
							<?php if(count($facilities)>0): ?>
								<?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($i%2): ?>
									<div class="project-list-item">
										<div class="project-list-outer">
											<div class="project-list-wrapper">
												<div class="project-list-img">
													<img src="#" data-lazy-src="<?php echo e(url('public/uploads/facility/cover/'.$facility->facility_cover_img)); ?>" class="s-img-switch" alt="<?php echo e(ucwords($facility->title)); ?>" />
												</div>
												<div class="project-list-content">
													
													<h3 class="project-list-title"><a href="#" target="_self"><?php echo e(ucwords($facility->title)); ?></a></h3>
													<div class="project-list-excerpt text-justify">
														<p><?php echo $facility->details; ?></p>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									<?php else: ?>
									<div class="project-list-item  column_paralax">
										<div class="project-list-outer">
											<div class="project-list-wrapper">
												<div class="project-list-img">
													<img src="#" data-lazy-src="<?php echo e(url('public/uploads/facility/cover/'.$facility->facility_cover_img)); ?>" class="s-img-switch" alt="<?php echo e(ucwords($facility->title)); ?>" />
												</div>
												<div class="project-list-content">
													
													<h3 class="project-list-title"><a href="#" target="_self"><?php echo e(ucwords($facility->title)); ?></a></h3>
													<div class="project-list-excerpt text-justify">
														<p><?php echo $facility->details; ?></p>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
								<?php $i++ ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/facility/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?> Gallery | Imperial Estate <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style type="text/css">
.body-content.gallery {
    columns: 4;
    column-gap: 15px;
    width: 100%;
    margin: 0 auto;
    padding: 15px;
    margin-bottom: 70px;
}

.box-content {
  	z-index: -1;
    width: 100%;
    /*position: relative;*/
    overflow: hidden;
    break-inside: avoid;
    background-color: #fff;
    border-radius: 5px;
    margin-bottom: 15px;
    box-shadow: 0 0 2px rgba(0, 0, 0, .3);
}

.box-content .image {
    width: 100%;
    position: relative;
}

.box-content .image img {
    max-width: 100%;
}

.box-content .title {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    text-transform: capitalize;
    align-items: center;
}

.box-content .image:before {
    content: "";
    /*position: absolute;*/
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    /*background-color: rgba(0, 0, 0, 0.20);*/
    display: none;
}

.box-content .image:hover::before {
    display: block;
    cursor: pointer;
}

.box-content .title a {
    color: #38443d;
}
.top-banner.dark .top-banner-cursor {
    cursor: url(public/assets/img/cursor-dark.png),auto;
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
					<div class="subtitle">OUR GALLERY</div>
					<h2 class="title">An “Imperial” reflection of contemporary architecture</h2>
				</div>
				<div class="top-banner-cursor"></div>
			</div>
		</div>
	</div>

	<div class="row-fluid ">
		<div class="col-md-12 margin-lg-105b margin-sm-65b">

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#all">All</a></li>
				<?php $__currentLoopData = $g_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <li class=""><a data-toggle="tab" href="#<?php echo e($g_cat->slug); ?>"><?php echo e(ucwords($g_cat->name)); ?></a></li>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>

			 <div class="tab-content">
			 	<div id="all" class="tab-pane fade in active">
			 	
			      <div class="row-fluid">
					<div class="content">
						<div class="head-content"></div>
						<div class="body-content gallery">
							<?php if(count($gallery_imgss)>0): ?>
							<?php $__currentLoopData = $gallery_imgss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
							<?php $__currentLoopData = $gallery_img->g_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="box-content">
								<div class="image popup">
									<a class="" href="<?php echo e(url('public/uploads/gallery_img/'.$g_img->g_img)); ?>">
										<img title="<?php echo e(ucwords($g_img->caption)); ?>" src="<?php echo e(url('public/uploads/gallery_img/'.$g_img->g_img)); ?>" alt="gallery images">
									</a>
								</div>
							</div>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  			<?php endif; ?>
						</div>
					</div>
				  </div>
			    </div>


		       <?php $__currentLoopData = $g_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <div id="<?php echo e($g_cat->slug); ?>" class="tab-pane fade in">

			      <div class="row-fluid">
					<div class="content">
						<div class="head-content"></div>
						<div class="body-content gallery">	
							
							<?php $__currentLoopData = $g_cat->gallery_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            				<?php $__currentLoopData = $img->g_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="box-content">
										<div class="image popup">
											<a class="" href="<?php echo e(url('public/uploads/gallery_img/'.$image->g_img)); ?>"  title="<?php echo e(ucwords($img->caption)); ?>">
												<img title="<?php echo e(ucwords($img->caption)); ?>" src="<?php echo e(url('public/uploads/gallery_img/'.$image->g_img)); ?>" alt="gallery images">
												
											</a>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div>
					</div>
				  </div>

			    </div>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/gallery/index.blade.php ENDPATH**/ ?>
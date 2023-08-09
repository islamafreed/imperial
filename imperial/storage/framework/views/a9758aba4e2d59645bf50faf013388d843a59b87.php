<?php $__env->startSection('title'); ?> Home | Imperial Estate <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style type="text/css">
.project-detail-parallax-item .detail-parallax-item-bg {
    display: block!important;
}
.margin-lg-35b {
	margin-bottom: 35px;
}
.project-detail-parallax-item {
    pointer-events: auto!important;
}
.top-banner.light .content .title1{
    text-transform: uppercase!important;
    font-family: 'Poppins', sans-serif!important;
    letter-spacing: 3px!important;
}
.mb_10 {
	margin-bottom: 10px;
}
textarea {
  resize: none;
}

.showcase {
    display: block;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: #f5f5f5;
    border: solid 0px !important;
    
}

.fit-image {
    height: 250px !important;
    border: solid 1px #ddd !important;
    padding: 1em !important;
    /*background: #EFEFEF;*/
}

.fit-image img {
    position: relative;
    max-width: 100%;
    object-fit: contain !important;
    width: 100% !important;
    height: 100% !important;
}
.carousel-inner, .item {
    height: auto !important;
}
.Zebra_DatePicker_Icon_Wrapper {
	width: 100%!important;
}
.detail-parallax-text-item .detail-parallax-item-left {
	width: 486px!important;
}

.owl-carousel .owl-item .banner_logo {
    display: inline-block;
    width: 100%;
}
video {
  width: 100%;
  height: auto;
}

.hero.owl-dots {
    text-align: center !important;
    margin-top: -39px;
    z-index: 9999;
    position: relative;
}
/*.testimonials-wrapper .testimonials-item {
	background: #ff7e5f;  
	background: -webkit-linear-gradient(to right, #feb47b, #ff7e5f);  
	background: linear-gradient(to right, #feb47b, #ff7e5f); 

}
.testimonials-wrapper .testimonials-swiper .swiper-wrapper {
   background: #ff7e5f;  
   background: -webkit-linear-gradient(to right, #feb47b, #ff7e5f);  
   background: linear-gradient(to right, #feb47b, #ff7e5f); 
}*/


</style>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('meta_property'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>



<div class="row">
	<div class="col-xs-12 no-padd">
		<div class="owl-carousel owl-theme hero" id="hero">
		
			<div class="container-fluid top-banner hero_banner big  light item">
			<img src="<?php echo e(asset('public/assets/img/banner_5-min.jpg')); ?>" class="s-img-switch"  alt="top-banner image" />
			<div class="content">
				<div class="row">
					<div class="col-md-7">
						<img src="<?php echo e(asset('public/assets/img/banner_logo1.png')); ?>" class="banner_logo" alt="Banner Logo">
						<h1 class="title1"> Redefining Grand Occasions </h1>
						<div class="description">
							
						</div>
						<a href="<?php echo e(route('packages')); ?>" class="a-btn creative" target=" _blank">
						<span class="a-btn-line"></span>Our Packages</a>
					</div>
					<div class="col-md-5 detail-parallax-text-item">
						<div class="detail-parallax-item-right ">
							<h6 class="detail-parallax-item-right-subtitle">
							Your Dream Wedding at The Best Banquet in Guwahati</h6>
							<p>Get Instant Quote for Your Wedding or Event</p>
							<div class="row">
								<div class="col-md-12">
									<form action="<?php echo e(route('lead.post')); ?>" enctype="multipart/form-data" method="post">
										<?php echo csrf_field(); ?>

										<?php if($errors->any()): ?>
								          <div class="alert alert-danger alert-dismissible">
								              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
								              <ul>
								                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								                      <li><?php echo e($error); ?></li>
								                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								              </ul>
								          </div>
								        <?php endif; ?>
										
										<div class="row">
											<div class="col-md-12 col-sm-12 mb_10">
												<input type="text" id="name" class="form-control my_style_input" name="name" value="" placeholder="Name"  required />
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12 mb_10">
												<input type="text" id="phone_no" class="form-control my_style_input" name="phone_no" value="" placeholder="Phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
											</div>
										</div>
										
										<div class="frm_submit">
											<button class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 btn-block creative">
											<span class="a-btn-line"></span>CHECK PRICES FOR FREE </button>
										</div>
											
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="container-fluid top-banner hero_banner big  light item">
			<img src="<?php echo e(asset('public/assets/img/banner_10-min.jpg')); ?>" class="s-img-switch"  alt="top-banner image" />
			<div class="content">
				<div class="row">
					<div class="col-md-7">
						<img src="<?php echo e(asset('public/assets/img/banner_logo1.png')); ?>" class="banner_logo" alt="Banner Logo">
						<h1 class="title1"> Spacious & Luxurious </h1>
						<div class="description">
							
						</div>
						<a href="<?php echo e(route('contact-us')); ?>" class="a-btn creative" target=" _blank">
						<span class="a-btn-line"></span>Contact Us</a>
					</div>
					<div class="col-md-5 detail-parallax-text-item">
						<div class="detail-parallax-item-right ">
							<h6 class="detail-parallax-item-right-subtitle">
							Your Dream Wedding at The Best Banquet in Guwahati</h6>
							<p>Get Instant Quote for Your Wedding or Event</p>
							<div class="row">
								<div class="col-md-12">
									<form action="<?php echo e(route('lead.post')); ?>" enctype="multipart/form-data" method="post">
										<?php echo csrf_field(); ?>

										<?php if($errors->any()): ?>
								          <div class="alert alert-danger alert-dismissible">
								              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
								              <ul>
								                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								                      <li><?php echo e($error); ?></li>
								                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								              </ul>
								          </div>
								        <?php endif; ?>
										
										<div class="row">
											<div class="col-md-12 col-sm-12 mb_10">
												<input type="text" id="name" class="form-control my_style_input" name="name" value="" placeholder="Name"  required />
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12 mb_10">
												<input type="text" id="phone_no" class="form-control my_style_input" name="phone_no" value="" placeholder="Phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
											</div>
										</div>
										
										<div class="frm_submit">
											<button class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 btn-block creative">
											<span class="a-btn-line"></span>CHECK PRICES FOR FREE </button>
										</div>
											
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="container-fluid top-banner hero_banner big  light item">
			<img src="<?php echo e(asset('public/assets/img/banner_6-min.jpg')); ?>" class="s-img-switch"  alt="top-banner image" />
			<div class="content">
				<div class="row">
					<div class="col-md-7">
						<img src="<?php echo e(asset('public/assets/img/banner_logo1.png')); ?>" class="banner_logo" alt="Banner Logo">
						<h1 class="title1"> Suits - Celebrations - Events </h1>
						<div class="description">
							
						</div>
						<a href="<?php echo e(route('facilities')); ?>" class="a-btn creative" target=" _blank">
						<span class="a-btn-line "></span>EXPLORE IT</a>
					</div>
					<div class="col-md-5 detail-parallax-text-item">
						<div class="detail-parallax-item-right ">
							<h6 class="detail-parallax-item-right-subtitle">
							Your Dream Wedding at The Best Banquet in Guwahati</h6>
							<p>Get Instant Quote for Your Wedding or Event</p>
							<div class="row">
								<div class="col-md-12">
									<form action="<?php echo e(route('lead.post')); ?>" enctype="multipart/form-data" method="post">
										<?php echo csrf_field(); ?>

										<?php if($errors->any()): ?>
								          <div class="alert alert-danger alert-dismissible">
								              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
								              <ul>
								                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								                      <li><?php echo e($error); ?></li>
								                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								              </ul>
								          </div>
								        <?php endif; ?>
										
										<div class="row">
											<div class="col-md-12 col-sm-12 mb_10">
												<input type="text" id="name" class="form-control my_style_input" name="name" value="" placeholder="Name"  required />
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12 mb_10">
												<input type="text" id="phone_no" class="form-control my_style_input" name="phone_no" value="" placeholder="Phone no" maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9 -]/g,'')" required />
											</div>
										</div>
										
										<div class="frm_submit">
											<button class="margin-lg-20t margin-md-20t a-btn-2 btn-block creative">
											<span class="a-btn-line"></span>CHECK PRICES FOR FREE </button>
										</div>
											
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<div class="container">
	<div class="row-fluid">
		<div class=" no-padd col-sm-12 col-lg-6 col-md-6 col-xs-12 margin-lg-65b margin-lg-65t">
			<div class="no-padd-md">
				<div class="prague-counter  multi_item no-figure">
					<div class="counter-outer" style="padding:10px;">
	                      <video width="450" controls crossorigin playsinline
				            poster="<?php echo e(asset('public/assets/img/thumbnail.jpeg')); ?>">
				           		<source src="<?php echo e(asset('public/assets/img/Teaser.mp4')); ?>" type="video/mp4"/>
				          </video>
				    </div>
				</div>
			</div>
		</div>
		<div class="no-padd col-sm-12 col-lg-6 col-md-6 col-xs-12 ">
			<div class="no-padd-md">
				<div class="heading  left dark">
					<h2 class="title"> About Us </h2>
					<div class="content text-justify">
						<p>Every special occasion deserves a grand location. Imperial Estate serves the perfect choice for your next event in Guwahati. It is a multipurpose venue built luxuriously to host grand weddings, cocktail parties, corporate events, birthday celebrations and more. We are known to bring dream occasions to life with our finest arrangements including premium decor, delicious food and of course, an impeccable 6000 sq. ft pillar-less banquet hall that leads to a sprawling 18000 sq. ft open lawn area. At Imperial Estate, we make sure that memories from your events stay with you forever.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="bg_light">
	<div class="container">
		<div class="row-fluid no-padd margin-lg-65t margin-sm-50t">
			<div class="col-md-12 margin-lg-15b">
					<h3 class="title"> Our Packages</h3>
			</div>
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
								$amount = App\Helpers\Helper::moneyFormatIndia('%!i', $package->package_price);
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
</div>

<div class="container">
	<div class="row">
		<div class="column colum-container col-sm-12 no-padd margin-lg-20b">
			<div class="heading  left dark">
				<div class="subtitle "> OUR GALLERY </div>
				<h2 class="title">An “Imperial” reflection of contemporary architecture</h2>
			</div>
		</div>
	</div>
	<div id="g_imgs" class="owl-carousel owl-theme">

        <?php if(isset($gallery_imgs)): ?>
		<?php $__currentLoopData = $gallery_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $gallery_img->g_img->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item ">
            <div class="showcase fit-image popup">
                <a href="<?php echo e(url('public/uploads/gallery_img/'.$g_img->g_img)); ?>"><img src="<?php echo e(url('public/uploads/gallery_img/'.$g_img->g_img)); ?>" alt="" class="img-responsive"></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>

    </div>
    <div class="row-fluid">
		<div class="col-md-12 ">
			<div class="text-center">
				<a href="<?php echo e(route('gallery')); ?>" class="margin-lg-20t margin-md-20t margin-sm-30t a-btn-2 creative">
				<span class="a-btn-line"></span> View More </a>
			</div>
		</div>
	</div>
</div>

<div class="heading left dark container margin-lg-20t margin-sm-30t">
	<div class="subtitle ">TESTIMONIALS</div>
	<h2 class="title">They love us.</h2>
</div>
<div class="container">
	<div class="row  row-fluid margin-lg-10t margin-lg-145b margin-sm-70b">
		<div class="testimonials-wrapper  no-figure">
			<div class="testimonials-swiper swiper-container" data-speed='2000' data-loop='1' data-autoplay='3000' data-center='0' data-mode='vertical' data-slides-per-view='1' data-lg-slides='1,0' data-md-slides='1,0' data-sm-slides='1,0' data-xs-slides='1,0'>

				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>I celebrated my birthday this Jan with 200 guests. The process of executing the decor, menu and music was smooth. I didn’t have to lift a finger! To my advantage, the service was taken care of with the whites and food that I love the most.</p>
							</blockquote>
							<h4 class="testimonials-author">Prija Goswami</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>So a couple days ago attended the grand opening of the Imperial Estate, which is a banquet hall located at Nalapara Road, NH37, near Mercedes Showroom, Guwahati...and have to say, it was refined elegance and class at its best! </p>
							</blockquote>
							<h4 class="testimonials-author">Parthadeep D Bhuyan</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>A place Guwahati needed from the longest time. A perfect destination for all your events and special days. They have a wide indoor space followed by an outdoor seating which is huge. The property is everything you can think of when it comes to your big days. Definitely a hit! </p>
							</blockquote>
							<h4 class="testimonials-author">Salma Nasrin</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonials-item">
							<span class="testimonials-icon fa fa fa-quote-right"></span>
							<blockquote class="testimonials-description">
								<p>This place is ideal for exquisite events and celebrations with world class catering with various packages. The food was really too good.  The Imperial Villa is comfortable and elegant for exquisite events. With parking space for 500 cars and is an ideal place for all events.</p>
							</blockquote>
							<h4 class="testimonials-author">Goodfood Ghy</h4>
						</div>
					</div>
				</div>

				<div class="testimonials-pagination-wrapper">
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script type="text/javascript" src="<?php echo e(asset('public/assets/js/lightbox.js')); ?>"></script>

<script type="text/javascript">
	
    // $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    //     event.preventDefault();
    //     $(this).ekkoLightbox({
    //       alwaysShowClose: true,
    //       showArrows: true
    //     })
    // });

    $("#g_imgs").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        navigation : false, // Show next and prev buttons
      	slideSpeed : 1000,
      	paginationSpeed : 800,
      	pagination: true,
      	singleItem:true,
      	autoplay:true,
	  	autoplayTimeout:10000,
	  	autoplayHoverPause:true,
 	  	
      	itemsDesktop : true,
      	itemsDesktopSmall : true,
      	itemsTablet: true,
      	itemsMobile : true,
      	responsiveClass: true,
        responsive: {
            991: {
                items: 3,
            },
            767: {
                items: 2,
            },
            320: {
                items: 1,
            },
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/home/index.blade.php ENDPATH**/ ?>
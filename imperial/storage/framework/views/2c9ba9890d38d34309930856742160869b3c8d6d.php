<?php $__env->startSection('title'); ?> Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


        <div class="block-header">
            <h2>Dashboard</h2>
        </div>

        <!-- Widgets -->
            <div class="row clearfix">
                
                <a href="" style="cursor:pointer!important;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">perm_media</i>
                            </div>
                            <div class="content">
                                <div class="text">Gallery</div>
                                <div class="number count-to" data-from="0" data-to="<?php echo e($g_img_count); ?>" data-speed="1" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="" style="cursor:pointer!important;">
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">widgets</i>
                            </div>
                            <div class="content">
                                <div class="text">Blogs</div>
                                <div class="number count-to" data-from="0" data-to="<?php echo e($blog_count); ?>" data-speed="1" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="" style="cursor:pointer!important;">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">card_giftcard</i>
                            </div>
                            <div class="content">
                                <div class="text">Package</div>
                                <div class="number count-to" data-from="0" data-to="<?php echo e($package_count); ?>" data-speed="1" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <!-- #END# Widgets -->
    

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>
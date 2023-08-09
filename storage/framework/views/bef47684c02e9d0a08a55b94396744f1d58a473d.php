<?php $__env->startSection('title'); ?>  Get Quote Details <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style type="text/css">
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <a href="<?php echo e(url()->previous()); ?>" class="btn bg-blue-grey waves-effect"> <i class="fa fa-arrow-left"></i> Back</a> 

        <div class="card">
            <div class="header bg-cyan">
                <h2>
                     Get Quote <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>

                            <?php if($get_quote->ocation_id): ?>
                            <tr>
                                <th scope="row" style="width: 18%;"> Occassion </th>
                                <td>
                                    <?php echo e(ucwords($get_quote->ocation->name)); ?>

                                </td>
                            </tr>
                            <?php endif; ?>

                            <?php if($get_quote->preferance_id): ?>
                            <tr>
                                <th scope="row" style="width: 18%;"> Preference </th>
                                <td>
                                    <?php echo e(ucwords($get_quote->preference->name)); ?>

                                </td>
                            </tr>
                            <?php endif; ?>

                            <?php if($get_quote->add_preferance_id): ?>
                            <tr>
                                <th scope="row" style="width: 18%;"> Add'l preference </th>
                                <td>
                                    <?php echo e(ucwords($get_quote->add_preference->name)); ?>

                                </td>
                            </tr>
                            <?php endif; ?>

                            <tr>
                                <th scope="row" style="width: 18%;"> Preferred Date </th>
                                <td>
                                    <?php echo e(date('d-M, Y', strtotime($get_quote->req_date))); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Estimated Guest </th>
                                <td>
                                    <?php echo e($get_quote->estimated_guest); ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row" style="width: 18%;"> Name </th>
                                <td>
                                    <?php echo e(ucwords($get_quote->name)); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Email </th>
                                <td>
                                    <?php echo e($get_quote->email); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Phone no </th>
                                <td>
                                    <?php echo e($get_quote->phone_no); ?>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/get_quote/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>  Booking Details <?php $__env->stopSection(); ?>

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
                     Booking <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>

                            <tr>
                                <th scope="row" style="width: 18%;"> Preferred Date </th>
                                <td>
                                    <?php echo e(date('d-M, Y', strtotime($booking->booking_date))); ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row" style="width: 18%;"> Name </th>
                                <td>
                                    <?php echo e(ucwords($booking->name)); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Email </th>
                                <td>
                                    <?php echo e($booking->email); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Phone no </th>
                                <td>
                                    <?php echo e($booking->phone_no); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">  Message </th>
                                <td>
                                    <?php echo $booking->message; ?>

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
<?php echo $__env->make('admin_layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/booking/show.blade.php ENDPATH**/ ?>
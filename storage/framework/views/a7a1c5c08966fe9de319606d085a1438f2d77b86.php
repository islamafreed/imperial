<?php $__env->startSection('title'); ?> Booked Date Details <?php $__env->stopSection(); ?>

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
                    Booked Date <small> Details</small>
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <th scope="row" style="width: 18%;">Booked for (Person's Name) </th>
                                <td>
                                    <?php echo e(ucwords($booked_date->name)); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Booked for (Person's Email) </th>
                                <td>
                                    <?php echo e($booked_date->email); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Booked for (Person's Phone no) </th>
                                <td>
                                    <?php echo e($booked_date->phone_no); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;"> Booked Date </th>
                                <td>
                                    <?php echo e(date('d-M, Y', strtotime($booked_date->booked_date))); ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="width: 18%;">Booked Date Remarks </th>
                                <td><?php echo $booked_date->remarks; ?></td>
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
<?php echo $__env->make('admin_layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/check_date_availability/booked_date/show.blade.php ENDPATH**/ ?>
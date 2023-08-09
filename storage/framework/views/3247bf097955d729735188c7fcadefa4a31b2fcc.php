<?php $__env->startSection('title'); ?> Get Quote <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Basic Examples -->
<div class="row clearfix">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
       <div class="header">
          <h2>
             Get Quote
          </h2>
          
       </div>
       <div class="body">
          <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone no</th>
                      <th>Preferred Date</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tfoot>
                   <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone no</th>
                      <th>Preferred Date</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                   <?php  $i=1 ?>
                   <?php $__currentLoopData = $get_quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                      <td><?php echo e($i); ?></td>
                      <td>
                         <?php echo e(ucwords($booking->name)); ?>

                      </td>
                      <td>
                         <?php echo e($booking->email); ?>

                      </td>
                      <td>
                         <?php echo e($booking->phone_no); ?>

                      </td>
                      <td>
                      	<?php echo e(date('d-M, Y', strtotime($booking->req_date))); ?>

                      </td>
                      <td>
                      	<div class="btn-group">
 
                            <a href="<?php echo e(route('admin.show-get-quote',Crypt::encrypt($booking->id))); ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>
     
                         </div>
                      </td>
                   </tr>
                   <?php $i++ ?>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- #END# Basic Examples -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/get_quote/index.blade.php ENDPATH**/ ?>
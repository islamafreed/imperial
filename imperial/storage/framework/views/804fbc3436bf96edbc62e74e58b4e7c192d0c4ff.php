<?php $__env->startSection('title'); ?> Facilities <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style type="text/css">
    .bg_res_img {
        height: 100px;
        width: 140px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Basic Examples -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Facilities
                  </h2>
                  <ul class="header-dropdown m-r--5">
                     <li>
                        <a href="<?php echo e(route('admin.add-facility-img')); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add new</a>
                     </li>
                  </ul>
               </div>
               <div class="body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Caption</th>
                              <th>Title</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Caption</th>
                              <th>Title</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           <?php  $i=1 ?>
                           <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($i); ?></td>
                              <td>
                              	<?php echo e(ucwords($facility->caption)); ?>

                              </td>
                              <td>
                                 <?php echo e(ucwords($facility->title)); ?>

                              </td>
                              <td>
                                 <div class="btn-group">

                                    <a href="<?php echo e(route('admin.edit-facility-img',Crypt::encrypt($facility->id))); ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

                                    <a href="<?php echo e(route('admin.show-facility-img',Crypt::encrypt($facility->id))); ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>

                                    <a href="<?php echo e(route('admin.delete-facility-img',Crypt::encrypt($facility->id))); ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></a>

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
<?php echo $__env->make('admin_layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/facility/index.blade.php ENDPATH**/ ?>
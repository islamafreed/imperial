<?php $__env->startSection('title'); ?> Packages <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Basic Examples -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Package
                  </h2>
                  <ul class="header-dropdown m-r--5">
                     <li>
                        <a href="<?php echo e(route('admin.add-package')); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add new</a>
                     </li>
                  </ul>
               </div>
               <div class="body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Package Name</th>
                              <th>Package price</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Package Name</th>
                              <th>Package price</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           <?php  $i=1 ?>
                           <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($i); ?></td>
                              <td>
                                 <?php echo e(ucwords($package->name)); ?>

                              </td>
                              <td>
                                 <?php echo e(ucwords($package->package_price)); ?>

                              </td>
                              <td>
                                 <div class="btn-group">

                                    <a href="<?php echo e(route('admin.edit-package',Crypt::encrypt($package->id))); ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

                                    <a href="<?php echo e(route('admin.show-package',Crypt::encrypt($package->id))); ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>

                                    <a href="<?php echo e(route('admin.delete-package',Crypt::encrypt($package->id))); ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></a>

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
<?php echo $__env->make('admin_layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/package/index.blade.php ENDPATH**/ ?>
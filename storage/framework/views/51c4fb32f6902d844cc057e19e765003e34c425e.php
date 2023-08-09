<?php $__env->startSection('title'); ?> Gallery Image <?php $__env->stopSection(); ?>

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
                     Gallery Image
                  </h2>
                  <ul class="header-dropdown m-r--5">
                     <li>
                        <a href="<?php echo e(route('admin.add-gallery-img')); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add new</a>
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
                              <th>Category</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Caption</th>
                              <th>Category</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           <?php  $i=1 ?>
                           <?php $__currentLoopData = $gallery_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($i); ?></td>
                              <td>
                              	<?php echo e(ucwords($gallery_img->caption)); ?>

                              </td>
                              <td>
                                 <?php echo e(ucwords($gallery_img->gallery_cat->name)); ?>

                              </td>
                              <td>
                                 <div class="btn-group">

                                    <a href="<?php echo e(route('admin.edit-gallery-img',Crypt::encrypt($gallery_img->id))); ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

                                    <a href="<?php echo e(route('admin.show-gallery-img',Crypt::encrypt($gallery_img->id))); ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Details"><i class="fa fa-eye"></i></a>

                                    <a href="<?php echo e(route('admin.delete-gallery-img',Crypt::encrypt($gallery_img->id))); ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></a>

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
<?php echo $__env->make('admin_layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\imperial\resources\views/admin/gallery/index.blade.php ENDPATH**/ ?>
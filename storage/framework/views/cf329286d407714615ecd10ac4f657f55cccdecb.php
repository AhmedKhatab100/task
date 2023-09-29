


<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Product</h4>
                  <hr>
                  <form class="forms-sample" action="<?php echo e(route('products.update',$product->id)); ?>" method="PUT">
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?php echo e($product->name); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Detalis</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="details" value="<?php echo e($product->details); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Price</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" name="price" value="<?php echo e($product->price); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Product</button>
                  </form>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/product/edit.blade.php ENDPATH**/ ?>
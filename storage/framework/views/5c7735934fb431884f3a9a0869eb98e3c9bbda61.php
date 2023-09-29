


<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Product</h4>
                  <p class="card-description">
                    please enter information below
                  </p>
                  <hr>
                  <form class="forms-sample" action="<?php echo e(route('products.store')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Details</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="details">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Price</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="price">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Add Product</button>
               
                  </form>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/product/add.blade.php ENDPATH**/ ?>
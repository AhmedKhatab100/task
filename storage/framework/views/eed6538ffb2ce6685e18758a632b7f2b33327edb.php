


<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Customer</h4>
                  <hr>
                  <form class="forms-sample" action="<?php echo e(route('customer.update',$customer->id)); ?>" method="PUT">
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                      <label for="exampleInputName1">Company</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="company" value="<?php echo e($customer->company); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Contact Person</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="contact" value="<?php echo e($customer->contact); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="<?php echo e($customer->email); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="phone" value="<?php echo e($customer->phone); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Address</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="address" value="<?php echo e($customer->address); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="city" value="<?php echo e($customer->city); ?>"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">State</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="state" value="<?php echo e($customer->state); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Postal Code</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="postal" value="<?php echo e($customer->postal); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Country</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="country" value="<?php echo e($customer->country); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Customer</button>
               
                  </form>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/customer/edit.blade.php ENDPATH**/ ?>
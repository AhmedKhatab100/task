

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Company</h4>
                  <form class="forms-sample" action="<?php echo e(route('companies.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Web Site</label>
                      <input type="text" class="form-control" name="website" placeholder="Web Site">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Logo</label>
                      <input type="file" class="form-control" name="logo">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/companies/add.blade.php ENDPATH**/ ?>
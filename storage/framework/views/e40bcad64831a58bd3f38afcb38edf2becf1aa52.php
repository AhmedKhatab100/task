<?php $__env->startSection('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
			  <div style="margin-left: 85%">        
        		<a href="<?php echo e(route('companies.create')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i><h7> Add Brand </h7></a>
   				 </div>
                <div class="card-body">
                  <h4 class="card-title">Companies Table</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Logo</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Web Site</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td class="py-1">
                            <img src=""/>
                          </td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/Dashboard/companies/index.blade.php ENDPATH**/ ?>
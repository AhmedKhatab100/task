

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

<section class="content-header">

    <h1><?php echo app('translator')->get('site.users'); ?></h1>

    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li><a href=""> <?php echo app('translator')->get('site.users'); ?></a></li>
    </ol>
</section>


    <div class="box box-primary">

        <div class="box-header">

            <h3 class="box-title" style="margin-bottom: 15px"><?php echo app('translator')->get('site.users'); ?></h3>
            <form action="" method="get">

<div class="row">

    <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('site.search'); ?>" value="<?php echo e(request()->search); ?>">
    </div>

    <div class="col-md-4">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo app('translator')->get('site.search'); ?></button>
        
            <a href="<?php echo e(Route('users.create')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo app('translator')->get('site.add'); ?></a>
        
        
    </div>

</div>
</form><!-- end of form -->
             
        </div><!-- end of box-header-->

        <div class="box-body">
            <?php if($users->count() > 0): ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo app('translator')->get('site.name'); ?></th>
                        <th><?php echo app('translator')->get('site.email'); ?></th>
                        <th><?php echo app('translator')->get('site.photo'); ?></th>
                        <th><?php echo app('translator')->get('site.action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                               <td><?php echo e($index + 1); ?></td>
                               <td><?php echo e($user->name); ?></td>
                               <td><?php echo e($user->email); ?></td>
                               <td><img  style="width: 90px; height: 90px;" src="<?php echo e(asset('images/admins/'.$user->photo)); ?>"></td>
                               <td><a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> <?php echo app('translator')->get('site.edit'); ?></a>
                                    <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="post" style="display: inline-block">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('delete')); ?>

                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> <?php echo app('translator')->get('site.delete'); ?></button>
                                        </form>
                                </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php else: ?>
                        
                <h2><?php echo app('translator')->get('site.no_data_found'); ?></h2>
                        
            <?php endif; ?>
        </div><!-- end of box-body-->


    </div><!-- end of box box-primary -->

</div><!-- end of content wrapper -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>
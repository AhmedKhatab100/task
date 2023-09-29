

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

<section class="content-header">

    <h1><?php echo app('translator')->get('site.users'); ?></h1>

    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('index')); ?>"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li><a href="<?php echo e(route('users.index')); ?>"> <?php echo app('translator')->get('site.users'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.add'); ?></li>
    </ol>
</section>


<div class="box box-primary">

<div class="box-header">
    <h3 class="box-title"><?php echo app('translator')->get('site.add'); ?></h3>
</div><!-- end of box header -->

<div class="box-body">

    <?php echo $__env->make('partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('post')); ?>


        <div class="form-group">
            <label><?php echo app('translator')->get('site.name'); ?></label>
            <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
        </div>

        <div class="form-group">
            <label><?php echo app('translator')->get('site.email'); ?></label>
            <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
        </div>

        <div class="form-group">
            <label><?php echo app('translator')->get('site.password'); ?></label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label><?php echo app('translator')->get('site.password_confirmation'); ?></label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
        <label><?php echo app('translator')->get('site.photo'); ?></label>
                <input class="form-control" type="file" id="myFile" name="photo"
                data-validation="required" data-validation-required="required">
                </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo app('translator')->get('site.add'); ?></button>
        </div>

    </form><!-- end of form -->

</div><!-- end of box body -->

</div><!-- end of box -->
</div><!-- end of content wrapper -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/users/create.blade.php ENDPATH**/ ?>
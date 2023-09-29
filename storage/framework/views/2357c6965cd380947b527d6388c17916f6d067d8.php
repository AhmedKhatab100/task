<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href=""><i class="fa fa-th"></i><span><?php echo app('translator')->get('site.dashboard'); ?></span></a></li>
            

            <li><a href="<?php echo e(Route('users.index')); ?>"><i class="fa fa-th"></i><span><?php echo app('translator')->get('site.users'); ?></span></a></li>
            <li><a href="<?php echo e(Route('meals.index')); ?>"><i class="fa fa-th"></i><span><?php echo app('translator')->get('site.meals'); ?></span></a></li>

            



            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </ul>

    </section>

</aside><?php /**PATH C:\xampp\htdocs\pro\resources\views/layouts/dashboard/_aside.blade.php ENDPATH**/ ?>
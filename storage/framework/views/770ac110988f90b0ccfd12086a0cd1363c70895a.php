<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <div class="d-flex justify-content-between">
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
        </div>
        <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
    </div>
</div>
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        
        <li
            class="sidebar-item  ">
            <a href="/client" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
     
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-hexagon-fill"></i>
                <span>Form Elements</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="<?php echo e(route('input')); ?>">Report</a>
                </li>
                <li class="submenu-item ">
                    <a href="">Input Group</a>
                </li>
                
            </ul>
        </li>
        
        
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-x-octagon-fill"></i>
                <span>Logout</span>
            </a>
            <ul class="submenu ">
                <?php if(Auth::check()): ?>
                <?php if(Auth::user()->role == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(url('admin')); ?>">Halaman Admin</a>
                </li>
                <?php endif; ?>
           
                <?php if(Auth::user()->role == 'agent'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('agent')); ?>">Halaman agent</a>
                </li>
                <?php endif; ?>
                   
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('client')); ?>">Halaman client</a>
                </li>
        
                <?php endif; ?>

                <li>
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     <?php echo e(__('Logout')); ?>

                       
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
                
            </ul>
        </li>
        
    
    </ul>
</div><?php /**PATH D:\MAGANG\ticketing\resources\views/client/sidebar.blade.php ENDPATH**/ ?>
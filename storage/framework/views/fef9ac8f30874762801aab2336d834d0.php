<header class="header clearfix element_to_stick">
        <div class="container-fluid">
            <div id="logo">
                <a href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(asset('frontend/img/Kadava_logo.png')); ?>" width="140" alt="" class="logo_normal">
                    <img src="<?php echo e(asset('frontend/img/Kadava_logo_black.png')); ?>" width="120" alt="" class="logo_sticky">
                </a>
            </div>

            <!-- Top menu based on authentication status -->
            <?php if(auth()->guard()->guest()): ?>
                <ul id="top_menu">
                    <li><a href="<?php echo e(route('login')); ?>" class="btn_access">Log In</a></li>
                    <li><a href="<?php echo e(route('register')); ?>" class="btn_access green">Join Free</a></li>
                </ul>
            <?php else: ?>
                <ul id="top_menu" class="drop_user">
                    <li>
                        <div class="dropdown user clearfix">
                            <a href="#" data-bs-toggle="dropdown">
                                <figure><img src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset(Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.png')); ?><?php endif; ?>" alt=""></figure><?php echo e(Auth::user()->name); ?>

                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <ul>
                                        <?php if(Auth::user()->isAdmin()): ?>
                                            <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon_cog"></i>Dashboard</a></li>
                                        <?php else: ?>
                                            <li><a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon_cog"></i>Dashboard</a></li>
                                        <?php endif; ?>
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                <i class="icon_key"></i>Log out
                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->
                    </li>
                </ul>
            <?php endif; ?>
                <!-- /top_menu -->
                <a href="#0" class="open_close">
                    <i class="icon_menu"></i><span>Menu</span>
                </a>
                <nav class="main-menu">
                    <div id="header_menu">
                        <a href="#0" class="open_close">
                            <i class="icon_close"></i><span>Menu</span>
                        </a>
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('frontend/img/Kadava_logo.png')); ?>" width="155" height="" alt=""></a>
                    </div>
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('ad_search')); ?>">Product Search</a></li>
                        <li><a href="<?php echo e(route('pricing')); ?>">Pricing</a></li>
                    </ul>
                </nav>

        </div>
    </header>
<?php /**PATH C:\laragon\www\Kadava-New\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>
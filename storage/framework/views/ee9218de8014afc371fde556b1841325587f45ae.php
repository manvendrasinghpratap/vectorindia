<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                <div class="thumb">
				<?php echo e(Html::image('public/images/people/1.jpg', 'Profile Pic',array('class' => 'img-circle'))); ?></div>
                <div class="info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <ul class="list-inline list-unstyled">
                        <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                        <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a></li>
                       <li>
                            <a data-hover="tooltip" title="Logout" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>  </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </li>
            <li class=" <?php if((Request::segment(1)=='dashboard')): ?> active !!}<?php endif; ?>" >
                <a href="<?php echo e(url('/dashboard')); ?>">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class=" <?php if((Request::segment(1)=='skills') || (Request::segment(1)=='addmainskill') || (Request::segment(1)=='editmainskill') || (Request::segment(1)=='skills') || (Request::segment(1)=='subSkills')||(Request::segment(1)=='addSubskill') ||(Request::segment(1)=='products') ||(Request::segment(1)=='addProduct') ||(Request::segment(1)=='editProduct')): ?> active !!}<?php endif; ?>">
                <a href="#">
                    <i class="fa fa-user fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title"><?php echo e(trans('message.skills')); ?></span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo e(url('/skills')); ?>"><i class="fa fas fa-biohazard"></i><span class="submenu-title"><?php echo e(trans('message.mainskills')); ?></span></a></li>
                  <li><a href="<?php echo e(url('/subSkills')); ?>"><i class="fa fa-rocket"></i><span class="submenu-title"><?php echo e(trans('message.subskills')); ?></span></a></li>
                </ul>
            </li>
            <li class=" <?php if((Request::segment(1)=='employees') || (Request::segment(1)=='addemployee') || (Request::segment(1)=='editemployee') ): ?> active !!}<?php endif; ?>">
                <a href="#">
                    <i class="fa fa-user fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title"><?php echo e(trans('message.employees')); ?></span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo e(url('/employees')); ?>"><i class="fa fa-rocket"></i><span class="submenu-title"><?php echo e(trans('message.employees')); ?></span></a></li>
                </ul>
            </li>

            <li  class="<?php if(Route::current()->getName() == 'settings'): ?> active <?php endif; ?>" >
                <a href="#">
                    <i class="fa fa-user fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Settings</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo e(route('settings')); ?>"><i class="fa fa-rocket"></i><span class="submenu-title">Settings</span></a></li>
                    <li><a href="<?php echo e(route('address')); ?>"><i class="fa fa-rocket"></i><span class="submenu-title">Address</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\vectorindia\resources\views/admin/common/leftsidebar.blade.php ENDPATH**/ ?>
<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo e(asset('public/admin_assets/image/user.png')); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(ucwords(Auth::guard('admin')->user()->first_name.' '.Auth::guard('admin')->user()->middle_name.' '.Auth::guard('admin')->user()->last_name)); ?>

                    </div>
                    <div class="email"><?php echo e(Auth::guard('admin')->user()->email); ?></div>
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            
                            <li><a href="<?php echo e(route('admin.logout')); ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php echo e(request()->is('admin/dashboard')? 'active' : ''); ?><?php echo e(request()->is('admin/dashboard/*')? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="<?php echo e(request()->is('admin/change-password')? 'active' : ''); ?><?php echo e(request()->is('admin/change-password/*')? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.change-password')); ?>">
                            <i class="material-icons">lock_open</i>
                            <span>Change Password</span>
                        </a>
                    </li>

                  
                    
                    
                    <li class="<?php echo e(request()->is('admin/service')? 'active' : ''); ?><?php echo e(request()->is('admin/service/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">build</i>
                            <span>Service</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/service')? 'active' : ''); ?><?php echo e(request()->is('admin/service/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.service')); ?>">View All</a>
                            </li>

                            
                            
                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/gallery')? 'active' : ''); ?><?php echo e(request()->is('admin/gallery/*')? 'active' : ''); ?> || <?php echo e(request()->is('admin/gallery-category')? 'active' : ''); ?><?php echo e(request()->is('admin/gallery-category/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Gallery</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/gallery-category')? 'active' : ''); ?><?php echo e(request()->is('admin/gallery-category/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.gallery-category')); ?>">Gallery Category</a>
                            </li>

                            <li class="<?php echo e(request()->is('admin/gallery')? 'active' : ''); ?><?php echo e(request()->is('admin/gallery/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.gallery-img')); ?>">View All Images</a>
                            </li>
                            
                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/blog')? 'active' : ''); ?><?php echo e(request()->is('admin/blog/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Blogs</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/blog')? 'active' : ''); ?><?php echo e(request()->is('admin/blog/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.blog')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/package')? 'active' : ''); ?><?php echo e(request()->is('admin/package/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">redeem</i>
                            <span>Packages</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/package')? 'active' : ''); ?><?php echo e(request()->is('admin/package/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.package')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/facility')? 'active' : ''); ?><?php echo e(request()->is('admin/facility/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Facilities</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/facility')? 'active' : ''); ?><?php echo e(request()->is('admin/facility/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.facility-img')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/check-date-availability')? 'active' : ''); ?><?php echo e(request()->is('admin/check-date-availability/*')? 'active' : ''); ?> || <?php echo e(request()->is('admin/booked-date')? 'active' : ''); ?><?php echo e(request()->is('admin/booked-date/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">event_note</i>
                            <span>Check Date Availability</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/check-date-availability')? 'active' : ''); ?><?php echo e(request()->is('admin/check-date-availability/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.check-date-availability')); ?>">View All Request</a>
                            </li>

                            <li class="<?php echo e(request()->is('admin/booked-date')? 'active' : ''); ?><?php echo e(request()->is('admin/booked-date/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.add-booked-date')); ?>">Add Booked Date</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/get-quote')? 'active' : ''); ?><?php echo e(request()->is('admin/get-quote/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">source</i>
                            <span>Get Quote</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/get-quote')? 'active' : ''); ?><?php echo e(request()->is('admin/get-quote/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.get-quote')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/booking')? 'active' : ''); ?><?php echo e(request()->is('admin/booking/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">bookmark_added</i>
                            <span>Booking</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/booking')? 'active' : ''); ?><?php echo e(request()->is('admin/booking/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.booking')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/contact-us')? 'active' : ''); ?><?php echo e(request()->is('admin/contact-us/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">contact_phone</i>
                            <span>Contact Us</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/contact-us')? 'active' : ''); ?><?php echo e(request()->is('admin/contact-us/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.contact-us')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

                    
                    <li class="<?php echo e(request()->is('admin/lead')? 'active' : ''); ?><?php echo e(request()->is('admin/lead/*')? 'active' : ''); ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">contact_phone</i>
                            <span>Leads</span>
                        </a>
                        <ul class="ml-menu">

                            <li class="<?php echo e(request()->is('admin/lead')? 'active' : ''); ?><?php echo e(request()->is('admin/lead/*')? 'active' : ''); ?>">
                                <a href="<?php echo e(route('admin.lead')); ?>">View All</a>
                            </li>

                        </ul>
                    </li>
                    

   
                    <li class="">
                        <a href="<?php echo e(route('admin.logout')); ?>">
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
                        </a>
                    </li>

                 </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo e(date('Y')); ?> <a href="javascript:void(0);">Imperial Estate</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>
<?php /**PATH E:\laragon\www\imperial\resources\views/admin_layouts/menu.blade.php ENDPATH**/ ?>
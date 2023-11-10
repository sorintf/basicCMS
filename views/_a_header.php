

    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="#" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="/admin_files/assets/images/logo-dark.svg" />
                    <span class="badge bg-light-success rounded-pill ms-2 theme-version"><?php echo $adminFunctions->version; ?></span>
                </a>
            </div>

            <div class="navbar-content">
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/admin_files/assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                            </div>

                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0"><?php echo $adminFunctions->firstname_user.' '.$adminFunctions->lastname_user; ?></h6>
                                <small><?php echo $adminFunctions->admin_status; ?></small>
                            </div>
                            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-sort-outline"></use>
                                </svg>
                            </a>
                        </div>

                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                            <div class="pt-3">
                                <a href="<?php echo $adminFunctions->buildUrl(array('view'=>'b_acc_general')); ?>">
                                    <i class="ti ti-user"></i>
                                    <span>My Account</span>
                                </a>

                                <a href="<?php echo $adminFunctions->buildUrl(array('view'=>"b_acc_security")); ?>">
                                    <i class="ti ti-lock"></i>
                                    <span>Security</span>
                                </a>

                                <a href="<?php echo $adminFunctions->buildUrl(array('view'=>"b_acc_communication")); ?>">
                                    <i class="ti ti-mail-forward"></i>
                                    <span>Communication</span>
                                </a>

                                <a href="<?php echo $adminFunctions->buildUrl(array('view'=>"b_acc_logout")); ?>">
                                    <i class="ti ti-power"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Utilizatori</label>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-status-up"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Lista</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>

                        <ul class="pc-submenu">
                            <li class="pc-item">
                                <a class="pc-link" href="../dashboard/index.html">
                                    <span class="pc-mtext">Toti utilizatorii</span>
                                    <span class="pc-badge"><?php echo $adminFunctions->rep['users']['nr']['total']; ?></span>
                                </a>
                            </li>
                            
                            <?php if ($adminFunctions->rep['users']['nr']['pending_approval']>0): ?>
                                <li class="pc-item">
                                    <a class="pc-link" href="../dashboard/analytics.html">
                                        <span class="pc-mtext">De aprobat</span>
                                        <span class="pc-badge"><?php echo $adminFunctions->rep['users']['nr']['pending_approval']; ?></span>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if ($adminFunctions->rep['users']['nr']['pending_confirmation']>0): ?>
                                <li class="pc-item">
                                    <a class="pc-link" href="../dashboard/analytics.html">
                                        <span class="pc-mtext">De confirmat email</span>
                                        <span class="pc-badge"><?php echo $adminFunctions->rep['users']['nr']['pending_confirmation']; ?></span>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if ($adminFunctions->rep['users']['nr']['pending_deletion']>0): ?>
                                <li class="pc-item">
                                    <a class="pc-link" href="../dashboard/analytics.html">
                                        <span class="pc-mtext">In curs de stergere</span>
                                        <span class="pc-badge"><?php echo $adminFunctions->rep['users']['nr']['pending_deletion']; ?></span>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if ($adminFunctions->rep['users']['nr']['blocked']>0): ?>
                                <li class="pc-item">
                                    <a class="pc-link" href="../dashboard/analytics.html">
                                        <span class="pc-mtext">Blocat</span>
                                        <span class="pc-badge"><?php echo $adminFunctions->rep['users']['nr']['blocked']; ?></span>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </li>



                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-status-up"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            <span class="pc-badge">2</span>
                        </a>

                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../dashboard/index.html">Default</a></li>
                            <li class="pc-item"><a class="pc-link" href="../dashboard/analytics.html">Analytics</a></li>
                        </ul>
                    </li>

                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-document"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Layouts</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>

                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../demo/layout-vertical.html">Vertical</a></li>
                            <li class="pc-item"><a class="pc-link" href="../demo/layout-horizontal.html">Horizontal</a></li>
                            <li class="pc-item"><a class="pc-link" href="../demo/layout-compact.html">Compact</a></li>
                            <li class="pc-item"><a class="pc-link" href="../demo/layout-tab.html">Tab</a></li>
                        </ul>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Widget</label>
                        <svg class="pc-icon">
                            <use xlink:href="#custom-presentation-chart"></use>
                        </svg>
                    </li>
                    <li class="pc-item">
                        <a href="../widget/w_statistics.html" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-story"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Statistics</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="../widget/w_data.html" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-fatrows"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Data</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="../widget/w_chart.html" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-presentation-chart"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Chart</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>UI Components</label>
                        <svg class="pc-icon">
                            <use xlink:href="#custom-box-1"></use>
                        </svg>
                    </li>
                    <li class="pc-item">
                        <a href="../elements/bc_alert.html" class="pc-link" target="_blank">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-box-1"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Components</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-mouse-circle"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Icons</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-feather.html">Feather</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-fontawesome.html">Font Awesome 5</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-material.html">Material</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-tabler.html">Tabler</a></li>
                            <li class="pc-item"><a class="pc-link" href="../elements/icon-custom.html">Custom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-search-normal-1"></use>
                            </svg>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown drp-search">
                            <form class="px-3 py-2">
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->

            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                            <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-moon"></use>
                                </svg>
                                <span>Dark</span>
                            </a>
                            <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-sun-1"></use>
                                </svg>
                                <span>Light</span>
                            </a>
                            <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-setting-2"></use>
                                </svg>
                                <span>Default</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-setting-2"></use>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-user"></i>
                                <span>My Account</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-settings"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-headset"></i>
                                <span>Support</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                    <li class="pc-h-item">
                        <a href="#" class="pc-head-link me-0" data-bs-toggle="offcanvas" data-bs-target="#announcement" aria-controls="announcement">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-flash"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-notification"></use>
                            </svg>
                            <span class="badge bg-success pc-h-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Notifications</h5>
                                <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
                            </div>
                            <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                                <p class="text-span">Today</p>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-layer"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">2 min ago</span>
                                                <h5 class="text-body mb-2">UI/UX Design</h5>
                                                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-sms"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">1 hour ago</span>
                                                <h5 class="text-body mb-2">Message</h5>
                                                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-span">Yesterday</p>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-document-text"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">2 hour ago</span>
                                                <h5 class="text-body mb-2">Forms</h5>
                                                <p class="mb-0"
                                                >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type</p
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-user-bold"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">12 hour ago</span>
                                                <h5 class="text-body mb-2">Challenge invitation</h5>
                                                <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to join the challenge</p>
                                                <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                                                <button class="btn btn-sm btn-primary">Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <svg class="pc-icon text-primary">
                                                    <use xlink:href="#custom-security-safe"></use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">5 hour ago</span>
                                                <h5 class="text-body mb-2">Security</h5>
                                                <p class="mb-0"
                                                >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type</p
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-danger">Clear all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="/admin_files/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Profile</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                    <div class="d-flex mb-1">
                                        <div class="flex-shrink-0">
                                            <img src="/admin_files/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Carson Darrin 🖖</h6>
                                            <span>carson.darrin@company.io</span>
                                        </div>
                                    </div>

                                    <hr class="border-secondary border-opacity-50" />

                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0 d-inline-flex align-items-center">
                                                    <svg class="pc-icon text-muted me-2">
                                                        <use xlink:href="#custom-notification-outline"></use>
                                                    </svg
                                                    >Notification
                                                </h5>

                                                <div class="form-check form-switch form-check-reverse m-0">
                                                    <input class="form-check-input f-18" type="checkbox" role="switch" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-span">Manage</p>
                                    <a href="#" class="dropdown-item">
                                        <span>
                                            <svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-setting-outline"></use>
                                            </svg>
                                            <span>Settings</span>
                                        </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span>
                                            <svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-share-bold"></use>
                                            </svg>
                                            <span>Share</span>
                                        </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span>
                                            <svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-lock-outline"></use>
                                            </svg>
                                            <span>Change Password</span>
                                        </span>
                                    </a>

                                    <hr class="border-secondary border-opacity-50" />

                                    <p class="text-span">Team</p>
                                    <a href="#" class="dropdown-item">
                                        <span>
                                            <svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-profile-2user-outline"></use>
                                            </svg>
                                            <span>UI Design team</span>
                                        </span>

                                        <div class="user-group">
                                            <img src="/admin_files/assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                                            <span class="avtar bg-danger text-white">K</span>
                                            <span class="avtar bg-success text-white">
                                                <svg class="pc-icon m-0">
                                                    <use xlink:href="#custom-user"></use>
                                                </svg>
                                            </span>
                                            <span class="avtar bg-light-primary text-primary">+2</span>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item">
                                        <span>
                                            <svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-profile-2user-outline"></use>
                                            </svg>
                                            <span>Friends Groups</span>
                                        </span>
                                        <div class="user-group">
                                            <img src="/admin_files/assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                                            <span class="avtar bg-danger text-white">K</span>
                                            <span class="avtar bg-success text-white">
                                                <svg class="pc-icon m-0">
                                                    <use xlink:href="#custom-user"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item">
                                        <span>
                                            <svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-add-outline"></use>
                                            </svg>
                                            <span>Add new</span>
                                        </span>
                                        <div class="user-group">
                                            <span class="avtar bg-primary text-white">
                                                <svg class="pc-icon m-0">
                                                    <use xlink:href="#custom-add-outline"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>

                                    <hr class="border-secondary border-opacity-50" />

                                    <div class="d-grid mb-3">
                                        <button class="btn btn-primary">
                                            <svg class="pc-icon me-2">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>
                                            Logout
                                        </button>
                                    </div>

                                    <div class="card border-0 shadow-none drp-upgrade-card mb-0" style="background-image: url(/admin_files/assets/images/layout/img-profile-card.jpg)">
                                        <div class="card-body">
                                            <div class="user-group">
                                                <img src="/admin_files/assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                                                <img src="/admin_files/assets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                                                <img src="/admin_files/assets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                                                <img src="/admin_files/assets/images/user/avatar-4.jpg" alt="user-image" class="avtar" />
                                                <img src="/admin_files/assets/images/user/avatar-5.jpg" alt="user-image" class="avtar" />
                                                <span class="avtar bg-light-primary text-primary">+20</span>
                                            </div>
                                            <h3 class="my-3 text-dark">245.3k <small class="text-muted">Followers</small></h3>
                                            <div class="btn btn btn-warning">
                                                <svg class="pc-icon me-2">
                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                </svg>
                                                Upgrade to Business
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement" aria-labelledby="announcementLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="announcementLabel">What’s new announcement?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <p class="text-span">Today</p>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-success f-12">Big News</div>
                        <p class="mb-0 text-muted">2 min ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>

                    <h5 class="mb-3">Able Pro is Redesigned</h5>
                    <p class="text-muted">Able Pro is completely renowed with high aesthetics User Interface.</p>
                    <img src="/admin_files/assets/images/layout/img-announcement-1.png" alt="img" class="img-fluid mb-3" />
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid">
                                <a class="btn btn-outline-secondary" href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403" target="_blank">Check Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-warning f-12">Offer</div>
                        <p class="mb-0 text-muted">2 hour ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Able Pro is in best offer price</h5>
                    <p class="text-muted">Download Able Pro exclusive on themeforest with best price.</p>
                    <a href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403" target="_blank">
                        <img src="/admin_files/assets/images/layout/img-announcement-2.png" alt="img" class="img-fluid" />
                    </a>
                </div>
            </div>

            <p class="text-span mt-4">Yesterday</p>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-primary f-12">Blog</div>
                        <p class="mb-0 text-muted">12 hour ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Featured Dashboard Template</h5>
                    <p class="text-muted">Do you know Able Pro is one of the featured dashboard template selected by Themeforest team.?</p>
                    <img src="/admin_files/assets/images/layout/img-announcement-3.png" alt="img" class="img-fluid" />
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
                        <div class="badge bg-light-primary f-12">Announcement</div>
                        <p class="mb-0 text-muted">12 hour ago</p>
                        <span class="badge dot bg-warning"></span>
                    </div>
                    <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
                    <p class="text-muted">Get the lifetime free updates once you purchase the Able Pro.</p>
                    <img src="/admin_files/assets/images/layout/img-announcement-4.png" alt="img" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <!-- [ Header ] end -->
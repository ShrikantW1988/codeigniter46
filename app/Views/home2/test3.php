
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Form Advanced | Attex - Bootstrap 5 Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=ASSETS_URL2?>images/favicon.ico">

        <!-- Select2 css -->
        <link href="<?=ASSETS_URL2?>vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Daterangepicker css -->
        <link href="<?=ASSETS_URL2?>vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap Touchspin css -->
        <link href="<?=ASSETS_URL2?>vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Datepicker css -->
        <link href="<?=ASSETS_URL2?>vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Timepicker css -->
        <link href="<?=ASSETS_URL2?>vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- Flatpickr Timepicker css -->
        <link href="<?=ASSETS_URL2?>vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="<?=ASSETS_URL2?>js/config.js"></script>

        <!-- App css -->
        <link href="<?=ASSETS_URL2?>css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="<?=ASSETS_URL2?>css/icons.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="<?=ASSETS_URL2?>images/logo.png" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="<?=ASSETS_URL2?>images/logo-sm.png" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="<?=ASSETS_URL2?>images/logo-dark.png" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="<?=ASSETS_URL2?>images/logo-sm.png" alt="small logo">
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="ri-menu-2-fill"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                        <!-- Topbar Search Form -->
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                    <span class="ri-search-line search-icon"></span>
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-1">Found <b class="text-decoration-underline">08</b> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-file-chart-line fs-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lifebuoy-line fs-16 me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-user-settings-line fs-16 me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mt-2 mb-1 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="<?=ASSETS_URL2?>images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 fs-14">Erwin Brown</h5>
                                                <span class="fs-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="<?=ASSETS_URL2?>images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 fs-14">Jacob Deo</h5>
                                                <span class="fs-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        <li class="dropdown d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line fs-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?=ASSETS_URL2?>images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                <span class="align-middle d-none d-lg-inline-block">English</span> <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="<?=ASSETS_URL2?>images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="<?=ASSETS_URL2?>images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="<?=ASSETS_URL2?>images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="<?=ASSETS_URL2?>images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-notification-3-line fs-22"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted fs-12 fw-bold p-2 text-uppercase mb-0">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item unread-noti card m-0 shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="ri-message-3-line fs-18"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold fs-14">Datacorp <small class="fw-normal text-muted float-end ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="ri-user-add-line fs-18"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold fs-14">Admin <small class="fw-normal text-muted float-end ms-1">1 hr ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted fs-12 fw-bold p-2 mb-0 text-uppercase">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="<?=ASSETS_URL2?>images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold fs-14">Cristina Pride <small class="fw-normal text-muted float-end ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted fs-12 fw-bold p-2 mb-0 text-uppercase">31 Jan 2023</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="ri-discuss-line fs-18"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold fs-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="<?=ASSETS_URL2?>images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold fs-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-apps-2-line fs-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="<?=ASSETS_URL2?>images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="<?=ASSETS_URL2?>images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="<?=ASSETS_URL2?>images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="<?=ASSETS_URL2?>images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="<?=ASSETS_URL2?>images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="<?=ASSETS_URL2?>images/brands/behance.png" alt="Behance">
                                                <span>Behance</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="ri-settings-3-line fs-22"></i>
                            </a>
                        </li>

                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                                <i class="ri-moon-line fs-22"></i>
                            </div>
                        </li>


                        <li class="d-none d-md-inline-block">
                            <a class="nav-link" href="" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line fs-22"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="<?=ASSETS_URL2?>images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <h5 class="my-0">Tosha Minner</h5>
                                    <h6 class="my-0 fw-normal">Founder</h6>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="pages-profile.html" class="dropdown-item">
                                    <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="pages-profile.html" class="dropdown-item">
                                    <i class="ri-settings-4-line fs-18 align-middle me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="pages-faq.html" class="dropdown-item">
                                    <i class="ri-customer-service-2-line fs-18 align-middle me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="auth-lock-screen.html" class="dropdown-item">
                                    <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="auth-logout-2.html" class="dropdown-item">
                                    <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="<?=ASSETS_URL2?>images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="<?=ASSETS_URL2?>images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="<?=ASSETS_URL2?>images/logo-dark.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="<?=ASSETS_URL2?>images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </div>

                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="<?=ASSETS_URL2?>images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2">Tosha Minner</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="ri-home-4-line"></i>
                                <span class="badge bg-success float-end">2</span>
                                <span> Dashboards </span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="dashboard-analytics.html">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Ecommerce</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title">Apps</li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="ri-calendar-event-line"></i>
                                <span> Calendar </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.html" class="side-nav-link">
                                <i class="ri-message-3-line"></i>
                                <span> Chat </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="ri-mail-line"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html">Read Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class="ri-task-line"></i>
                                <span> Tasks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-tasks.html">List</a>
                                    </li>
                                    <li>
                                        <a href="apps-tasks-details.html">Details</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-kanban.html" class="side-nav-link">
                                <i class="ri-list-check-3"></i>
                                <span> Kanban Board </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-file-manager.html" class="side-nav-link">
                                <i class="ri-folder-2-line"></i>
                                <span> File Manager </span>
                            </a>
                        </li>

                        <li class="side-nav-title">Custom</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                                <i class="ri-pages-line"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="pages-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="pages-faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="pages-pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="pages-maintenance.html">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="pages-starter.html">Starter Page</a>
                                    </li>
                                    <li>
                                        <a href="pages-preloader.html">With Preloader</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Timeline</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                                <i class="ri-shield-user-line"></i>
                                <span> Auth Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesAuth">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="auth-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="auth-login-2.html">Login 2</a>
                                    </li>
                                    <li>
                                        <a href="auth-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="auth-register-2.html">Register 2</a>
                                    </li>
                                    <li>
                                        <a href="auth-logout.html">Logout</a>
                                    </li>
                                    <li>
                                        <a href="auth-logout-2.html">Logout 2</a>
                                    </li>
                                    <li>
                                        <a href="auth-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="auth-recoverpw-2.html">Recover Password 2</a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="auth-confirm-mail.html">Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                                <i class="ri-error-warning-line"></i>
                                <span> Error Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesError">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="error-404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="error-404-alt.html">Error 404-alt</a>
                                    </li>
                                    <li>
                                        <a href="error-500.html">Error 500</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                                <i class="ri-layout-line"></i>
                                <span> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="layouts-horizontal.html" target="_blank">Horizontal</a>
                                    </li>
                                    <li>
                                        <a href="layouts-detached.html" target="_blank">Detached</a>
                                    </li>
                                    <li>
                                        <a href="layouts-full.html" target="_blank">Full View</a>
                                    </li>
                                    <li>
                                        <a href="layouts-fullscreen.html" target="_blank">Fullscreen View</a>
                                    </li>
                                    <li>
                                        <a href="layouts-hover.html" target="_blank">Hover Menu</a>
                                    </li>
                                    <li>
                                        <a href="layouts-compact.html" target="_blank">Compact</a>
                                    </li>
                                    <li>
                                        <a href="layouts-icon-view.html" target="_blank">Icon View</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title">Components</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                                <i class="ri-briefcase-line"></i>
                                <span> Base UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="ui-accordions.html">Accordions</a>
                                    </li>
                                    <li>
                                        <a href="ui-alerts.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="ui-avatars.html">Avatars</a>
                                    </li>
                                    <li>
                                        <a href="ui-badges.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="ui-breadcrumb.html">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="ui-cards.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="ui-carousel.html">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="ui-collapse.html">Collapse</a>
                                    </li>
                                    <li>
                                        <a href="ui-dropdowns.html">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="ui-embed-video.html">Embed Video</a>
                                    </li>
                                    <li>
                                        <a href="ui-grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a href="ui-links.html">Links</a>
                                    </li>
                                    <li>
                                        <a href="ui-list-group.html">List Group</a>
                                    </li>
                                    <li>
                                        <a href="ui-modals.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="ui-notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="ui-offcanvas.html">Offcanvas</a>
                                    </li>
                                    <li>
                                        <a href="ui-placeholders.html">Placeholders</a>
                                    </li>
                                    <li>
                                        <a href="ui-pagination.html">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="ui-popovers.html">Popovers</a>
                                    </li>
                                    <li>
                                        <a href="ui-progress.html">Progress</a>
                                    </li>
                                    <li>
                                        <a href="ui-spinners.html">Spinners</a>
                                    </li>
                                    <li>
                                        <a href="ui-tabs.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="ui-tooltips.html">Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="ui-typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="ui-utilities.html">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                                <i class="ri-stack-line"></i>
                                <span> Extended UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExtendedUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="extended-dragula.html">Dragula</a>
                                    </li>
                                    <li>
                                        <a href="extended-range-slider.html">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="extended-ratings.html">Ratings</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollbar.html">Scrollbar</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollspy.html">Scrollspy</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="widgets.html" class="side-nav-link">
                                <i class="ri-pencil-ruler-2-line"></i>
                                <span> Widgets </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                                <i class="ri-service-line"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="icons-remixicons.html">Remix Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-bootstrap.html">Bootstrap Icons</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                                <i class="ri-bar-chart-line"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                            <span> Apex Charts </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarApexCharts">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="charts-apex-area.html">Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-bar.html">Bar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-bubble.html">Bubble</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-candlestick.html">Candlestick</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-column.html">Column</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-heatmap.html">Heatmap</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-line.html">Line</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-mixed.html">Mixed</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-timeline.html">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-boxplot.html">Boxplot</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-treemap.html">Treemap</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-pie.html">Pie</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-radar.html">Radar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-radialbar.html">RadialBar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-scatter.html">Scatter</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-polar-area.html">Polar Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-apex-sparklines.html">Sparklines</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarChartJSCharts" aria-expanded="false" aria-controls="sidebarChartJSCharts">
                                            <span> ChartJS </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarChartJSCharts">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="charts-chartjs-area.html">Area</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-bar.html">Bar</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-line.html">Line</a>
                                                </li>
                                                <li>
                                                    <a href="charts-chartjs-other.html">Other</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                                <i class="ri-survey-line"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="form-elements.html">Basic Elements</a>
                                    </li>
                                    <li>
                                        <a href="form-advanced.html">Form Advanced</a>
                                    </li>
                                    <li>
                                        <a href="form-validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="form-wizard.html">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="form-fileuploads.html">File Uploads</a>
                                    </li>
                                    <li>
                                        <a href="form-editors.html">Editors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                                <i class="ri-table-line"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatable.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                                <i class="ri-treasure-map-line"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                                <i class="ri-share-line"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultiLevel">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                            <span> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarSecondLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                            <span> Third Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarThirdLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                        <span> Item 2 </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarFourthLevel">
                                                        <ul class="side-nav-forth-level">
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.1</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2.2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Attex</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Advanced</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Advanced</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Select2</h4>
                                        <p class="text-muted fs-14">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="mb-1 fw-bold text-muted">Single Select</p>
                                                <p class="text-muted fs-14">
                                                    Select2 can take a regular select box like this...
                                                </p>
            
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>Select</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6">
                                                <p class="mb-1 fw-bold text-muted">Multiple Select</p>
                                                <p class="text-muted fs-14">
                                                    Select2 can take a regular select box like this...
                                                </p>
            
                                                <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div> <!-- end col -->
                                        </div> <!-- end row --> 

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> 
                        <!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Date Range Picker</h4>
                                        <p class="text-muted fs-14">
                                            A JavaScript component for choosing date ranges, dates and times.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Date Range -->
                                                <div class="mb-3">
                                                    <label class="form-label">Date Range</label>
                                                    <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <!-- Date Range Picker With Times -->
                                                <div class="mb-3">
                                                    <label class="form-label">Date Range Picker With Times</label>
                                                    <input type="text" class="form-control date" id="daterangetime" data-toggle="date-picker" data-time-picker="true" data-locale="{'format': 'DD/MM hh:mm A'}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Single Date Picker -->
                                                <div>
                                                    <label class="form-label">Single Date Picker</label>
                                                    <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <!-- Predefined Date Ranges -->
                                                <div>
                                                    <label class="form-label">Predefined Date Ranges</label>
                                                    <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue"  data-cancel-class="btn-light">
                                                        <i class="ri-calendar-2-line"></i>&nbsp;
                                                        <span id="selectedValue"></span> <i class="ri-arrow-down-s-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap Datepicker</h4>
                                        <p class="text-muted fs-14">
                                            Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                    <label class="form-label">Date Picker</label>
                                                    <input type="text" class="form-control" placeholder="Select Date" data-provide="datepicker" data-date-today-highlight="true" data-date-container="#datepicker1">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker2">
                                                    <label class="form-label">Date View</label>
                                                    <input type="text" class="form-control" placeholder="Select Date" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker3">
                                                    <label class="form-label">Multi Datepicker</label>
                                                    <input type="text" class="form-control" placeholder="Select Date" data-provide="datepicker" data-date-multidate="true" data-date-container="#datepicker3">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker4">
                                                    <label class="form-label">Autoclose</label>
                                                    <input type="text" class="form-control" placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker5">
                                                    <label class="form-label">Month View</label>
                                                    <input type="text" class="form-control" placeholder="Select Month" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1" data-date-container="#datepicker5">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3 position-relative" id="datepicker6">
                                                    <label class="form-label">Year View</label>
                                                    <input type="text" class="form-control" placeholder="Select Year" data-provide="datepicker" data-date-min-view-mode="2" data-date-container="#datepicker6">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="form-label">Inline Datepicker</label>
                                                    <div data-provide="datepicker-inline"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Flatpickr - Date picker</h4>
                                        <p class="text-muted fs-14">A lightweight and powerful datetimepicker</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Basic</label>
                                                    <input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label class="form-label">Date & Time</label>
                                                    <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label class="form-label">Human-friendly Dates</label>
                                                    <input type="text" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">MinDate and MaxDate</label>
                                                    <input type="text" id="minmax-datepicker" class="form-control" placeholder="mindate - maxdate">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label class="form-label">Disabling dates</label>
                                                    <input type="text" id="disable-datepicker" class="form-control" placeholder="Disabling dates">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label class="form-label">Selecting multiple dates</label>
                                                    <input type="text" id="multiple-datepicker" class="form-control" placeholder="Multiple dates">
                                                </div>
                                                
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Selecting multiple dates - Conjunction</label>
                                                    <input type="text" id="conjunction-datepicker" class="form-control" placeholder="2018-10-10 :: 2018-10-11">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label class="form-label">Range Calendar</label>
                                                    <input type="text" id="range-datepicker" class="form-control" placeholder="2018-10-03 to 2018-10-10">
                                                </div>
        
                                                <div>
                                                    <label class="form-label">Inline Calendar</label>
                                                    <input type="text" id="inline-datepicker" class="form-control" placeholder="Inline calendar">
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row --> 
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Flatpickr - Time Picker </h4>
                                        <p class="text-muted fs-14">A lightweight and powerful datetimepicker</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Default Time Picker</label>
                                                    <div class="input-group">
                                                        <input id="basic-timepicker" type="text" class="form-control" placeholder="Basic timepicker">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">24-hour Time Picker</label>
                                                    <div class="input-group">
                                                        <input id="24hours-timepicker" type="text" class="form-control" placeholder="16:21">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Time Picker w/ Limits</label>
                                                    <div class="input-group">
                                                        <input id="minmax-timepicker" type="text" class="form-control" placeholder="Limits">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            
                                                <div class="mb-0">
                                                    <label class="form-label">Preloading Time</label>
                                                    <div class="input-group">
                                                        <input id="preloading-timepicker" type="text" class="form-control" placeholder="Pick a time">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Input Masks</h4>
                                        <p class="text-muted fs-14">
                                            A jQuery Plugin to make masks on form fields and HTML elements.
                                        </p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <form action="#">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date</label>
                                                        <input type="text" class="form-control" placeholder="Enter date" data-toggle="input-mask" data-mask-format="00/00/0000">
                                                        <span class="fs-13 text-muted">e.g "DD/MM/YYYY"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Hour</label>
                                                        <input type="text" class="form-control" placeholder="Enter time" data-toggle="input-mask" data-mask-format="00:00:00">
                                                        <span class="fs-13 text-muted">e.g "HH:MM:SS"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Date & Hour</label>
                                                        <input type="text" class="form-control" placeholder="Enter date & time" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                                        <span class="fs-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">ZIP Code</label>
                                                        <input type="text" class="form-control" placeholder="Enter zip code" data-toggle="input-mask" data-mask-format="00000-000">
                                                        <span class="fs-13 text-muted">e.g "xxxxx-xxx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Crazy Zip Code</label>
                                                        <input type="text" class="form-control" placeholder="Enter zip code" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                                        <span class="fs-13 text-muted">e.g "x-xx-xx-xx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Money</label>
                                                        <input type="text" class="form-control" placeholder="Enter money" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                                        <span class="fs-13 text-muted">e.g "Your money"</span>
                                                    </div>
                                                    <div>
                                                        <label class="form-label">Money 2</label>
                                                        <input type="text" class="form-control" placeholder="Enter money" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                                        <span class="fs-13 text-muted">e.g "#.##0,00"</span>
                                                    </div>
            
                                                </form>
                                            </div> <!-- end col -->

                                            <div class="col-md-6">
                                                <form action="#">
                                                    <div class="mb-3">
                                                        <label class="form-label">Telephone</label>
                                                        <input type="text" class="form-control" placeholder="Enter telephone" data-toggle="input-mask" data-mask-format="0000-0000">
                                                        <span class="fs-13 text-muted">e.g "xxxx-xxxx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Telephone with Code Area</label>
                                                        <input type="text" class="form-control" placeholder="Enter telephone" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
                                                        <span class="fs-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">US Telephone</label>
                                                        <input type="text" class="form-control" placeholder="Enter US telephone" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                                        <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">São Paulo Celphones</label>
                                                        <input type="text" class="form-control" placeholder="Enter telephone" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                                        <span class="fs-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">CPF</label>
                                                        <input type="text" class="form-control" placeholder="Enter CPF" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                                                        <span class="fs-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">CNPJ</label>
                                                        <input type="text" class="form-control" placeholder="Enter CNPJ" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true">
                                                        <span class="fs-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
                                                    </div>
                                                    <div>
                                                        <label class="form-label">IP Address</label>
                                                        <input type="text" class="form-control" placeholder="Enter IP address" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true">
                                                        <span class="fs-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
                                                    </div>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap Touchspin</h4>
                                        <p class="text-muted fs-14">
                                            A mobile and touch friendly input spinner component for Bootstrap.
                                            Specify attribute <code>data-toggle="touchspin"</code> and your input would be conveterted into touch friendly spinner. 
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Using data attributes</label>
                                                    <input data-toggle="touchspin" type="text" value="55">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Example with postfix (large)</label>
                                                    <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">With prefix</label>
                                                    <input data-toggle="touchspin" type="text" data-bts-prefix="$">
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">Change button class</label>
                                                    <input data-toggle="touchspin" value="77" type="text" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info">
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Init with empty value:</label>
                                                    <input data-toggle="touchspin" type="text">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Max value - (Default value 100)</label>
                                                    <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">With prefix and postfix button</label>
                                                    <input data-toggle="touchspin" data-bts-prefix="A Button" data-bts-prefix-extra-class="btn btn-light"  data-bts-postfix="A Button" data-bts-postfix-extra-class="btn btn-light" type="text">
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->   

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap Maxlength</h4>
                                        <p class="text-muted fs-14">
                                            Uses the HTML5 attribute "maxlength" to work. Just specify <code>data-toggle="maxlength"</code> attribute
                                            to have maxlength indication on any input.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Default usage</label>
                                                    <p class="text-muted fs-13">
                                                        The badge will show up by default when the remaining chars are 10 or less:
                                                    </p>
                                                    <input type="text" class="form-control" placeholder="Max 25" maxlength="25" data-toggle="maxlength">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Threshold value</label>
                                                    <p class="text-muted fs-13">
                                                        Satrt displaying the indication when reached to some threshhold. Specift the data attribute <code>threshold</code>. E.g.
                                                        <code>data-threshold="12"</code>
                                                    </p>
                                                    <input type="text" class="form-control" placeholder="Max 25" maxlength="25" data-toggle="maxlength" data-threshold="12">
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Position</label>
                                                    <p class="text-muted fs-13">
                                                        All you need to do is specify the data attribute <code>placement</code>. The possible positions are left, top, right, bottom-right, top-right, top-left, 
                                                        bottom, bottom-left and centered-right. If none is specified, the positioning will be defauted to 'bottom'.
                                                        E.g. <code>data-placement="top"</code>
                                                    </p>
                                                    <input type="text" class="form-control" placeholder="Max 25" maxlength="25" data-toggle="maxlength" data-placement="top">
                                                </div>

                                                <div>
                                                    <label class="form-label">Textareas</label>
                                                    <p class="text-muted fs-13">
                                                        Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                    </p>
                                                    <textarea data-toggle="maxlength" class="form-control" maxlength="225" rows="3" 
                                                        placeholder="This textarea has a limit of 225 chars."></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Timepicker</h4>
                                        <p class="text-muted fs-14">
                                            Easily select a time for a text input using your mouse or keyboards arrow keys. Specify attribute <code>data-toggle="timepicker"</code>
                                            and you would have nice timepicker input element.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Default Time Picker</label>
                                                    <div class="input-group" id="timepicker-input-group1">
                                                        <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">24 Hour Mode Time Picker E.g. <code>data-show-meridian="false"</code></label>
                                                    <div class="input-group" id="timepicker-input-group2">
                                                        <input id="timepicker2" type="text" class="form-control" data-provide='timepicker' data-show-meridian="false" >
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-0">
                                                    <label class="form-label">Specify a step for the minute field E.g. <code>data-minute-step="5"</code></label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <input id="timepicker3" type="text" class="form-control" data-provide='timepicker' data-minute-step="5">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->    

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Typeahead</h4>
                                        <p class="text-muted fs-14">
                                            Typeahead.js is a fast and fully-featured autocomplete library.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">The Basics</label>
                                                    <input type="text" class="form-control" data-provide="typeahead" id="the-basics" placeholder="Basic Example">
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Bloodhound (Suggestion Engine)</label>
                                                    <input id="bloodhound" class="form-control" type="text" placeholder="States of USA">
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Prefetch</label>
                                                    <input type="text" class="form-control" data-provide="typeahead" id="prefetch" placeholder="States of USA">
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Remote</label>
                                                    <input type="text" class="form-control" data-provide="typeahead" id="remote" placeholder="States of USA">
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Custom Templates</label>
                                                    <input id="custom-templates" class="form-control" type="text" placeholder="States of USA">
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6 mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label class="form-label">Default Suggestions</label>
                                                    <input type="text" class="form-control" data-provide="typeahead" id="default-suggestions">
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-0">
                                                    <label class="form-label">Multiple Datasets</label>
                                                    <input type="text" class="form-control" data-provide="typeahead" id="multiple-datasets">
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->  

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Attex - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="card mb-0 p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <h5 class="mt-0 fs-16 fw-bold mb-3">Choose Layout</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input id="customizer-layout01" name="data-layout" type="checkbox" value="vertical" class="form-check-input">
                                <label class="form-check-label" for="customizer-layout01">Vertical</label>
                            </div>
                            <div class="form-check form-switch">
                                <input id="customizer-layout02" name="data-layout" type="checkbox" value="horizontal" class="form-check-input">
                                <label class="form-check-label" for="customizer-layout02">Horizontal</label>
                            </div>
                        </div>

                        <h5 class="my-3 fs-16 fw-bold">Color Scheme</h5>

                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                                <label class="form-check-label" for="layout-color-light">Light</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                                <label class="form-check-label" for="layout-color-dark">Dark</label>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label" for="layout-mode-fluid">Fluid</label>
                                </div>

                                <div id="layout-boxed">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label" for="layout-mode-boxed">Boxed</label>
                                    </div>
                                </div>

                                <div id="layout-detached">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="data-layout-detached" value="detached">
                                        <label class="form-check-label" for="data-layout-detached">Detached</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label" for="topbar-color-light">Light</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label" for="topbar-color-dark">Dark</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-brand" value="brand">
                                <label class="form-check-label" for="topbar-color-brand">Brand</label>
                            </div>
                        </div>

                        <div>
                            <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">Light</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">Dark</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-brand" value="brand">
                                    <label class="form-check-label" for="leftbar-color-brand">Brand</label>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">Default</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label" for="leftbar-size-compact">Compact</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">Condensed</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label" for="leftbar-size-small-hover">Hover View</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                    <label class="form-check-label" for="leftbar-size-full">Full Layout</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-fullscreen" value="fullscreen">
                                    <label class="form-check-label" for="leftbar-size-fullscreen">Fullscreen Layout</label>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                            <div class="btn-group checkbox" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <div id="sidebar-user">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <label class="fs-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="#" role="button" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>  

        <!-- Vendor js -->
        <script src="<?=ASSETS_URL2?>js/vendor.min.js"></script>

        <!--  Select2 Plugin Js -->
        <script src="<?=ASSETS_URL2?>vendor/select2/js/select2.min.js"></script>

        <!-- Daterangepicker Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/daterangepicker/moment.min.js"></script>
        <script src="<?=ASSETS_URL2?>vendor/daterangepicker/daterangepicker.js"></script>

        <!-- Bootstrap Datepicker Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- Bootstrap Timepicker Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

        <!-- Input Mask Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/jquery-mask-plugin/jquery.mask.min.js"></script>

        <!-- Bootstrap Touchspin Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Bootstrap Maxlength Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <!-- Typehead Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/handlebars/handlebars.min.js"></script>
        <script src="<?=ASSETS_URL2?>vendor/typeahead.js/typeahead.bundle.min.js"></script>

        <!-- Flatpickr Timepicker Plugin js -->
        <script src="<?=ASSETS_URL2?>vendor/flatpickr/flatpickr.min.js"></script>

        <!-- Typehead Demo js -->
        <script src="<?=ASSETS_URL2?>js/pages/demo.typehead.js"></script>

        <!-- Timepicker Demo js -->
        <script src="<?=ASSETS_URL2?>js/pages/demo.timepicker.js"></script>

        <!-- App js -->
        <script src="<?=ASSETS_URL2?>js/app.min.js"></script>

    </body>
</html>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Datatables | Attex - Bootstrap 5 Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=ASSETS_URL2?>images/favicon.ico">

        <!-- Datatables css -->
        <link href="<?=ASSETS_URL2?>vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=ASSETS_URL2?>vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=ASSETS_URL2?>vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=ASSETS_URL2?>vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=ASSETS_URL2?>vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=ASSETS_URL2?>vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Data Tables</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Data Table</h4>
                                        <p class="text-muted fs-14">
                                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                            function:
                                            <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual
                                            cells, columns, rows or all cells.
                                        </p>
                                        

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->                     

                       
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Dawat-E-Hadiya
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

        <!-- Vendor js -->
        <script src="<?=ASSETS_URL2?>js/vendor.min.js"></script>        

        <!-- App js -->
        <script src="<?=ASSETS_URL2?>js/app.min.js"></script>

    </body>
</html>

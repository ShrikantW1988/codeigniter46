
<!doctype html>
<html lang="en">   

<head>
        
        <meta charset="utf-8" />
        <title>Alerts | Drezon - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=ASSETS_URL3?>images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?=ASSETS_URL3?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=ASSETS_URL3?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=ASSETS_URL3?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?=ASSETS_URL3?>images/logo-dark-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=ASSETS_URL3?>images/logo-dark.png" alt="" height="18">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?=ASSETS_URL3?>images/logo-light-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=ASSETS_URL3?>images/logo-light.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>                       
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="icon-sm" data-feather="settings"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?=ASSETS_URL3?>images/users/avatar-4.jpg"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-16 align-middle text-muted mr-1"></i> <span class="align-middle" key="t-view"> View Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-16 align-middle mr-1 text-muted"></i> <span class="align-middle" key="t-my-wallet"> My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-16 align-middle mr-1 text-muted"></i> <span class="align-middle" key="t-settings"> Settings</span> <span class="badge badge-soft-success badge-pill mt-1 ml-2">03</span></a>
                                <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-16 align-middle mr-1 text-muted"></i> <span class="align-middle" key="t-lock-screen"> Lock screen</span></a>
                                <a class="dropdown-item" href="#"><i class="uil uil-sign-out-alt font-size-16 align-middle mr-1 text-muted"></i> <span class="align-middle" key="t-sign-out"> Sign out</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?=ASSETS_URL3?>images/logo-dark-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=ASSETS_URL3?>images/logo-dark.png" alt="" height="18">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?=ASSETS_URL3?>images/logo-light-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=ASSETS_URL3?>images/logo-light.png" alt="" height="18">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="icon nav-icon" data-feather="home"></i>
                                    <span class="badge badge-pill badge-primary float-right">2</span>
                                    <span class="menu-item" key="t-dashboards">Dashboards</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="index.html" key="t-ecommerce">Ecommerce</a></li>
                                    <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="icon nav-icon" data-feather="layout"></i>
                                    <span class="menu-item" key="t-layouts">Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                                    <li><a href="layouts-light-sidebar.html" key="t-light-sidebar">Light Sidebar</a></li>
                                    <li><a href="layouts-compact-sidebar.html" key="t-compact-sidebar">Compact Sidebar</a></li>
                                    <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Icon Sidebar</a></li>
                                    <li><a href="layouts-boxed.html" key="t-boxed-width">Boxed Width</a></li>
                                    <li><a href="layouts-preloader.html" key="t-preloader">Preloader</a></li>
                                    <li><a href="layouts-colored-sidebar.html" key="t-colored-sidebar">Colored Sidebar</a></li>
                                    <li><a href="layouts-scrollable.html" key="t-scrollable">Scrollable</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" key="t-apps">Apps</li>

                            <li>
                                <a href="calendar.html" class="waves-effect">
                                    <i class="icon nav-icon" data-feather="calendar"></i>
                                    <span class="menu-item" key="t-calendar">Calendar</span>
                                </a>
                            </li>  
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Alerts</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                            <li class="breadcrumb-item active">Alerts</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Default Alerts</h4>
                                        <p class="card-title-desc">Alerts are available for any length of
                                            text, as well as an optional dismiss button. For proper styling, use one
                                            of the four <strong>required</strong> contextual classes (e.g., <code
                                                    class="highlighter-rouge">.alert-success</code>). For inline
                                            dismissal, use the alerts jQuery plugin.</p>
        
                                        <div class="">
                                            <div class="alert alert-primary" role="alert">
                                                A simple primary alert—check it out!
                                            </div>
                                            <div class="alert alert-secondary" role="alert">
                                                A simple secondary alert—check it out!
                                            </div>
                                            <div class="alert alert-success" role="alert">
                                                A simple success alert—check it out!
                                            </div>
                                            <div class="alert alert-danger" role="alert">
                                                A simple danger alert—check it out!
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                A simple warning alert—check it out!
                                            </div>
                                            <div class="alert alert-info mb-0" role="alert">
                                                A simple info alert—check it out!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->                          
                           
                        </div>
                        <!-- end row -->                          
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Drezon.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="<?=ASSETS_URL3?>images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?=ASSETS_URL3?>images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="<?=ASSETS_URL3?>css/bootstrap-dark.min.css" data-appStyle="<?=ASSETS_URL3?>css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?=ASSETS_URL3?>images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="<?=ASSETS_URL3?>css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?=ASSETS_URL3?>libs/jquery/jquery.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/node-waves/waves.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?=ASSETS_URL3?>libs/feather-icons/feather.min.js"></script>

        <script src="<?=ASSETS_URL3?>js/app.js"></script>

    </body>

</html>

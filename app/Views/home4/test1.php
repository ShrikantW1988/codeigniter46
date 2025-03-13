
<!doctype html>
<html lang="en">

<head>
        
    <meta charset="utf-8" />
    <title>Alerts | Dashonic - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=ASSETS_URL4?>images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?=ASSETS_URL4?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=ASSETS_URL4?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=ASSETS_URL4?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>
    
    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?=ASSETS_URL4?>images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=ASSETS_URL4?>images/logo-dark.png" alt="" height="22">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?=ASSETS_URL4?>images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=ASSETS_URL4?>images/logo-light.png" alt="" height="22">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>                        
                    </div>

                    <div class="d-flex">  
                        
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle" style="display: none;">
                                <i class="icon-sm" data-feather="settings"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?=ASSETS_URL4?>images/users/avatar-1.jpg"
                                alt="Header Avatar">
                                <span class="ms-2 d-none d-sm-block user-item-desc">
                                    <span class="user-name">Kate Dudley</span>
                                    <span class="user-sub-title">Administrator</span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 bg-primary border-bottom">
                                    <h6 class="mb-0 text-white">Kate Dudley</h6>
                                    <p class="mb-0 font-size-11 text-white-50 fw-semibold">kate.dudley@email.com</p>
                                </div>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-kanban-board.html"><i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
                                <a class="dropdown-item d-flex align-items-center" href="user-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badge badge-success-subtle ms-auto">New</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-signout-basic.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
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
                            <img src="<?=ASSETS_URL4?>images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=ASSETS_URL4?>images/logo-dark.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="<?=ASSETS_URL4?>images/logo-light.png" alt="" height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="<?=ASSETS_URL4?>images/logo-sm-light.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-dashboards">Dashboards</li>

                            <li>
                                <a href="index.html">
                                    <i class="icon nav-icon" data-feather="monitor"></i>
                                    <span class="menu-item" data-key="t-sales">Sales</span>
                                    <span class="badge rounded-pill badge-secondary-subtle">5+</span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="mail"></i>
                                    <span class="menu-item" data-key="t-email">Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                    <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="book"></i>
                                    <span class="menu-item" data-key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                    <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                    <li><a href="user-settings.html" data-key="t-user-settings">User Settings</a></li>
                                </ul>
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
                                    <h4 class="mb-0">Codeigniter 4.6 with PHP 8.1+ (including 8.4).</h4>

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
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header justify-content-between d-flex align-items-center">
                                        <h4 class="card-title">Additional Content</h4>
                                        <a href="https://getbootstrap.com/docs/5.3/components/alerts/#additional-content" target="_blank" class="btn btn-sm btn-secondary-subtle">Docs <i class="mdi mdi-arrow-right align-middle"></i></a>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div>
                                            <div class="alert alert-info mb-0" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                              </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end col -->
                           
                        </div><!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Dashonic.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="" target="_blank" class="text-reset">Pichforest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?=ASSETS_URL4?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=ASSETS_URL4?>libs/metismenujs/metismenujs.min.js"></script>
        <script src="<?=ASSETS_URL4?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?=ASSETS_URL4?>libs/feather-icons/feather.min.js"></script>

        <script src="<?=ASSETS_URL4?>js/app.js"></script>

    </body>

</html>

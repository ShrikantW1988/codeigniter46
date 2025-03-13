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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.10/sweetalert2.css" rel="stylesheet" type="text/css"/>
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
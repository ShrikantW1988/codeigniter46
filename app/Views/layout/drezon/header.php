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

        <!-- DataTables -->
        <link href="<?=ASSETS_URL3?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=ASSETS_URL3?>libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Select datatable -->
        <link href="<?=ASSETS_URL3?>libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable -->
        <link href="<?=ASSETS_URL3?>libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- plugin css -->
        <link href="<?=ASSETS_URL3?>libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />      
        <link href="<?=ASSETS_URL3?>libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        
        <!-- Sweet Alert-->
        <link href="<?=ASSETS_URL3?>libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
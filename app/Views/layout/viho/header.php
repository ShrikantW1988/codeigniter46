<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?=ASSETS_URL5?>images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=ASSETS_URL5?>images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/daterange-picker.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/select2.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/sweetalert2.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/style.css">
    <link id="color" rel="stylesheet" href="<?=ASSETS_URL5?>css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_URL5?>css/responsive.css">
  </head>

  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?=ASSETS_URL5?>images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?=ASSETS_URL5?>images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>             
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center">
            <img class="img-90 rounded-circle" src="<?=ASSETS_URL5?>images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
            <p class="mb-0 font-roboto">Human Resources Department</p>
            
          </div>
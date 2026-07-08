<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_name('TAXI_ADMINSESSID');
    session_start();
}

$adminId = $_SESSION['admin_uid'] ?? $_SESSION['admin_uid'] ?? null;

if (empty($adminId) || ($_SESSION['role'] ?? '') !== 'admin') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="light" data-topbar-color="dark">


<!-- Mirrored from myrathemes.netlify.app/scoxe/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2026 15:52:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Scoxe - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
   <?php include('style.php') ?>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo-light' href='index.php'>
                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="32">
                    <img src="assets/images/logo-light-sm.png" alt="small logo" class="logo-sm" height="32">
                </a>

                <!-- Brand Logo Dark -->
                <a class='logo-dark' href='index.php'>
                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="32">
                    <img src="assets/images/logo-dark-sm.png" alt="small logo" class="logo-sm" height="32">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='index.php'>
                            <span class="menu-icon"><i class="mdi mdi-chart-pie"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='dispatcher.php'>
                            <span class="menu-icon"><i class="mdi mdi-view-grid"></i></span>
                            <span class="menu-text"> Dispatcher </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='bookingrequest.php'>
                            <span class="menu-icon"><i class="mdi mdi-car"></i></span>
                            <span class="menu-text"> Booking Request </span>
                            <span class="badge bg-info rounded-pill ms-auto">0</span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='eagleeye.php'>
                            <span class="menu-icon"><i class="mdi mdi-map"></i></i></span>
                            <span class="menu-text"> Eagle Eye </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='sosalert.php'>
                            <span class="menu-icon"><i class="mdi mdi-alert"></i></span>
                            <span class="menu-text"> SOS Alert </span>
                              <span class="badge bg-info rounded-pill ms-auto">0</span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='pushnotification.php'>
                            <span class="menu-icon"><i class="mdi mdi-bell"></i></span>
                            <span class="menu-text"> Push Notification </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='reviews.php'>
                            <span class="menu-icon"><i class="mdi mdi-content-copy"></i></span>
                            <span class="menu-text"> Reviews </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='cancellation.php'>
                            <span class="menu-icon"><i class="mdi mdi-delete"></i></span>
                            <span class="menu-text"> Cancellation </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='contactenquires.php'>
                            <span class="menu-icon"><i class="mdi mdi-package-variant"></i></span>
                            <span class="menu-text"> Contact Enquires </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='countryview.php'>
                            <span class="menu-icon"><i class="mdi mdi-eye"></i></span>
                            <span class="menu-text"> Country View </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='users.php'>
                            <span class="menu-icon"><i class="mdi mdi-account-group"></i></span>
                            <span class="menu-text"> Users </span>
                            
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='providers.php'>
                            <span class="menu-icon"><i class="mdi mdi-car"></i></span>
                            <span class="menu-text"> Providers </span>
                            <span class="badge bg-info rounded-pill ms-auto">0</span>
                            
                        </a>
                    </li>
                    
                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='referals-earnings.php'>
                            <span class="menu-icon"><i class="mdi mdi-car"></i></span>
                            <span class="menu-text"> Referal & Earnings </span>
                            <span class="badge bg-info rounded-pill ms-auto">0</span>
                            
                        </a>
                    </li>
                     <li class="menu-item">
                        <a class='menu-link waves-effect' href='services.php'>
                            <span class="menu-icon"><i class="mdi mdi-cog"></i></span>
                            <span class="menu-text"> Services </span>
                            
                        </a>
                    </li>
                     <li class="menu-item">
                        <a class='menu-link waves-effect' href='history&statements.php'>
                            <span class="menu-icon"><i class="mdi mdi-history"></i></span>
                            <span class="menu-text"> History & Statements </span>
                            
                        </a>
                    </li>


                        <li class="menu-item">  
                        <a href="#menusetting" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i class="mdi mdi-cog-outline"></i></span>
                            <span class="menu-text"> Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menusetting">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='globalsettings.php'>
                                        <span class="menu-text">Global Settings</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='websettings.php'>
                                        <span class="menu-text">Web Settings</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='appsettings.php'>
                                        <span class="menu-text">App Settings</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='paymentsettings.php'>
                                        <span class="menu-text">Payment Settings</span>
                                    </a>
                                </li> 
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuCMS" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i class="mdi mdi-account"></i></span>
                            <span class="menu-text"> CMS </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCMS">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='webcms.php'>
                                        <span class="menu-text">Web CMS</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='appcms.php'>
                                        <span class="menu-text">App CMS</span>
                                    </a>
                                </li>
                                </ul>
                                </div>
                                </li>

                                <li class="menu-item">
                        <a class='menu-link waves-effect' href='web&adminlanguages.php'>
                            <span class="menu-icon"><i class="mdi mdi-swap-horizontal"></i></span>
                            <span class="menu-text">Web & Admin Languages</span>
                        </a>
                    </li> 

                                <li class="menu-item">
                        <a href="#menuAdmistration" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i class="mdi mdi-account-outline"></i></span>
                            <span class="menu-text"> Admistration </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuAdmistration">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='userrole.php'>
                                        <span class="menu-text">User Role</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='manageusers.php'>
                                        <span class="menu-text">Manage User</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='activitylog.php'>
                                        <span class="menu-text">Activity Log</span>
                                    </a>
                                </li>
                                
                                <li class="menu-item">
                                    <a class='menu-link' href='truncatedata.php'>
                                        <span class="menu-text">Truncate Data</span>
                                    </a>
                                </li>
                              </ul>
                              </div>

                                <li class="menu-item">
                        <a href="#menuAccount" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i class="mdi mdi-account"></i></span>
                            <span class="menu-text"> Account </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuAccount">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='accountsetting.php'>
                                        <span class="menu-text">Account Setting</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='changepassword.php'>
                                        <span class="menu-text">Change Password</span>
                                    </a>
                                </li>
                                </ul>
                                </div>

                                <li class="menu-item">
                        <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i class="mdi mdi-cash"></i></span>
                            <span class="menu-text"> Bank Accounts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuComponentsui">
                            <ul class="sub-menu">
                            <li class="menu-item">
                                <a class='menu-link' href='accounts.php'>
                                    <span class="menu-text">accounts</span>
                                </a>
                            </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='withdrawals.php'>
                                        <span class="menu-text">Withdrawals</span>
                                    </a>
                                </li>
                              </ul>
                              </div>

                              <li class="menu-item">
                        <a class='menu-link waves-effect' href='logout.php'>
                            <span class="menu-icon"><i class="fa-solid fa-sign-out-alt"></i></span>
                            <span class="menu-text"> Logout</span>
                           
                           </a>
                    </li> 
               </ul>
               </div>
               </div>
                   
        <div class="container-fluid px-0">
            <div class="navbar-custom">
                <div class="topbar ">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1 px-0">

                        <!-- Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a class="logo-light" href="index.html">
                                <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="32">
                                <img src="assets/images/logo-light-sm.png" alt="small logo" class="logo-sm" height="32">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a class="logo-dark" href="index.html">
                                <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="32">
                                <img src="assets/images/logo-dark-sm.png" alt="small logo" class="logo-sm" height="32">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu waves-effect waves-light rounded-circle">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-2">

                        <li class="d-none d-md-inline-block">
                            <a class="nav-link waves-effect waves-light" href="#" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify font-size-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                <form class="input-group p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary rounded-start-0" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <li class="dropdown d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="mdi mdi-bell font-size-24"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-1" style="max-height: 300px;" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -4px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px 4px;">

                                                        <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                                        <!-- item-->

                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                                            <div class="card-body">
                                                                <span class="float-end noti-close-btn text-muted"><i
                                                                        class="mdi mdi-close"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div class="notify-icon bg-primary">
                                                                            <i
                                                                                class="mdi mdi-comment-account-outline"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                                        <h5
                                                                            class="noti-item-title fw-semibold font-size-14">
                                                                            Datacorp <small
                                                                                class="fw-normal text-muted ms-1">1 min
                                                                                ago</small></h5>
                                                                        <small
                                                                            class="noti-item-subtitle text-muted">Caleb
                                                                            Flakelar commented on
                                                                            Admin</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                                            <div class="card-body">
                                                                <span class="float-end noti-close-btn text-muted"><i
                                                                        class="mdi mdi-close"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div class="notify-icon bg-info">
                                                                            <i class="mdi mdi-account-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                                        <h5
                                                                            class="noti-item-title fw-semibold font-size-14">
                                                                            Admin <small
                                                                                class="fw-normal text-muted ms-1">1
                                                                                hours ago</small></h5>
                                                                        <small class="noti-item-subtitle text-muted">New
                                                                            user registered</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday
                                                        </h5>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                                            <div class="card-body">
                                                                <span class="float-end noti-close-btn text-muted"><i
                                                                        class="mdi mdi-close"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div class="notify-icon">
                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                class="img-fluid rounded-circle" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                                        <h5
                                                                            class="noti-item-title fw-semibold font-size-14">
                                                                            Cristina Pride <small
                                                                                class="fw-normal text-muted ms-1">1 day
                                                                                ago</small></h5>
                                                                        <small class="noti-item-subtitle text-muted">Hi,
                                                                            How are you? What about our
                                                                            next meeting</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021
                                                        </h5>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                                            <div class="card-body">
                                                                <span class="float-end noti-close-btn text-muted"><i
                                                                        class="mdi mdi-close"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div class="notify-icon bg-primary">
                                                                            <i
                                                                                class="mdi mdi-comment-account-outline"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                                        <h5
                                                                            class="noti-item-title fw-semibold font-size-14">
                                                                            Datacorp</h5>
                                                                        <small
                                                                            class="noti-item-subtitle text-muted">Caleb
                                                                            Flakelar commented on
                                                                            Admin</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                                            <div class="card-body">
                                                                <span class="float-end noti-close-btn text-muted"><i
                                                                        class="mdi mdi-close"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div class="notify-icon">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                class="img-fluid rounded-circle" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                                        <h5
                                                                            class="noti-item-title fw-semibold font-size-14">
                                                                            Karen Robinson</h5>
                                                                        <small class="noti-item-subtitle text-muted">Wow
                                                                            ! this admin looks good and
                                                                            awesome design</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <div class="text-center">
                                                            <i
                                                                class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-link waves-effect waves-light" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="assets/images/users/avatar-3.jpg" alt="user-image" class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    <?php echo htmlspecialchars($_SESSION['name'] ?? 'Admin', ENT_QUOTES, 'UTF-8'); ?> <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="user"
                                        class="lucide lucide-user font-size-16 me-2">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="settings"
                                        class="lucide lucide-settings font-size-16 me-2">
                                        <path
                                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                        </path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a class="dropdown-item notify-item" href="pages-lock-screen.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="lock"
                                        class="lucide lucide-lock font-size-16 me-2">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a class="dropdown-item notify-item" href="logout.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="log-out"
                                        class="lucide lucide-log-out font-size-16 me-2">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" x2="9" y1="12" y2="12"></line>
                                    </svg>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
           

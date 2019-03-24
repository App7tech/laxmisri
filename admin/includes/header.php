<?php
    session_start();
    if(!isset($_SESSION['admin_email'])){
        echo "<script> alert('Please Login to Continue'); window.location='index.php';</script>";
    }
?>
<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="index-2.html">
                <b>
                    <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <span>  
                    <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                </span> 
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="logout.php" >Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="<?php if($page=="dashboard")echo"active";?>"> <a class="waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li  class="<?php if($page=="sliders")echo"active";?>"> <a class="waves-effect waves-dark" href="sliders.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Sliders</span></a>
                </li>
                <li  class="<?php if($page=="categories")echo"active";?>"> <a class="waves-effect waves-dark" href="categories.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Categories</span></a>
                </li>
                <li  class="<?php if($page=="products")echo"active";?>"> <a class="waves-effect waves-dark" href="products.php" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Products</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <a href="#" class="link w-100" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> 
    </div>
    <!-- End Bottom points-->
</aside>
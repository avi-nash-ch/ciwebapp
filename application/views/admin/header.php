<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codeigniter Web Application</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/plugins/summernote/summernote-bs4.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        Welcome,<strong>Administrator</strong>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo base_url() . 'admin/login/logout'; ?>" class="dropdown-item">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link bg-white">
                <span class="brand-text ml-4"><strong>CI Web Application</strong></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() . 'admin/home/index/'; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item treeview <?php echo (!empty($mainModule) && $mainModule == "category") ? 'menu-open' : '' ?>">
                                    <!--isse kya hoga ki left me category khula hua nazar aayega -->
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Categories
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . 'admin/category/create/'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "category" && !empty($subModule) && $subModule == "createCategory") ? 'active' : '' ?>">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Create Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . 'admin/category/index/'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "category" && !empty($subModule) && $subModule == "viewCategory") ? 'active' : '' ?>">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>View Category</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item treeview <?php echo (!empty($mainModule) && $mainModule == "article") ? 'menu-open' : '' ?>">
                                    <!--isse kya hoga ki left me article khula hua nazar aayega -->
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Articles
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . 'admin/article/create/'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "article" && !empty($subModule) && $subModule == "createArticle") ? 'active' : '' ?>">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Create Article</p>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo base_url() . 'admin/article/index/'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "article" && !empty($subModule) && $subModule == "viewArticle") ? 'active' : '' ?>">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>View Article</p>
                                            </a>
                                        </li>
                                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
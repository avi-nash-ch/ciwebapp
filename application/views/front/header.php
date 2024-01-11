<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">

    <title>Codeigniter Web Application</title>
</head>

<body>
    <header class="bg-light pt-3 pb-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Codeigniter Web Application</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto"> <!-- Add ml-auto class here -->
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url(); ?>">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('page/about'); ?>">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('page/services'); ?>">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('blog'); ?>">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('blog/categories'); ?>">CATEGORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('page/contact'); ?>">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
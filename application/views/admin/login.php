<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codeigniter Web Application</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition login-page" style="background-image: url('/ciwebapp/public/images/ball-bright-close-up-clouds-207489.jpg');">

    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>CI Web Application</b></a>
        </div>
        <?php
            if(!empty($this->session->flashdata('msg'))) {
                    echo "<div class= 'alert alert-danger mb-3'>".$this->session->flashdata('msg')."</div>";
            }

        ?>
        
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php echo base_url().'admin/login/authenticate'?>" name="loginForm" id="loginFrom"  method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('username');?>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('password');?>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        
                    </div>
                </form>
            </div>

        </div>
       
    </div>


    <script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
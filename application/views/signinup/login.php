<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap.css">
  <link rel="icon" href="<?= base_url('asset/')?>images/icon.png" type="image/x-icon"/>
    
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="<?= base_url('asset/')?>images/logo.png" width="150" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Masukkan Username dan Password</p>
                    </div>
                    <form action="<?php echo base_url(); ?>c_login/login" method="post">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username" name="username" required>
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                           <!--  <div class="clearfix">
                                <label for="password">Password</label>
                                <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a>
                            </div> -->
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                           <!--  <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div> -->
                            <div class="float-right">
                                <a href="<?php echo base_url(); ?>c_login/register">Don't have an account? Register !!</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right" type="submit" name="login">Submit</button>
                        </div>
                    </form>
                   <!--  <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="<?= base_url('assets/')?>js/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('assets/')?>js/app.js"></script>
    
    <script src="<?= base_url('assets/')?>js/main.js"></script>
</body>

</html>

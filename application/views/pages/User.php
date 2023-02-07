<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Getting Started</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Clean.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Projects-Horizontal.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Testimonials.css'); ?>">
</head>

<body>
    <section class="login-clean"></section>
    <section class="login-dark" style="background: #2b3541;">
        <form method="post" action="<?php echo base_url('accueil/check_User'); ?>" style="margin-top: -152px;font-size: 19px;border-style: none;">
            <h2 class="sr-only">Login Form</h2><small class="form-text text-muted" style="font-size: 31.8px;">TAKALO-TAKALO</small>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" value="diana@gmail.com"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" value="123"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div><a class="forgot" href="<?php echo base_url('accueil/connectAdmin'); ?>">Connect as Admin</a>
            <a href="<?php echo base_url('accueil/signin') ?>" style="font-size: 13px;width: 13px;margin: 76px;color: rgb(130,143,139);border-style: none;border-color: var(--primary);">Create Account</a>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
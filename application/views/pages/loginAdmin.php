<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Getting Started</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Dark.css'); ?>">
</head>

<body>
    <section class="login-dark" style="color: rgb(7,8,8);background: rgb(36,39,52);padding: 0px;">
<<<<<<< Updated upstream
        <form method="post" style="margin-top: -156PX;">
=======
        <form action="<?php echo base_url('accueil/check_Admin'); ?>" method="post" style="margin-top: -156PX;" action="<?php echo base_url('accueil/check_Admin'); ?>">
>>>>>>> Stashed changes
            <h2 class="sr-only">Login Form</h2><small class="form-text text-muted" style="font-size: 31.8px;">TAKALO-TAKALO</small>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Connect as User</a>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
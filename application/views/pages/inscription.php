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

<body style="background: rgb(40,52,62);">
    <section class="login-dark" style="background: rgba(32,44,47,0.32);">
        <form method="post" action="<?php echo base_url('accueil/ajoutInscription'); ?>" style="margin-top: -160PX;">
            <h2 class="sr-only">Login Form</h2><small class="form-text text-muted" style="font-size: 31.8px;">TAKALO-TAKALO</small>
            <div class="illustration"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">SING IN</button></div>
        </form>
    </section>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Menu</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css'); ?>">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(43,47,61);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Takalo-Takalo</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('accueil/list_categorie'); ?>"><span>Voir Liste Categories</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('accueil/inserer'); ?>"><span>Inserer nouveau Categorie</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('user/liste'); ?>"><span>Utilisateurs inscrits</span></a></li>
                    <!-- <li class="nav-item"></li> -->
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('echange/effectuer'); ?>"><span>Echanges Effectues</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css'); ?>">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(43,47,61);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Takalo-TAKALO</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link " href="<?php echo base_url('objet/liste'); ?>"><span>Voir mes objets</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('objet/sendinsertObjet'); ?>"><span>Inserer Objet</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('objet/send_to_recherche'); ?>"><span>Rechercher Objet</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="listecategorie.html"><span>Objets des autres utilisateur</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><span>Listes propositions</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>
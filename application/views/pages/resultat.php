<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/smoothproducts.css'); ?>">
</head>

<body>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark" style="background: rgb(65,73,79);">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-9" style="padding: 8px;margin: 98px;">
                            <div class="products">
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <?php if(count($results)==0) echo "Aucun resultat"; ?>
                                            <?php for ($i=0; $i < count($results); $i++) {?>
                                                <!-- <div class="image">
                                                    <a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/tech/image2.jpg"></a>
                                                </div> -->
                                                <span class="form-text text-muted">
                                                    <?php  echo $results[$i]['NomObjet'];?>
                                                    <?php echo $results[$i]['categorie'];?>
                                                    <?php echo $results[$i]['description'];?>
                                                </span>
                                                <div class="about">
                                                    <span class="form-text text-muted"><?php echo $results[$i]['prix'];?></span>
                                                </div>
                                                <a href="#">Voir detail</a>
                                            <?php }?>
                                            m<a href="<?php echo base_url('accueil/usermenu'); ?>">Retour</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="<?php echo base_url('assets/js/smoothproducts.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>
</html>
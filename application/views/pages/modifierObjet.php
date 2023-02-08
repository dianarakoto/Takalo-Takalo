<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>modifierObjet</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Registration-Form-with-Photo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>

<body>
    <section class="register-photo">
        <div class="form-container">
            <form method="post" action="<?php echo base_url('objet/insert_objet'); ?>">
                <h2 class="text-center" style="font-size: 21px;"><strong>MODIFIER OBJET</strong><br><br><a href="#" style="font-size: 12px;height: 16px;padding: 7px;/*margin-top: -49px;*/margin: 12px;">Veulliez inserer les modificaton d'objet</a></h2>
                <div class="form-group"><input class="form-control" type="text" name="nom" placeholder="Nom d'objet"></div>
                <div class="form-group">
                    <select name="categorie">

                        <?php for ($i=0; $i <count($categ) ; $i++) { ?>
                            <option value="<?php echo $categ[$i]['idcategorie']?>"><?php echo $categ[$i]['Nom']?></option>
                        <?php }?>
                        
                    </select>
                </div>
                <input class="form-control" type="text" name="descri" placeholder="Description">
                <input class="form-control" type="text" name="prix" placeholder="Prix" style="margin-top: 21px;">
                <button class="btn btn-primary btn-block" type="submit" style="background: rgb(81,94,110);">MODIFIER</button>
            </form>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
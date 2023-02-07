<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="insert-catego">
        <h1>inserer catgorie</h1>
        <form action="<?php echo base_url('accueil/ajout_categorie'); ?>" method="post">
            <p><input type="text" placeholder="Inserer categorie" name="categorie"></p>
            <p><input type="submit" value="VALIDER"></p>
        </form>
    </div>
    <a href="<?php echo base_url('accueil/menu');?>" >Retour au menu</a>

</body>
</html>
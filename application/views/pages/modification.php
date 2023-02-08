<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('accueil/new_modif_categorie'); ?>" method="post">
        <p><input type="text" name="modif" placeholder="modifier"></p>
        <p><input type="submit" value="Valider"></p>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
    </form>
</body>
</html>
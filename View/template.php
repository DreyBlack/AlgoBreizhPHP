<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div>

        <header class="container-fluid">
            <img id="logo" class="col-xs-2 col-lg-1" src="images/logo512px.png">
            <div class="col-xs-offset-8 text-right"><?= $menuLinks ?></div>
        </header>
        <div class="container" id="contenu">
            <?= $contenu ?>
        </div>
        <footer class="text-center">
            Projet AlgoBreizh 2018
        </footer>

    </div>

</body>
</html>
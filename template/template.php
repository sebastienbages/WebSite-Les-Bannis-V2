<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= $title ?></title>
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="<?= $description ?>" />
        <meta name="author" content="Sebastien Bages" />
        <meta name="google-site-verification" content="pI-LsKR_HPIdNQBAGfnUnC1xuRB4LEDQkAicyBrz0ig"/>
        <meta property="og:title" content="&quot;Les Bannis&quot; Serveur FR Conan Exiles" />
        <meta property="og:description" content="Serveur français Conan Exiles PC - PVP/PVE avec Mods, Quêtes, Capitale, Commerce et plein d'autres... Rejoignez notre communauté !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.lesbannis.fr" />
        <meta property="og:image" content="https://www.lesbannis.fr/img/body/bodyindex_1920.jpg" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="627" />
        <meta property="og:image:alt" content="L'arène de Sobek !" />
        <link rel="shortcut icon" type="image/png" href="../img/favicon.ico" />
        <link rel="stylesheet" href="../css/loader.css">
        <link rel="stylesheet" href="<?= $css ?>"/>
        <link rel="stylesheet" href="<?= $css_responsive ?>"/>
        <link rel="stylesheet" href="../css/header.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../polices/stylesheet.css"/>
        <link rel="stylesheet" href="../css/triangle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        
        <div class="loader">
            <span class="letter">C</span>
            <span class="letter">H</span>
            <span class="letter">A</span>
            <span class="letter">R</span>
            <span class="letter">G</span>
            <span class="letter">E</span>
            <span class="letter">M</span>
            <span class="letter">E</span>
            <span class="letter">N</span>
            <span class="letter">T</span>
        </div>
        
        <?php require('../header/header.php'); ?>

        <div class="content load-content">

            <?= $content ?>

        </div>
        
        <?php require('../footer/footer.php'); ?>

        <script src="../js/loader.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>

</html>
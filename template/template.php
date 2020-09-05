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
        <meta property="og:description" content="Serveur français Conan Exiles PC - PVP/PVE sans inscription avec Mods, Quêtes, Cité, Commerce et plein d'autres... Rejoignez notre nouvelle communauté !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.lesbannis.fr" />
        <meta property="og:image" content="https://www.lesbannis.fr/img/body/bodyquest_2560.jpg" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="627" />
        <meta property="og:image:alt" content="L'arène de Sobek !" />
        <link rel="shortcut icon" type="image/png" href="../img/belor.png" />
        <link rel="stylesheet" href="<?= $css ?>"/>
        <link rel="stylesheet" href="<?= $css_responsive ?>"/>
        <link rel="stylesheet" href="../css/header.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../polices/jockey/stylesheet.css"/>
        <link rel="stylesheet" href="../css/triangle.css">
    </head>

    <body>
        
        <?php require('../header/header.php'); ?>

        <?= $content ?>
        
        <?php require('../footer/footer.php'); ?>

    </body>

</html>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?= $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <link rel="shortcut icon" type="image/ico" href="../../img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?= $css ?>">
        <link rel="stylesheet" type="text/css" href="<?= $css_responsive ?>">
        <link rel="stylesheet" type="text/css" href="../../polices/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="../../css/header.css">
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../css/triangle.css">
        <link rel="stylesheet" href="../../css/loader.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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

        <div class="content load-content">

            <?= $content ?>

        </div>

        <script src="../js/loader_admin.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>

</html>
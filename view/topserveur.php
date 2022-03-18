<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis - Classement top serveur';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Classement top serveur du mois courant du serveur Conan exiles francophone "Les Bannis"';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/topserveur.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/topserveur_responsive.css';

header("Access-Control-Allow-Origin: *"); # enable Cross Origin [CORS]
$url = 'https://api.top-serveurs.net/v1/servers/A2LCMNVWGS/players-ranking'; # API Link

$ch = curl_init(); # initialize curl object
curl_setopt($ch, CURLOPT_URL, $url); # set url
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); # receive server response
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); # do not verify SSL

$data = curl_exec($ch); # execute curl
$httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE); # http response status code
$jsonData = json_decode($data, false, 512, JSON_OBJECT_AS_ARRAY);

$error = curl_error($ch);

curl_close($ch); # close curl

$players = $jsonData->players;

?>

<?php ob_start(); ?>

<div class="content">

    <h1 class="text-center shadow-red white mt-5 hyborian">Liste des votes Top Serveur</h1>
    <h2 class="text-center white hyborian mb-5">
        <?php
               $ts = new \DateTime();
               $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::MEDIUM, \IntlDateFormatter::MEDIUM);
               $formatter->setPattern('MMM Y');
               echo $formatter->format($ts);
        ?>
    </h2>
    <div class="d-flex justify-content-center">
        <img src="https://top-serveurs.net/images/logo-icon.svg" alt="" class="img-fluid img-topserver text-center">
    </div>

    <div class="d-flex justify-content-center">
            <?php
                if ($error) {
                    echo    "<p class='text-center white shadow-red hyborian my-5 error'> Une erreur est survenue dans le chargement du classement...
                    </br>
                    Merci d'avertir un administrateur
                    <p>";
                }
                else {
                    echo "<ul class='mt-5 hyborian white fs-4 p-0'>";
                    foreach ($players as $p){
                        if ($p->playername === "") {
                            echo "<li class='text-center my-4 shadow-red'>Anonyme - " . strval($p->votes) ." vote(s)</li>";
                        }
                        else {
                            echo "<li class='text-center my-4 shadow-red'>" . $p->playername . " - " . strval($p->votes) ." vote(s)</li>";
                        }
                    }
                    echo "</ul>";
                }
            ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
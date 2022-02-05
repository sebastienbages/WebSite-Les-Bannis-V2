<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Cité de Sobek';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Découvrez la cité de SOBEK de la terre des bannis et goûtez à ces nombreux délices !';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/capitale.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/capitale_responsive.css';

?>

<?php ob_start(); ?>

<div id="title">
    <div class="youtube">
            <iframe src="https://www.youtube.com/embed/I86sh__UORE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div id="triangle"></div>

<section class="center px-1">
    <article class="pt-2">
        <p class="white">
            Cité souterraine offrant de nombreuses activités et de secrets... <br>
            Entièrement moddée de nos mains, elle offre des performances et un confort optimal pour nos joueurs. <br>
            Nous sommes ravi de vous proposer ce contenu unique qui on l'espère vous mettra des étoiles pleins les yeux.
        </p>
    </article>
    <article class="pt-2">
        <h2 class="white center">L'arêne</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/fosse/1.jpg" alt="photo 1 de l'arêne de la cité de sobek">
        </div>
        <p class="white">
            Prouve ta valeur au combat devant des adversaires redoutables et deviens le nouveau Champion de Sobek. <br>
            Gagne ta première série de combat pour rencontrer le gouverneur de Sobek et remporter une armure et des armes uniques. <br>
            Ensuite, tu auras accès à des combats répétables selon ton niveau pour obtenir de l'équipement spécial. <br>
            Seras-tu à la hauteur ? 
        </p>
    </article>
    <article class="pt-2">
        <h2 class="white center">Le Marché</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/marche/1.jpg" alt="photo 1 le marché de la cité de sobek">
        </div>
        <p class="white">
            La place du marché est le point central du commerce sur la terre des bannis. <br>
            Tu y trouveras des vendeurs permanent où tu pourras acheter ressources et équipements nécessaires à ton périple. <br>
            Lorsque tu auras suffisament rempli ta bourse, tu pourras acheter un emplacement pour créer ta propre échoppe ! <br>
            Visite les échoppes des autres joueurs pour regarder les objets mis en vente.
        </p>
    </article>
    <article class="pb-5 pt-2">
        <h2 class="white center">La Taverne</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/taverne/1.jpg" alt="photo 1 taverne de la cité de sobek">
        </div>
        <p class="white m-0">
            Endroit idéal pour faire des rencontres et trouver de nouvelles aventures...
            Tu y trouveras Morack qui te propose des objets uniques contre des loyalty token. <br>
            Discute avec les autres clients pour trouver des quêtes.
        </p>
    </article>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
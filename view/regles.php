<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Règles';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Règles à respecter sur les terres des Bannis.';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/rules.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/rules_responsive.css';

?>

<?php ob_start(); ?>

<div id="title" class="center flex-justify-center">
    
    <h1 id="main_title" class="white">regles du serveur</h1>

</div>

<div id="triangle"></div>

<section id="section_rules" class="center">

    <article class="margin_bottom">

        <h2 class="white">Progression</h2>

        <ul class="rules">
            <li>Utiliser un <span>vrai nom de personnage</span> (cohérent avec l'univers de Conan)</li>
            <li>PVE : détente, entre-aide et respect des autres joueurs</li>
            <li>XP récolte, kill et craft <span>X2</span></li>
            <li>PVP : <span>voir règles complètes sur le discord</span></li>
            <li>La <span>destruction des bâtiments</span> par les joueurs est <span>désactivée</span></li>
            <li>Les <span>purges</span> sont <span>activées</span> pour 1 joueur connecté minimum (niveau 4)</li>
            <li>Les paillasses sont autorisées comme point de sauvegarde. Les lits sont interdits hors base</li>
            <li>Cycles du lever/jour/coucher/nuit <span>augmentés</span> raisonnablement pour plus de réalisme</li>
            <li>Faim et Soif <span>légèrement diminuées</span> </li>
            <li>Le <span>vol</span> est <span>désactivé</span></li>
            <li>Le <span>teamkill</span> est <span>désactivé</span></li>
            <li>Des <span>portails</span> sont présents à proximité de chaque <span>obélisques</span></li>
            <li>6 joueurs <span>maxi</span> par clan</li>
        </ul>

    </article>
    
    <article class="margin_bottom">

        <h2 class="white">Constructions</h2>

        <ul class="rules">
            <li>Pas de <span>constructions affreuses</span> (type blockhaus). Soyez créatif !</li>
            <li>Pas de <span>constructions démesurées</span> pour un joueur solitaire</li>
            <li>Les constructions <span>vitrees</span> sont <span>interdites</span> (trop gourmand en ressources serveur)</li>
            <li>Les <span>remparts</span> ou <span>structures quelconques</span> en <span>fondations</span> uniquement sont <span>interdits</span></li>
            <li>Par joueur solo ou clan, il est autorisé <span>un base principale, un avant-poste et une cabane de pêche</span></li>
            <li>La dégradation des bâtiments est <span>désactivée</span></li>
            <li>Les matériaux de construction doivent être en <span>accord avec le paysage</span></li>
            <li>Interdiction de construire sur des <span>lieux nommées</span> et de <span>bloquer l'accès</span> aux donjons, ressources rares et passages stratégiques</li>
            <li>Interdiction de construire dans le <span>Volcan</span></li>
            <li>Interdiction de construire dans la zone d'influence des <span>world boss</span></li>
            <li>Une seule roue de la souffrance <span>de chaque type</span> par base principale/clan</li>
            <li><span>LES AVANTS POSTE SONT INTERDITS</span> ainsi que les roues de la souffrance à côté de camp de pnj, vous avez tous la possibilité d'avoir le "/home" pour ramener les pnjs à votre base !</li>
        </ul>

    </article>
    
    <article class="margin_bottom">
        
        <h2 class="white">Thralls & animaux (par joueur)</h2>

        <ul class="rules">
            <li>10 thralls combattants <span>maximum</span></li>
            <li>5 animaux maximum</li>
            <li>La <span>faim</span> est <span>désactivée</span></li>
            <li>1 suivants autorisé en plus de la monture</li>
            <li>Suivants <span>immunisés</span> à la lave</li>
            <li>Ils doivent se situer <span>dans vos bases</span> ou <span>à proximité</span> uniquement</li>
        </ul>

    </article>

    <article class="margin_bottom">
        
        <h2 class="white">Economy</h2>

        <ul class="rules">
            <li>Des <span>marchands</span> sont présents à Sobek et divers lieux...</li>
            <li>Vous avez la possibilité de placer un marchand à Sobek pour vendre vos objets</li>
            <li>Votre <span>emplacement</span> de commerce est valide 7 jours</li>
            <li> Vous <span>perdez</span> 10% de votre wallet si vous mourrez (suicide compris). Vous devez <span>acheter un banquier</span> au comptoir du commerce pour stocker votre argent.</li>
            <li><span>30 pièces d’argent</span> sont distribuées toutes les <span>24h</span> à tous les <span>joueurs connectés et offline</span></li>
        </ul>

    </article>

    <article class="margin_bottom">
        
        <h2 class="white">Rank</h2>

        <ul class="rules">
            <li>Plusieurs <span>Rangs</span> existent sur ces terres</li>
            <li>Vous démarrez l’aventure avec le rang <span class="grey">Bannis</span></li>
            <li>La progression est possible via des quêtes, elles sont accessibles avec les <span>PNJ équipés d'un logo</span></li>
            <li>Les rangs vous permettront d’accéder à des lieux, marchands, quêtes supplémentaires, world boss et plein d'autres fonctionnalités…</li>
        </ul>

    </article>
    
    <article>

        <h2 class="white">Respect du règlement</h2>

        <div id="rules_respect" class="flex-justify-center">

            <p><img src="../img/gardien.jpg" alt="gardien conan exiles" id="gardien"></p>

            <div class="white">

                <p>L'ordre des Gardiens applique ce réglement</p>
                <p>Ils prendront contact avec vous pour vous guider</p>
                <p>Vous ferai leur connaissance dès le début de l'aventure...</p>

            </div>

        </div>

    </article>
    
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
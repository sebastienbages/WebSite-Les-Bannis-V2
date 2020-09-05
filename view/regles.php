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
            <li>Les <span>purges</span> sont <span>activées</span> pour 1 joueur connecté minimum (niveau 6)</li>
            <li>Les paillasses sont autorisées comme point de sauvegarde. Les lits sont interdits hors base</li>
            <li>Le <span>vol</span> est <span>désactivé</span></li>
            <li>Le <span>teamkill</span> est <span>désactivé</span></li>
            <li>Des <span>portails</span> sont présents à proximité de chaque <span>obélisques</span></li>
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
        </ul>

        <ul class="rules">
            <li class="underline">Installation obligatoire d'un panneau à l'entrée de vos bases/avant-poste/cabane de pêche contenant les mentions suivantes :</li>
        </ul>

        <ul class="rules_sign rules">
            <li>Base principale - date dernière connexion</li>
            <li>Avant-poste - date dernière connexion</li>
            <li>Cabane de pêche - date dernière connexion</li>
        </ul>

        <ul class="rules">
            <li>Les matériaux de construction doivent être en <span>accord avec le paysage</span></li>
            <li>Interdiction de construire sur des <span>lieux nommées</span> et de <span>bloquer l'accès</span> aux donjons, ressources rares et passages stratégiques</li>
            <li>Un seul temple est autorisé par base principale/clan</li>
            <li>Une seule roue de la souffrance est autorisée <span>de taille au choix</span> par base principale/clan</li>
            <li>Une seule roue de la souffrance est autorisée <span>de taille petite</span> ou <span>moyenne</span> par avant-poste</li>
        </ul>

    </article>
    
    <article class="margin_bottom">
        
        <h2 class="white">Thralls & animaux</h2>

        <ul class="rules">
            <li>10 thralls combattants <span>maximum</span></li>
            <li>10 animaux maximum</li>
            <li>La <span>faim</span> est <span>désactivée</span></li>
            <li>Ils doivent se situer <span>dans vos bases</span> ou <span>à proximité</span> uniquement</li>
        </ul>

    </article>

    <article class="margin_bottom">
        
        <h2 class="white">Economy</h2>

        <ul class="rules">
            <li>Des <span>marchands</span> sont présents à Sobek et divers lieux...</li>
            <li>Vous avez la possibilité de placer un marchand à Sobek pour vendre vos objets</li>
            <li><span>Une pièce d’or</span> est distribuée toutes les <span>24h</span> à tous les <span>joueurs connectés et offline</span></li>
        </ul>

    </article>

    <article class="margin_bottom">
        
        <h2 class="white">Rank</h2>

        <ul class="rules">
            <li>Plusieurs <span>Rangs</span> existent sur ces terres</li>
            <li>Vous démarrez l’aventure avec le rang <span class="grey">Exilé</span></li>
            <li>La progression est possible via des quêtes, elles sont accessibles avec les <span>PNJ nommés</span></li>
            <li><span class="guerrier">Guerrier</span></li>
            <li><span class="champion">Champion</span></li>
            <li><span class="gardien">Gardien</span></li>
            <li><span class="main_gardien">Main des Gardiens</span></li>
            <li><span class="guerrier_bannis">Guerrier Bannis</span></li>
            <li><span class="elu_bannis">Elu des Bannis</span></li>
            <li>Les rangs vous permettront d’accéder à des lieux, marchands, quêtes supplémentaires et fonctionnalités…</li>
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
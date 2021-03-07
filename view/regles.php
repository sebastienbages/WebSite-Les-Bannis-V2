<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Règles';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Règles à respecter sur les terres des Bannis.';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/rules.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/rules_responsive.css';

//CONNEXION BDD
require("../fonctions/db_connect.php");
$bdd = db_connect();

//REQUETE BDD
require("../fonctions/requests.php");
$rules_progression = request_rules_progression($bdd);
$rules_construction = request_rules_constructions($bdd);
$rules_compagnon = request_rules_compagnons($bdd);
$rules_economy = request_rules_economy($bdd);
$rules_rank = request_rules_rank($bdd);

?>

<?php ob_start(); ?>

<div id="title" class="center flex-justify-center">
    
    <h1 id="main_title" class="white hyborian">regles</h1>

</div>

<div id="triangle"></div>

<section id="section_rules" class="center">

    <article class="margin_bottom">

        <h2 class="white">Progression</h2>

        <ul class="rules">

        <?php

            while ($progression = $rules_progression->fetch())
            {
            echo 	'<li>- ' . $progression['rule'] . '</li>';
            }

        ?>

        </ul>

    </article>
    
    <article class="margin_bottom">

        <h2 class="white">Constructions</h2>

        <ul class="rules">

            <?php

                while ($construction = $rules_construction->fetch())
                {
                echo 	'<li>- ' . $construction['rule'] . '</li>';
                }

            ?>

        </ul>

    </article>
    
    <article class="margin_bottom">
        
        <h2 class="white">Thralls & animaux (par joueur)</h2>

        <ul class="rules">

            <?php

                while ($compagnon = $rules_compagnon->fetch())
                {
                echo 	'<li>- ' . $compagnon['rule'] . '</li>';
                }

            ?>

        </ul>

    </article>

    <article class="margin_bottom">
        
        <h2 class="white">Economy</h2>

        <ul class="rules">

            <?php

                while ($economy = $rules_economy->fetch())
                {
                echo 	'<li>- ' . $economy['rule'] . '</li>';
                }

            ?>
            
        </ul>

    </article>

    <article class="margin_bottom">
        
        <h2 class="white">Rank</h2>

        <ul class="rules">

            <?php

                while ($rank = $rules_rank->fetch())
                {
                echo 	'<li>- ' . $rank['rule'] . '</li>';
                }

            ?>
            
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
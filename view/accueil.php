<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis - Serveur Français Conan Exiles PC';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Venez découvrir notre serveur FR Conan Exiles PVP/PVE en mode détente. De nombreux mods, quêtes, personnages et aventures vous attendent';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/accueil.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/accueil_responsive.css';

?>

<?php ob_start(); ?>

<div id="title" class="flex">
            
    <h1 id="main_title" class="center white no-margin">les bannis</h1>
    <p class="subtitle center white no-margin">@IP : 176.57.140.150:28900</p>
    <p class="size center white no-margin">Notre serveur est ouvert depuis le 23 Avril 2020</p>

</div>

<div id="triangle"></div>

<div id="content" class="flex">

    <aside id="aside_left" class="center">

        <iframe src="https://discordapp.com/widget?id=590837864510783489&theme=dark"></iframe>
        <br>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HWR8KYMBEAMNE&source=url" target="_blank" rel="noopener noreferrer nofollow"><img id="paypal" src="../img/don.png" alt="faire un don avec paypal"></a>
        <p id="help" class="white no-margin shadow-red">Aidez-nous à maintenir le serveur</p>
        <br>

    </aside>        

    <section id="section_index">
        
        <article class="white">

            <h2 class="center shadow-red">Le serveur</h2>

            <p>Bienvenue exile sur notre <strong>serveur FR Conan Exiles !</strong></p>

            <p>Nous sommes deux joueurs vétérans sur Conan Exiles et nous avons décidé de créé notre propre serveur.</p>

            <p>Pendant plusieurs mois, nous avons créé beaucoup de contenu à l'aide de plusieurs mods. Tout d'abord, nous avons
            écris une histoire principale que vous pourrez découvrir au travers d'une série de plusieurs quêtes. Vous ferai la
            connaissance de nombreux personnages plus atypiques les uns que les autres.
            </p> 

            <p>Vous découvrirez également de nombreuses quêtes indépendantes que nous enrichissons régulièrement par des
            nouvelles.
            </p>
            
            <p>Nous avons implanté une cité libre avec des marchands PNJ, des emplacements de vente pour les joueurs à venir
            retirer au comptoir du commerce, une arêne de combat scénarisée pour obtenir de nouveaux rangs et divers lieux
            insolites que vous devrez visiter pour trouver de nouvelles quêtes.
            </p>

            <p>Selon les choix que vous ferez pendant l'histoire, vous obtiendrez des avantages spécifiques et accès à
            des lieux particuliers ou chaque joueurs du même groupe pourra se retrouver. Les groupes adverses pourront
            librement s'exprimer en PVP.
            </p>

            <p>Enfin, suivant quelques règles à respecter, vous pouvez vous faire plaisir et construire de belle demeure.</p>

            <p>Nous n'avons pas vocation à faire du RP strict mais nous encourageons ce type d'échange entre joueurs. Ce que
            nous souhaitons avant tout est une bonne humeur, politesse et convivialité en jeu et sur notre discord.
            </p>

            <p class="bold">Nous accueillons les joueurs de tous horizons et expérience.</p>

        </article>

        <article class="white">

            <h2 class="center shadow-red">L'histoire</h2>

            <p>Vous êtes éxilé sur la terre des <em>bannis</em> et vous devez survivre dans cet univers hostile. Dès votre réveil, vous ferez la connaissance de l'ordre <em>des "Gardiens"</em>. Cette ordre dirigée par <em>"Belor"</em>, le gardien suprême, a pour mission d'accueillir les nouveaux exilés, de préserver l'équilibre de cette terre et de faire régner l'ordre. En avancant, vous trouverez facilement de l'aide dans les dunes de sable. Si vous arrivez à survivre, vous découvrirez <em>"Sobek"</em> <em>cité</em> de la terre des bannis. Ville marchande et lieu de rencontres, elle possède une <em>"arène"</em> où chaque aventurier peut prouver sa valeur...</p>

            <p>Au fil de vos aventures et de votre exploration, vous découvrez qu'une rebellion s'organise contre l'autorité des Gardiens... Vous découvrirez les évènements anciens survenues sur cette Terre et ferai la connaissance d'un chef de guerre... Tôt ou tard, il vous faudra choisir entre deux camps et affronter vos ennemis...</p>

            <p><em>Survivez</em>, <em>construisez</em>, <em>explorez</em>, <em>combattez</em>, obtenez de nouveaux rangs dans l'échelle sociale et devenez le nouveau héros de la terre des bannis.</p>

        </article>  

    </section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
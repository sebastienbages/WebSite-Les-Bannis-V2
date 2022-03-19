<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis - Serveur Français Conan Exiles PC';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Venez découvrir notre serveur FR Conan Exiles PVP/PVE en mode détente. De nombreux mods, quêtes, personnages et aventures vous attendent';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/accueil.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/accueil_responsive.css';

//CONNEXION BDD
require('../fonctions/db_connect.php');
$bdd = db_connect();

//REQUETE
require('../fonctions/requests.php');
$request_server1_ip = request_rules_ip($bdd, 1);
$request_server1_port = request_rules_port($bdd, 1);
$server1_ip = $request_server1_ip->fetch(PDO::FETCH_ASSOC);
$server1_port = $request_server1_port->fetch(PDO::FETCH_ASSOC);

?>

<?php ob_start(); ?>

<div id="title" class="flex">
    <h1 id="main_title" class="center">
        <img src="../img/banderole.gif" alt="" srcset="">
    </h1>
    <p class="subtitle center white no-margin"><?= $server1_ip['value'] ?>:<?= $server1_port['value'] ?></p>
</div>

<div id="triangle"></div>

<div id="content" class="flex">

    <aside id="aside_left" class="center">
        <h2 class="center shadow-red white">Rejoignez-nous sur discord</h2>
        <a href="https://discord.gg/SMZJWyf" class="img-fluid link-discord" rel="noopener noreferrer nofollow">
            <img src="../img/discord-logo-png-7617" alt="" srcset="">
        </a>
        <br>
        <h2 class="white no-margin shadow-red mt-4">Aidez-nous à maintenir le serveur</h2>
        <a href="https://www.paypal.com/donate/?hosted_button_id=8TVEEZ9SQQV8A" target="_blank" rel="noopener noreferrer nofollow">
            <img id="paypal" src="../img/don.png" alt="faire un don avec paypal" class="mb-4">
        </a>
    </aside>        

    <section id="section_index" class="mb-5">
        
        <article class="white">

            <h2 class="center shadow-red text-uppercase">Bienvenue dans notre univers</h2>
            
            <div class="flex youtube">
                <iframe src="https://www.youtube.com/embed/28WnPvjCQb0" title="Présentation serveur Les Bannis" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <p class="m-2">Le contenu que nous proposons est avant tout qualitatif dans le respect de l'univers de Conan et le médiéval fantastique. Attaché au bien-être et retours des membres de la communauté, nous sommes ouverts aux propositions de chacun. Nous privilégions la création de mods dédiés pour notre serveur plutôt que les constructions in-game afin de préserver les performances des joueurs et la stabilité du serveur. Nous sommes des passionnés et avons de nombreux projets en cours pour apporter du contenu supplémentaire...</p>

            <p class="m-2">Durant votre périple, vous découvrirez une multitude de quêtes uniques qui vous aideront à progresser. Elles sont régulièrement enrichies par une équipe de créateurs au top ! Vous trouverez également des quêtes et défis journalier pour agrémenter vos occupations à haut level.</p>


            <div class="flex youtube">
                <iframe src="https://www.youtube.com/embed/mzuA0TYLEgE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <p class="m-2">En jeu, vous serez accompagnés par une équipe de modérateurs disponibles et à l'écoute. Notre communauté bienveillante sera également présente pour vous aider et vous accompagner dans votre progression. Nous n'avons pas vocation à faire du RP strict mais nous encourageons ce type d'échange et laissons libre choix aux joueurs. Ce que nous souhaitons avant tout est une bonne humeur, du respect, de l'humour et de la convivialité.</p>

        </article>

    </section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
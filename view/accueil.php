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
$request_ip = request_rules_ip($bdd);
$request_port = request_rules_port($bdd);
$ip = $request_ip->fetch(PDO::FETCH_ASSOC);
$port = $request_port->fetch(PDO::FETCH_ASSOC);

?>

<?php ob_start(); ?>

<div id="title" class="flex">
            
    <h1 id="main_title" class="center white no-margin hyborian">les bannis</h1>
    <p class="subtitle center white no-margin">@IP : <?= $ip['value'] ?>:<?= $port['value'] ?></p>
    <p class="size center white no-margin">Serveur français Conan Exiles</p>

</div>

<div id="triangle"></div>

<div id="content" class="flex">

    <aside id="aside_left" class="center">

        <h2 class="center shadow-red white">Rejoignez-nous sur discord</h2>
        <iframe src="https://discordapp.com/widget?id=590837864510783489&theme=dark" class="mb-4"></iframe>
        <br>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HWR8KYMBEAMNE&source=url" target="_blank" rel="noopener noreferrer nofollow"><img id="paypal" src="../img/don.png" alt="faire un don avec paypal"></a>
        <p id="help" class="white no-margin shadow-red mb-4">Aidez-nous à maintenir le serveur</p>
        <br>

    </aside>        

    <section id="section_index" class="mb-5">
        
        <article class="white">

            <h2 class="center shadow-red">Bienvenue sur notre serveur</h2>

            <p>Le contenu que nous proposons est avant tout qualitatif dans le respect de l'univers de Conan et le médiéval fantastique. Attaché au bien-être et retours des membres de la communauté, nous sommes ouverts aux propositions de chacun. Nous privilégions la création de mods dédiés pour notre serveur plutôt que les constructions in-game afin de préserver les performances des joueurs et la stabilité du serveur. Nous sommes des passionnés et avons de nombreux projets en cours pour apporter du contenu supplémentaire...</p>

            <p>A ce titre, vous découvrirez Sobek, la cité principale de la terre des Bannis que nous avons entièrement modélisée de nos mains. Notre cité possède un marché avec de nombreux vendeurs et emplacements de vente réservés aux joueurs. Oserez-vous relever les défis de l'arène ? Nous sommes fier de vous proposer une arène moddée qui garantie une parfaite fluidité pendant les combats. Passez par la taverne afin de trouver du travail et partager une chope.</p>

            <p>Durant votre périple, vous découvrirez une multitude de quêtes uniques qui vous aideront à progresser. Elles sont régulièrement enrichies par une équipe de créateurs au top ! Vous trouverez également des quêtes et défis journalier pour agrémenter vos occupations à haut level.</p>

            <p>En jeu, vous serez accompagnés par une équipe de modérateurs disponibles et à l'écoute. Notre communauté bienveillante sera également présente pour vous aider et vous accompagner dans votre progression. Nous n'avons pas vocation à faire du RP strict mais nous encourageons ce type d'échange et laissons libre choix aux joueurs. Ce que nous souhaitons avant tout est une bonne humeur, du respect, de l'humour et de la convivialité.</p>

            <p>Enfin, selon quelques règles à respecter, vous pouvez vous faire plaisir et construire de belles demeures.</p>

            <p>A bientôt !</p>

        </article>

    </section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
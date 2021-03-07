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

    </section>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
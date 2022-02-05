<?php 

    //TITRE DE LA PAGE (SEO)
    $title = 'Les Bannis Conan Exiles - Reputation';
    //DESCRIPTION DE LA PAGE (SEO)
    $description = 'Découvrez les systèmes de réputation de la terre des Bannis';
    //CSS PRINCIPAL DE LA PAGE
    $css = '../css/reputation.css';
    //CSS RESPONSIVE DE LA PAGE
    $css_responsive ='../css/reputation_responsive.css';

?>

<?php ob_start(); ?>

<div id="title">

    <div class="youtube">
        <iframe src="https://www.youtube.com/embed/IUaVSzgIgZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

</div>

<div id="triangle"></div>

<section class="center px-1 pb-5">
    <article class="pt-2">
        <p class="white mb-0 text-center">
            Les terres des bannis possèdent plusieurs guildes importantes qu'il te faudra trouver.<br>
            Rends service à chacune d'entre elles pour augmenter ta réputation et accéder à de l'équipement unique.<br>
        </p>
    </article>
    <article class="pt-4">
        <h2 class="white center">Guilde des Voleurs</h2>
        <div>
            <img class="mb-2" src="../img/guilds/guild_voleur.jpg" alt="photo guild des voleurs">
        </div>
        <p class="white center">
            Arriveras-tu à trouver la guilde des voleurs ? <br>
            Cette guild te permettra de tenter de voler les habitants des différentes places. <br>
            Chque réussite augmentera ton niveau, ton habilité, te permettra de remplir ta bourse et d'accéder à de l'équipement unique.
        </p>
    </article>
    <article class="pt-4">
        <h2 class="white center">Les Chasseurs de Primes</h2>
        <div>
            <img class="mb-2" src="../img/guilds/chasseur_primes.jpg" alt="photo chasseur de primes">
        </div>
        <p class="white center">
            Rencontre la guilde des chasseurs de primes dans la Baie des Perroquets. <br>
            Cette ville est le repère de tous boucaniers et offre des services spéciaux. <br>
            Accomplie les primes et tu accèderas à de l'équipement unique.  <br>
        </p>
    </article>
    <article class="pt-4">
        <h2 class="white center">Les Fées d'Anthéa</h2>
        <div>
            <img class="mb-2" src="../img/guilds/anthea.jpg" alt="photo village des fées d'anthéa">
        </div>
        <p class="white center">
            Découvre le village des fées d'Anthéa au coeur de la jungle. <br>
            Vient en aide à leur race pour obtenir de l'équipement unique. <br>
        </p>
    </article>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
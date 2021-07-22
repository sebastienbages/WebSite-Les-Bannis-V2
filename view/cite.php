<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Cité de Sobek';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Découvrez la cité de SOBEK de la terre des bannis et goûtez à ces nombreux délices !';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/city.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/city_responsive.css';

?>

<?php ob_start(); ?>

<div id="title">
    <h1 id="main_title" class="white center hyborian">sobek</h1>
</div>

<div id="triangle"></div>

<section id="section_city" class="center">
    <article>
        <h2 class="white center">La Taverne</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/taverne/1.jpg" alt="photo 1 taverne de la cité de sobek">
        </div>
        <p class="white">Endroit idéal pour faire des rencontres et trouver de nouvelles aventures...</p>
    </article>
    <article>
        <h2 class="white center">L'arêne</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/fosse/1.jpg" alt="photo 1 de l'arêne de la cité de sobek">
        </div>
        <p class="white">Prouve ta valeur au combat devant des adversaires redoutables et deviens le nouveau Champion de Sobek</p>
    </article>
    <article>
        <h2 class="white center">Le Marché</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/marche/1.jpg" alt="photo 1 le marché de la cité de sobek">
        </div>
        <p class="white">Le marché et ses vendeurs. Tu peux y dépenser ton argent librement.</p>
    </article>
    <article>
        <h2 class="white center">Et bien d'autres...</h2>
        <div>
            <img class="margin_bottom img-city" src="../img/cite/autres/1.jpg" alt="Un lieu étrange de la cité de sobek">
        </div>
    </article>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
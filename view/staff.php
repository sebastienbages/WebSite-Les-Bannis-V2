<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Staff';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Faites la connaissance avec les créateurs et administrateurs des terres des Bannis.';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/staff.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/staff_responsive.css';

?>

<?php ob_start(); ?>

<div id="title" class="flex-justify-center">
    
    <h1 id="main_title" class="center white">staff</h1>

</div>

<div id="triangle"></div>

<section class="center">

    <h2 class="white shadow-red">Qui sommes nous ?</h2>

    <p>Bonjour et bienvenue sur notre site internet.</p>
    <p>Après plusieurs mois de travail, notre serveur Conan Exiles est enfin prêt !</p>
    <p>Chaque objets, pierres, détails et quêtes que vous allez découvrir ont été imaginés et réalisés par nos soins.</p>
    <p>Nous espérons que vous prendrez du plaisir à découvrir la terre des bannis autant que nous avons eu à la réaliser.</p>
    <p>Nous espérons vous rencontrer prochainement sur notre serveur FR Conan Exiles et notre <a id="discord" href="https://discord.gg/SMZJWyf" target="_blank">discord</a>.</p>
    <p>Pour toute demande d'informations n'hésitez pas à nous contacter.</p>
    <p>A bientôt !</p>

    <div id="articles" class="flex-justify-center">

        <article>

            <h2 class="white shadow-red">McFreely</h2>

            <img src="../img/mcfreely.png" alt="logo mcfreely">

            <!--<h3 class="white shadow-red">Config</h3>

            <ul class="white ul-staff">
                <li>Gigabyte Z370 AORUS GAMING 7-OP</li>
                <li>Intel Core i7-8086K</li>
                <li>Palit GeForce RTX 2080 Ti Gaming Pro OC</li>
                <li>Corsair Vengeance RGB PRO DDR4 32Go, 2666 MHz, CAS 16</li>
                <li>Boitier Be quiet dark base 900 rev2</li>
                <li>Refroidissement Alphacool et EK</li>
                <li>Alimentation Be Quiet Dark Power Pro 11 750W</li>
                <li>Ecran 4K 28p Acer Predator XB281HKbmiprz</li>
                <li>Clavier corsair k70 rgb mx silent</li>
                <li>Souris Swiftpoint Z</li>
            </ul>-->

        </article>

        <article>

            <h2 class="white shadow-yellow">Randgeur</h2>

            <img id="logo_randgeur" src="../img/randgeur.jpeg" alt="logo randgeur">

            <!--<h3 class="white shadow-yellow">Config</h3>

            <ul class="white ul-staff">
                <li>Gigabyte Z370 AORUS Ultra Gaming</li>
                <li>Intel Core I5-8600K</li>
                <li>MSI GeForce RTX 2060 SUPER Ventus OC</li>
                <li>DDR4 Corsair Vengeance LPX, Noir, 16 Go, 3000 MHz, CAS 15</li>
                <li>Boitier Be Quiet Dark Base 700 </li>
                <li>Refroidissement Be Quiet Dark Rock 4</li>
                <li>Alimentation Be Quiet Pure Power 10 700W</li>
                <li>Ecran AOC G3279vWF 32" 1440p 75Hz</li>
                <li>Clavier Corsair K55 RGB</li>
                <li>Souris Roccat Tyon - Noir</li>
            </ul>-->

        </article>

    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
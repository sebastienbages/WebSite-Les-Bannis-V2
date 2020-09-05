<?php 

//TITRE DE LA PAGE (SEO)
$title = 'LES BANNIS - Accueil Admin';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/admin.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive = '';

?>

<?php ob_start(); ?>

<div id="content">

    <h1 id="main_title" class="white center">page administrateur</h1>

    <ul class="center">
        <li><a href="../index_admin.php?page=img_admin">Gestion Images</a></li>
        <li class="white">Permet d'ajouter et gérer les images uploadées</li>
        <li><a href="../index_admin.php?page=quetes_admin">Gestion des Quêtes</a></li>
        <li class="white">Permet d'ajouter des quêtes</li>
    </ul>

    <p id="exit_admin" class="center"><a href="../../index.php" id="return">Quitter panneau Administrateur</a></p>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
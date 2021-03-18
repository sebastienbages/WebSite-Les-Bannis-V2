<?php 

//TITRE DE LA PAGE (SEO)
$title = 'Les Bannis Conan Exiles - Contact';
//DESCRIPTION DE LA PAGE (SEO)
$description = 'Faites la connaissance avec les créateurs et administrateurs des terres des Bannis.';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/contact.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive ='../css/contact_responsive.css';

?>

<?php ob_start(); ?>

<div id="title" class="flex-justify-center">
    
    <h1 id="main_title" class="center white hyborian">Contact</h1>
    
</div>

<div id="triangle"></div>

<section class="center pb-5">

    <img src="../img/logo.png" alt="" class="logo my-5">

    <p>Envie de partager des idées avec nous ? Envie de nous rejoindre ? De nous écrire en toute simplicité ?</p>

    <p>Vous pouvez utiliser le formulaire ci-dessous et nous nous ferons une joie de vous répondre.</p>

    <p>En espérant vous rencontrer prochainement sur notre serveur ou notre <a id="discord" href="https://discord.gg/SMZJWyf" target="_blank" rel="noopener noreferrer nofollow">discord</a>.</p>

    <form action="#" method="post" class="mx-auto mt-5" id="form-email">
        <div class="col-md-6 mx-auto">
            <input type="email" class="form-control my-3" placeholder="Votre email" name="email" id="email" required>
        </div>
        <div class="col-md-6 mx-auto">
            <textarea class="form-control my-3" rows="10" placeholder="Votre message" name="message" id="message" required></textarea>
        </div>
        <input type="submit" value="ENVOYER" class="btn btn-danger submit-email">
        <button class="btn btn-danger submit-loading hidden" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Envoi en cours
        </button>
    </form>

</section>

<script src="../js/email.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>
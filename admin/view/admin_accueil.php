<?php 

//TITRE DE LA PAGE (SEO)
$title = 'LES BANNIS - Accueil Admin';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/admin.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive = '';

//CONNEXION BDD
require('../../fonctions/db_connect.php');
$bdd = db_connect();

//MESSAGES D'ERREUR
require('../fonctions/msg_error.php');

//REQUETE
require('../../fonctions/requests.php');
$request_ip = request_rules_ip($bdd);
$request_port = request_rules_port($bdd);
$ip = $request_ip->fetch(PDO::FETCH_ASSOC);
$port = $request_port->fetch(PDO::FETCH_ASSOC);

?>

<?php ob_start(); ?>

<div id="content">

    <h1 id="main_title" class="white center hyborian">Espace admin</h1>

    <form action="../fonctions/post_adresse.php" method="post">
        <div>
            <label for="ip" class="red d-block text-center">Adresse IP du serveur</label>
            <br>
            <input type="text" name="ip" class="" id="ip" value="<?= $ip['value'] ?>" required>
            <label for="port" class="red">:</label>
            <input type="text" name="port" class="port" id="port" value="<?= $port['value'] ?>" required>
        </div>
        <input type="submit" value="Enregistrer" class="submit center btn btn-danger" id="submit">
        <?php 

        if (isset($_GET['msg'])) 
        {
            msg_maj_adresse($_GET['msg']);
        }
        
        ?>
    </form>

    <ul class="center">
        <li><a href="../index_admin.php?page=img_admin" class="red">Gestion Images</a></li>
        <li class="white">Permet d'ajouter et gérer les images uploadées</li>
        <li><a href="../index_admin.php?page=quetes_admin" class="red">Gestion des Quêtes</a></li>
        <li class="white">Permet d'ajouter des quêtes</li>
        <li><a href="../index_admin.php?page=rules_admin" class="red">Gestion des Règles</a></li>
        <li class="white">Permet la gestion des règles du serveur</li>
    </ul>

    <p id="exit_admin" class="center"><a href="../../index.php" id="return" class="red">Quitter panneau Administrateur</a></p>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
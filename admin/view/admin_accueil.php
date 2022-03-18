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
$request_server1_ip = request_rules_ip($bdd, 1);
$request_server1_port = request_rules_port($bdd, 1);
$server1_ip = $request_server1_ip->fetch(PDO::FETCH_ASSOC);
$server1_port = $request_server1_port->fetch(PDO::FETCH_ASSOC);

$request_server2_ip = request_rules_ip($bdd, 2);
$request_server2_port = request_rules_port($bdd, 2);
$server2_ip = $request_server2_ip->fetch(PDO::FETCH_ASSOC);
$server2_port = $request_server2_port->fetch(PDO::FETCH_ASSOC);

?>

<?php ob_start(); ?>

<div id="content">

    <h1 id="main_title" class="white center hyborian">Espace admin</h1>

    <form action="../fonctions/post_adresse.php" method="post">
        <div>
            <label for="ip" class="red d-block text-center">Adresses IP des serveurs</label>
            <br>
            <p class="white m-0">Serveur 1</p>
            <input type="text" name="server1ip" class="" id="ip" value="<?= $server1_ip['value'] ?>" required>
            <label for="port" class="red">:</label>
            <input type="text" name="server1port" class="port" id="port" value="<?= $server1_port['value'] ?>" required>
            <br>
            <p class="white m-0">Serveur 2</p>
            <input type="text" name="server2ip" class="" id="ip" value="<?= $server2_ip['value'] ?>" required>
            <label for="port" class="red">:</label>
            <input type="text" name="server2port" class="port" id="port" value="<?= $server2_port['value'] ?>" required>
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
        <li><a href="../index_admin.php?page=manage_servers" class="red">Gestion Transferts</a></li>
        <li class="white">Permet de visualiser l'état des serveurs</li>
    </ul>

    <p id="exit_admin" class="center"><a href="../../index.php" id="return" class="red">Quitter panneau Administrateur</a></p>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
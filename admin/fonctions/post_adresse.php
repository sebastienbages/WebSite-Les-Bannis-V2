<?php

    //Auteur : Sébastien Bages
    //Créé le : 30/09/2019
    //Modifié le : 30/09/19


    //CONNEXION BDD
    require('../../fonctions/db_connect.php');
    $bdd = db_connect();

    //REQUETES
    $ajout_ip = $bdd->prepare('UPDATE config SET value = :ip WHERE name = "ip"');
    $ajout_port = $bdd->prepare('UPDATE config SET value = :port WHERE name = "port"');

    //VARIABLES POST PROTEGEES
    $ip = htmlspecialchars($_POST['ip']);
    $port = htmlspecialchars($_POST['port']);

    //AJOUT BASE DE DONNEE
    if (isset($_POST['ip']) OR isset($_POST['port']))
    {
        $ajout_ip->execute(array(
            'ip' => $ip
        ));

        $ajout_ip->closeCursor();

        $ajout_port->execute(array(
            'port' => $port,
        ));

        $ajout_port->closeCursor();

        header('Location: ../view/admin_accueil.php?msg=1');
    }
    else
    {
        header('Location: ../view/admin_accueil.php?msg=1');
    }

?>
<?php

    //Auteur : Sébastien Bages
    //Créé le : 30/09/2019
    //Modifié le : 30/09/19


    //CONNEXION BDD
    require('../../fonctions/db_connect.php');
    $bdd = db_connect();

    //REQUETES
    $ajout_server1_ip = $bdd->prepare('UPDATE config SET value = :ip WHERE name = "ip" AND server = 1');
    $ajout_server1_port = $bdd->prepare('UPDATE config SET value = :port WHERE name = "port" AND server = 1');
    $ajout_server2_ip = $bdd->prepare('UPDATE config SET value = :ip WHERE name = "ip" AND server = 2');
    $ajout_server2_port = $bdd->prepare('UPDATE config SET value = :port WHERE name = "port" AND server = 2');

    //VARIABLES POST PROTEGEES
    $server1ip = htmlspecialchars($_POST['server1ip']);
    $server1port = htmlspecialchars($_POST['server1port']);
    $server2ip = htmlspecialchars($_POST['server2ip']);
    $server2port = htmlspecialchars($_POST['server2port']);

    //AJOUT BASE DE DONNEE
    if (isset($_POST['server1ip']) OR isset($_POST['server1port'])
        OR isset($_POST['server2ip']) OR isset($_POST['server2port']))
    {
        $ajout_server1_ip->execute(array(
            'ip' => $server1ip
        ));

        $ajout_server1_ip->closeCursor();

        $ajout_server1_port->execute(array(
            'port' => $server1port,
        ));

        $ajout_server1_port->closeCursor();

        $ajout_server2_ip->execute(array(
            'ip' => $server2ip
        ));

        $ajout_server2_ip->closeCursor();

        $ajout_server2_port->execute(array(
            'port' => $server2port,
        ));

        $ajout_server2_port->closeCursor();

        header('Location: ../view/admin_accueil.php?msg=1');
    }
    else
    {
        header('Location: ../view/admin_accueil.php?msg=1');
    }

?>
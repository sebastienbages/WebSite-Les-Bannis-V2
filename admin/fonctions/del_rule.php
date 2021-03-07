<?php

    //Auteur : Sébastien Bages
    //Créé le : 02/03/2021
    //Modifié le : 02/03/21

    //CONNEXION BDD
    require('../../fonctions/db_connect.php');
    $bdd = db_connect();

    //REQUETES
    $del_progression = $bdd->prepare('DELETE FROM progression WHERE id = (:id)');
    $del_construction = $bdd->prepare('DELETE FROM construction WHERE id = (:id)');
    $del_compagnon = $bdd->prepare('DELETE FROM compagnon WHERE id = (:id)');
    $del_economy = $bdd->prepare('DELETE FROM economy WHERE id = (:id)');
    $del_rank = $bdd->prepare('DELETE FROM rank WHERE id = (:id)');

    //VARIABLES POST PROTEGEES
    $base = htmlspecialchars($_POST['base']);
    $id = htmlspecialchars($_POST['id']);
    //NOM DES TABLES
    $base = array('progression', 'construction', 'compagnon', 'economy', 'rank');
    
    //AJOUT BASE DE DONNEE
    if (isset($_POST['base']) OR isset($_POST['id']))
    {
        if (in_array($_POST['base'], $base, true)) {

            switch ($_POST['base']) {
                case 'progression':
                    $del_progression->execute(array(
                        'id' => $id
                    ));
                    $del_progression->closeCursor();
                    break;
                case 'construction':
                    $del_construction->execute(array(
                        'id' => $id
                    ));
                    $del_construction->closeCursor();
                    break;
                case 'compagnon':
                    $del_compagnon->execute(array(
                        'id' => $id
                    ));
                    $del_compagnon->closeCursor();
                    break;
                case 'economy':
                    $del_economy->execute(array(
                        'id' => $id
                    ));
                    $del_economy->closeCursor();
                    break;
                case 'rank':
                    $del_rank->execute(array(
                        'id' => $id
                    ));
                    $del_rank->closeCursor();
                    break;  
            }
            
            header('Location: ../view/admin_rules.php');
        }
        else 
        {
            header('Location: ../view/admin_rules.php?msg=1');
        }
    }
    else
    {
        header('Location: ../view/admin_rules.php?msg=2');
    }

?>
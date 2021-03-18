<?php

    //CONNEXION BDD
    require('../../fonctions/db_connect.php');
    $bdd = db_connect();

    //REQUETES
    $del_progression = $bdd->prepare('UPDATE progression SET rule = (:rule) WHERE id = (:id)');
    $del_construction = $bdd->prepare('UPDATE construction SET rule = (:rule) WHERE id = (:id)');
    $del_compagnon = $bdd->prepare('UPDATE compagnon SET rule = (:rule) WHERE id = (:id)');
    $del_economy = $bdd->prepare('UPDATE economy SET rule = (:rule) WHERE id = (:id)');
    $del_rank = $bdd->prepare('UPDATE rank SET rule = (:rule) WHERE id = (:id)');

    //VARIABLES POST PROTEGEES
    $base = htmlspecialchars($_POST['base']);
    $id = htmlspecialchars($_POST['id']);
    $rule = htmlspecialchars($_POST['rule']);

    //NOM DES TABLES
    $base = array('progression', 'construction', 'compagnon', 'economy', 'rank');
    
    //AJOUT BASE DE DONNEE
    if (isset($_POST['base']) OR isset($_POST['id']))
    {
        if (in_array($_POST['base'], $base, true)) {

            switch ($_POST['base']) {
                case 'progression':
                    $del_progression->execute(array(
                        'id' => $id,
                        'rule' => $rule
                    ));
                    $del_progression->closeCursor();
                    break;
                case 'construction':
                    $del_construction->execute(array(
                        'id' => $id,
                        'rule' => $rule
                    ));
                    $del_construction->closeCursor();
                    break;
                case 'compagnon':
                    $del_compagnon->execute(array(
                        'id' => $id,
                        'rule' => $rule
                    ));
                    $del_compagnon->closeCursor();
                    break;
                case 'economy':
                    $del_economy->execute(array(
                        'id' => $id,
                        'rule' => $rule
                    ));
                    $del_economy->closeCursor();
                    break;
                case 'rank':
                    $del_rank->execute(array(
                        'id' => $id,
                        'rule' => $rule
                    ));
                    $del_rank->closeCursor();
                    break;  
            }
            return http_response_code(200);
        }
        else 
        {
            return http_response_code(400);
        }
    }
    else
    {
        return http_response_code(400);
    }

?>
<?php

    //CONNEXION BDD
    require('../../fonctions/db_connect.php');
    $bdd = db_connect();

    //REQUETES
    $ajout_progression = $bdd->prepare('INSERT INTO progression (rule) VALUE (:rule)');
    $ajout_construction = $bdd->prepare('INSERT INTO construction (rule) VALUE (:rule)');
    $ajout_compagnon = $bdd->prepare('INSERT INTO compagnon (rule) VALUE (:rule)');
    $ajout_economy = $bdd->prepare('INSERT INTO economy (rule) VALUE (:rule)');
    $ajout_rank = $bdd->prepare('INSERT INTO rank (rule) VALUE (:rule)');

    //VARIABLES POST PROTEGEES
    $base = htmlspecialchars($_POST['base']);
    $rule = htmlspecialchars($_POST['rule']);
    //NOM DES TABLES
    $base = array('progression', 'construction', 'compagnon', 'economy', 'rank');
    
    //AJOUT BASE DE DONNEE
    if (isset($_POST['base']) OR isset($_POST['rule']))
    {
        if (in_array($_POST['base'], $base, true)) {

            switch ($_POST['base']) {
                case 'progression':
                    $ajout_progression->execute(array(
                        'rule' => $rule
                    ));
                    $ajout_progression->closeCursor();
                    break;
                case 'construction':
                    $ajout_construction->execute(array(
                        'rule' => $rule
                    ));
                    $ajout_construction->closeCursor();
                    break;
                case 'compagnon':
                    $ajout_compagnon->execute(array(
                        'rule' => $rule
                    ));
                    $ajout_compagnon->closeCursor();
                    break;
                case 'economy':
                    $ajout_economy->execute(array(
                        'rule' => $rule
                    ));
                    $ajout_economy->closeCursor();
                    break;
                case 'rank':
                    $ajout_rank->execute(array(
                        'rule' => $rule
                    ));
                    $ajout_rank->closeCursor();
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
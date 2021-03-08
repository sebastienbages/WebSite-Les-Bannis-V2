<?php

//CONNEXION BDD
require('../../fonctions/db_connect.php');
$bdd = db_connect();
//REQUEST
$del = $bdd->prepare('DELETE FROM quest WHERE id = :id');

//SUPPRESSION BASE DE DONNEE
if (isset($_POST['id']))
{
    $del->execute(array(
        'id' => $_POST['id'],
    ));

    $del->closeCursor();
    return http_response_code(200);
}
else
{
    return http_response_code(400);
}
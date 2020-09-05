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

    header('Location: ../view/admin_quest.php?msg=3');
}
else
{
    header('Location: ../view/admin_quest.php?msg=4');
}
<?php

function db_connect() {

    try
    { 
        // $bdd = new PDO('mysql:host=?;dbname=?;charset=utf8', 'userName', 'mdp', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd = new PDO('mysql:host=localhost;dbname=bannis;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    return $bdd;

}

?>
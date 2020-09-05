<?php

function db_connect() {

    try
    { 
        $bdd = new PDO('mysql:host=HOST_HERE.db;dbname=DBNAME_HERE;charset=utf8', 'ID', 'PASSWORD', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    return $bdd;

}

?>
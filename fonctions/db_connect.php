<?php

function db_connect() {

    try
    { 
        $bdd = new PDO('mysql:host=lesbannicjadmin.mysql.db;dbname=lesbannicjadmin;charset=utf8', 'lesbannicjadmin', 'LesBannis31x48', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // $bdd = new PDO('mysql:host=localhost;dbname=bannis;charset=utf8', 'Randgeur', 'P6TRAGLxev7ucJuC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    return $bdd;

}

?>
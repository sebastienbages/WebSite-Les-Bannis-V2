<?php

function db_connect() {

    try
    { 
        // $bdd = new PDO('mysql:host=HOST_HERE.db;dbname=DBNAME_HERE;charset=utf8', 'ID', 'PASSWORD', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd = new PDO('mysql:host=localhost;dbname=bannis;charset=utf8', 'Randgeur', 'P6TRAGLxev7ucJuC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    return $bdd;

}

?>
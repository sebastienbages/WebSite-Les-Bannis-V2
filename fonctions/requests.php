<?php

    function request_quest($bdd) {
        $ajout = $bdd->query('SELECT id, titre, article, image, date_ajout FROM quest ORDER BY id');
        return $ajout;
    }

    function request_rules_progression($bdd) {
        $ajout = $bdd->query('SELECT rule FROM progression');
        return $ajout;
    }

    function request_rules_constructions($bdd) {
        $ajout = $bdd->query('SELECT rule FROM construction');
        return $ajout;
    }

    function request_rules_compagnons($bdd) {
        $ajout = $bdd->query('SELECT rule FROM compagnon');
        return $ajout;
    }

    function request_rules_economy($bdd) {
        $ajout = $bdd->query('SELECT rule FROM economy');
        return $ajout;
    }

    function request_rules_rank($bdd) {
        $ajout = $bdd->query('SELECT rule FROM rank');
        return $ajout;
    }

    function request_rules_ip($bdd, $server) {
        $ajout = $bdd->prepare("SELECT value FROM config WHERE name = ? AND server = ?");
        $ajout->execute(["ip", $server]);
        return $ajout;
    }

    function request_rules_port($bdd, $server) {
        $ajout = $bdd->prepare("SELECT value FROM config WHERE name = ? AND server = ?");
        $ajout->execute(["port", $server]);
        return $ajout;
    }
?>
<?php

    function request_rules_progression($bdd) {
        $ajout = $bdd->query('SELECT id, rule FROM progression');
        return $ajout;
    }

    function request_rules_constructions($bdd) {
        $ajout = $bdd->query('SELECT id, rule FROM construction');
        return $ajout;
    }

    function request_rules_compagnons($bdd) {
        $ajout = $bdd->query('SELECT id, rule FROM compagnon');
        return $ajout;
    }

    function request_rules_economy($bdd) {
        $ajout = $bdd->query('SELECT id, rule FROM economy');
        return $ajout;
    }

    function request_rules_rank($bdd) {
        $ajout = $bdd->query('SELECT id, rule FROM rank');
        return $ajout;
    }

?>
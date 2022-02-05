<?php

//TITRE DE LA PAGE (SEO)
$title = 'LES BANNIS - Gestion des serveurs';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/admin_servers.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive = '../css/admin_servers_responsive.css';

?>

<?php ob_start(); ?>

<p id="return" class="center"><a href="../index_admin.php" id="return_a" class="uppercase red">Retour vers accueil admin</a></p>

<div id="content">

    <?php
        $backup_multichar = false;
        $backup_rotate = true;

        set_time_limit(300);
        include_once('../../amunet/rcon.php');

        function returnSuccess() {
            returnError(204, '');
        }

        function returnError($code, $message) {
            http_response_code($code);
            exit($message);
        }

        function get($name) {
            return isset($_GET[$name]) ? $_GET[$name] : '';
        }

        // rcon protocol defines a limit of 4096 bytes per packet, however conan seems to support up to 10240 bytes per packet.
        $limit = 10138; // 3994

        $ini_array = parse_ini_file('../amunet/config/cluster.ini', TRUE);

        echo '<h1 class="white center uppercase my-5 shadow-red">gestion des transferts</h1>';

        // TEST DES MODULES NECESSAIRES PAR LE WEB SEVER
        echo '<h2 class="white">Modules du serveur Web</h2>';
        echo '<ul>';

        echo '<li class="white"><p>Ouverture des fichiers : ';
        $filename = 'filesystem.test';
        $handle = @fopen($filename, 'w');
        if ($handle) 
        {
            echo '<strong class="green uppercase">pret</strong>.';
            fclose($handle);
            unlink($filename);
        }
        else 
        {
            echo '<strong class="red uppercase">non trouve</strong> !<br/>Contactez l\'administrateur du site</p>';
        }
        echo '</li></p>';

        echo '<li class="white"><p>Décodeur JSON : ';
        if (function_exists('json_decode')) 
        {
            echo '<strong class="green uppercase">pret</strong>.';
        }
        else 
        {
            echo '<strong class="red uppercase">non trouve</strong> !<br/>Contactez l\'administrateur du site</p>';
        }
        echo '</li></p>';
        echo '</ul>';

        // TEST RCON
        echo '<div class="mb-3">';
        echo '<h2 class="white">Etat des serveurs</h2>';
        if ($ini_array || count($ini_array) != 0) 
        {
            foreach ($ini_array as $key => $value) 
            {
                echo '<h3 class="white">'. $key .'</h3>';
                $rcon = new rcon($value['pass'], $value['host'], $value['port']);
                if ($rcon->connected) 
                {
                    echo '<ul class="white">';
                    echo '<li>RCON : <span class="green uppercase">connecte</ span></li>';

                    // PING TEST
                    echo '<li>Transfert prêt : ';
                    $filename = '../amunet/files/ping-'. $key .'.test';
                    if (file_exists($filename))
                        unlink($filename);

                    $result = $rcon->send('ast ping');
                    if ($result == 'ping done.') 
                    {
                        // ATTENTE POUR ECRITURE DU FICHIER
                        if (!file_exists($filename)) 
                        {
                            sleep(2);
                        }

                        if (file_exists($filename))
                        {
                            echo '<strong class="green uppercase">ok</strong></li>';
                            unlink($filename);
                        }
                        else 
                        {
                            echo '<strong class="red uppercase">non</strong></li>';
                            echo '<p>Lien à éxécuter dans la console du serveur : <span class="blue">DataCmd TransferConfig "https://www.lesbannis.fr/amunet/cluster.php" '. $key .'</ span></ p>';
                        }
                    } 
                    else 
                    {
                        // NON EN LIGNE OU MOD PAS A JOUR
                        echo '<strong class="red uppercase">Mod non installé ou non à jour</strong></li>';
                    }

                    // LISTE DES JOUEURS
                    echo '<li><pre class="border border-3 border-primary rounded mt-2 list-players"><code>'. $rcon->send('listplayers') .'</code></pre></li>';
                    echo '</ul>';
                }
            }
        }
        else
        {
            echo '<p class="">Le fichier de configuration est vide</ p>';
        }
        echo '</div>';

        // LISTE DES FICHIERS
        echo '<h2 class="white">Fichiers des personnages</h2>';
        $files = scandir('../amunet/files');

        if (count($files) <= 2) {
            echo '<p class="red">Pas de fichiers</p>';
        }
        else
        {
            echo '<ul class="white">';
            foreach ($files as $filename) {
                if (substr($filename, -5) == '.json') 
                {
                    echo '<li>'. $filename .'</li>';
                }
            }
            echo '</ul>';
        }
    ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template_admin.php'); ?>
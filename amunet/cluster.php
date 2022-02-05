<?php
	$backup_multichar = false;
	$backup_rotate = true;

	set_time_limit(300);
	include_once('rcon.php');

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

	$ini_array = parse_ini_file('../admin/amunet/config/cluster.ini', TRUE);

	// these should be a given
	$server_id = get('srv');
	$command = get('cmd');
	$funcom_id = get('fid');
	$parameter = get('prm');

	switch ($command) {
		case 'export':
			// in case of export check if valid servers provided
			if (!isset($ini_array[$server_id]))
				returnError(400, 'Export impossible : - Serveur inconnu "'. $server_id .'"');

			if (!isset($ini_array[$parameter]))
				returnError(400, 'Export impossible - Destination inconnu "'. $parameter .'"');

			// fetch config details
			$config = $ini_array[$server_id];
			$config2 = $ini_array[$parameter];

			// try to connect to rcon
			$rcon = new rcon($config['pass'], $config['host'], $config['port']);
			if (!$rcon->connected)
				returnError(400, 'Export impossible - Echec connexion RCON');

			// request export
			$result = $rcon->send('ast export "'. $funcom_id .'"');
			if ($result != 'export done.')
				returnError(400, 'Export impossible - Erreur RCON : "'. $result .'"');

			// export to the buffer is done - now read until we receive no data.
			$json_string = '';
			do {
				$result = $rcon->send('ast read "'. $funcom_id .'"');
				$json_string = $json_string.$result;
			} while ($result != ' ');

			// make sure json is valid!
			if (function_exists('json_decode')) {
				$json = json_decode($json_string, true);
				if (!isset($json))
					returnError(400, 'Export impossible - Fichier JSON invalide');

				if ($backup_multichar) {
					// char name-based backup
					$filename = '../admin/amunet/files/multichar_'. $funcom_id .'_'. $json["name"] .'.json';
					$handle = fopen($filename, 'w');
					fwrite($handle, $json_string);
					fclose($handle);
				}
			} else {
				if (substr($json_string, 0, 1) != '{' || substr($json_string, -2, 1) != '}')
					returnError(400, 'Export impossible - Fichier JSON invalide');
			}

			// got valid json, save to file
			$filename = '../admin/amunet/files/export_'. $funcom_id .'.json';
			$handle = fopen($filename, 'w');
			fwrite($handle, $json_string);
			fclose($handle);

			// MOD exports begin
			// MOD exports end

			// remove the player and execute open command
			$rcon->send('ast remove "'. $funcom_id .'"');
			$rcon->send('ast exec "'. $funcom_id .'" "open '. $config2['open']) .'"';

			returnSuccess();
			break;

		case 'import':
			// in case of import check if valid server provided
			if (!isset($ini_array[$server_id]))
				returnError(400, 'Import impossible : - Serveur inconnu "'. $server_id .'"');

			// default value
			$votes_result = -1;

			// MOD check begin
			// MOD check end

			// check if we got any file to import
			$filename = '../admin/amunet/files/export_'. $funcom_id .'.json';
			if (!file_exists($filename) && $votes_result != 1)
				returnSuccess();

			// fetch config details
			$config = $ini_array[$server_id];

			// try to connect to rcon
			$rcon = new rcon($config['pass'], $config['host'], $config['port']);
			if (!$rcon->connected)
				returnError(400, 'Echec connexion RCON');

			// if we got any file to import
			if (file_exists($filename)) {
				// try to read the file
				$handle = fopen($filename, 'r');
				$json_string = str_replace('"','|',fread($handle, filesize($filename)));
				fclose($handle);

				// send the json to buffer (in multiple parts)
				while (strlen($json_string) > 0) {
					if (strlen($json_string) > $limit) {
						$result = $rcon->send('ast write "'.$funcom_id.'" "'.substr($json_string, 0, $limit)).'"';
						$json_string = substr($json_string, $limit);
					} else {
						$result = $rcon->send('ast write "'.$funcom_id.'" "'.$json_string.'"');
						$json_string = '';
					}
				}

				// buffer is filled, do the import
				$result = $rcon->send('ast import "'.$funcom_id.'"');

				if ($result != 'import done.') {
					// uh oh something went wrong, copy json and dump error.
					copy($filename, 'failed_'.$funcom_id.'.json');
					$filename = 'failed_'.$funcom_id.'.txt';
					$handle = fopen($filename, 'w');
					fwrite($handle, $result);
					fclose($handle);
					returnError(400, 'Import impossible - Erreur RCON : "'. $result .'"');
				} else {
					// rotate backup files if enabled
					if ($backup_rotate) {
						for ($i = 4; $i > 0 ; $i--) {
							$j = $i - 1;
							$filename_dst = 'backup'.$i.'_'.$funcom_id.'.json';
							if ($j != 0)
								$filename_src = 'backup'.$j.'_'.$funcom_id.'.json';
							else
								$filename_src = 'backup_'.$funcom_id.'.json';

							if (file_exists($filename_dst))
								unlink($filename_dst);
							if (file_exists($filename_src))
								rename($filename_src, $filename_dst);
						}
					}

					// backup the file
					rename($filename, 'backup_'.$funcom_id.'.json');
				}

				// MOD import begin
				// MOD import end
			}

			// check for claimed vote, spawn in item 11073 (skeleton key)
			if ($votes_result == 1)
				$rcon->send('ast spawn "'.$funcom_id.'" 11073');

			returnSuccess();
			break;

		case 'pong':
			$filename = '../admin/amunet/files/ping-'. $server_id .'.test';
			$handle = @fopen($filename, 'w');
			if ($handle)
				fclose($handle);
			break;

		default;
			break;
	}
?>
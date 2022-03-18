<?php
	require_once('app/config.php');

	foreach ($configs as $config) {
		if ($config['config_nome'] == 'manutencao' AND $config['config_valor'] == 'ativado') {
			require('pages/manutencao.php');
			exit();
		}
	}
?>
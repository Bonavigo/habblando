<?php
	/*
		Programado por BrunoBonamigo.
	*/

	date_default_timezone_set('America/Sao_Paulo');
	DEFINE('SITE', 'https://'.$_SERVER['HTTP_HOST'].'/habblando');

	$_DATABASE = array(
		'user' => 'exbrhb80_cmd',
		'password' => '3r0SBCWnt8yqiBM',
		'database' => 'exbrhb80_habblando',
		'host' => 'localhost',
		'encoding' => 'utf8mb4'
	);

	try {
		$db = new PDO("mysql:host={$_DATABASE['host']};dbname={$_DATABASE['database']};charset={$_DATABASE['encoding']}", $_DATABASE['user'], $_DATABASE['password']);
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		$_CONFIG = array(
			'nome' => 'Habblando',
			'lema' => '',
			'icone' => '',
			'og:site_name' => '',
			'og:title' => 'Habblando -  Fã-site',
			'og:url' => '',
			'og:description' => '',
			'og:image' => '',
			'theme_color' => '',
			'keywords' => ''
		);

		$configs = $db->query("SELECT * FROM hbd_config");
		$configs = $configs->fetchAll();
	} catch (PDOException $e) {
		require('pages/erro.php');
		exit();
	}
?>
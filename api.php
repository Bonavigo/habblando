<?php
	require_once('app/config.php');
	header("Access-Control-Allow-Origin: *");
	header('Content-Type: application/json');

	$data = simplexml_load_file("http://srvsh.com.br/api/TnpVME5nPT0reA==");
	$data = (array) $data;

	$data['locutor'] = $configs[1]['config_valor'];
	$data['programa'] = 'Reichsradio';
	echo json_encode($data);
?>
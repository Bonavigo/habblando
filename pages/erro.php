<?php
	if (!$_DATABASE) {
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Algo deu errado - <?php echo $_CONFIG['nome']; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_CONFIG['icone']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="<?php echo $_CONFIG['og:description']; ?>">
	<meta property="og:site_name" content="<?php echo $_CONFIG['og:site_name']; ?>"/>
	<meta property="og:title" content="<?php echo $_CONFIG['og:title']; ?>"/>
	<meta property="og:url" content="<?php echo $_CONFIG['og:url']; ?>"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:description" content="<?php echo $_CONFIG['og:description']; ?>" />
	<meta property="og:image" content="<?php echo $_CONFIG['og:image']; ?>" />
	<meta name="theme-color" content="<?php echo $_CONFIG['theme_color']; ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo SITE; ?>/assets/css/waves.min.css">
	<link rel="stylesheet" href="<?php echo SITE; ?>/assets/css/habblando.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://kit.fontawesome.com/5bb1d8cb3e.js" crossorigin="anonymous"></script>
</head>
<body class="habblando_body d-flex justify-content-center align-items-center text-white container">
	<div>
		<h3><b>Ops, parece que o Frank puxou algum fio.</b></h3>
		<h5>Algo de errado aconteceu. Voltaremos em breve.<h5>
	</div>
	<script src="<?php echo SITE; ?>/assets/js/waves.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script>
		Waves.attach('.waves_btn', 'waves-float');
		Waves.init();
	</script>
</body>
</html>
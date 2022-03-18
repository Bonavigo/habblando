<?php
	if (!$_DATABASE) {
		exit();
	} else {
		$slides = $db->query("SELECT * FROM hbd_slides");
		$slides = $slides->fetchAll();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Estamos em Manutenção</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE; ?>/assets/aberto.ico">
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
<body class="height-100vh background_maintenance">
	<header class="d-flex shadow-lg justify-content-center align-items-center flex-column box_logo">
		<a href="<?php echo SITE; ?>"><img src="https://exbrhbofc.net/images/icon_grupo.gif"></a>
	</header>
	<main class="container">
		<div class="row">
			<div class="col-sm-12 my-3">
				<div class="box_radio text-white shadow d-flex justify-content-between flex-column-xsm">
					<div class="d-flex align-items-center justify-content-center">
						<div class="personagem_radio">
							<img src="https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=HabblandoFS&direction=2&head_direction=3&size=m&action=std">
						</div>
						<div class="dados_radio">
							<h4><span id="player_locutor_atual"><?php echo $configs[1]['config_valor']; ?></span></h4>
							<p>Com o programa <span id="player_programa_atual">{programa}</span>.</p>
							<p><span id="player_musica_atual">{música}</span> - <span id="player_ouvintes">{ouvintes}</span> ouvintes.</p>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-center my-2">
						<button class="btn btn-primary waves_btn" type="button" onclick="abaixar()"><i class="fas fa-volume-down"></i></button>
						<button class="btn btn-primary waves_btn ms-1" type="button" onclick="player()"><i class="fas fa-play" id="icon_control"></i></button>
						<button class="btn btn-primary waves_btn mx-1" type="button" onclick="aumentar()"><i class="fas fa-volume-up"></i></button>
						<button class="btn btn-primary waves_btn" type="button" onclick="reset()"><i class="fas fa-sync"></i></button>
					</div>
					<audio id="player_audio" data-status="pausada" src="https://ssl.srvsh.com.br:7546/;"></audio>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 mb-3">
				<a class="twitter-timeline" href="https://twitter.com/exbrhbofc?ref_src=twsrc%5Etfw" height="500">Tweets by HabblandoFS</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-sm-12 col-md-6 mb-3">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<?php
							$i = 0;
							foreach ($slides as $slide) {
								if ($i == 0) {
									echo '<div class="carousel-item active">';
								} else {
									echo '<div class="carousel-item">';
								}
								echo '<a href="'.$slide['slide_link'].'" target="_blank"><img src="'.$slide['slide_image'].'" class="d-block w-100" alt="slide'.$i.'"></a>
									</div>';
								$i++;
							}
						?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="p-4 habblando_footer_top">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md">
						<img class="mb-2" src="https://exbrhbofc.net/images/icon_grupo.gif">
						<small class="d-block mb-3 text-light">Desenvolvido por <a target="_blank" class="text-white fw-bold text-decoration-none" href="https://github.com/Bonavigo">BrunoBonamigo</a>.</small>
					</div>
					<div class="col-6 col-md">
						<h5 class="text-light">Siga a <?php echo $_CONFIG['nome']; ?>!</h5>
						<ul class="list-unstyled text-small">
							<li class="mb-1"><a target="_blank" class="text-white text-decoration-none" href="https://twitter.com/exbrhbofc">Twitter</a></li>
							<li class="mb-1"><a target="_blank" class="text-white text-decoration-none" href="https://www.youtube.com/channel/UCaydLddznhVYuls6qNMJb4Q">YouTube</a></li>
							<li class="mb-1"><a target="_blank" class="text-white text-decoration-none" href="https://www.instagram.com/exbrhbofc/">Instagram</a></li>
							<li class="mb-1"><a target="_blank" class="text-white text-decoration-none" href="https://www.facebook.com/exbrhbofc">Facebook</a></li>
						</ul>
					</div>
					<div class="col-6 col-md">
						<h5 class="text-light">Links Úteis</h5>
						<ul class="list-unstyled text-small">
						</ul>
					</div>
					<div class="col-6 col-md">
						<h5 class="text-light">Feito com</h5>
						<ul class="list-unstyled text-small">
							<li class="mb-1"><a target="_blank" class="text-white text-decoration-none" href="https://getbootstrap.com">Bootstrap</a></li>
							<li class="mb-1"><a target="_blank" class="text-white text-decoration-none" href="https://github.com/fians/Waves">Waves</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="habblando_footer_bottom">
			<div class="container">
				<div class="row p-3 text-white text-center">
					<p class="m-0">© <?php echo date('Y'); ?> <?php echo $_CONFIG['nome']; ?> - <a href="https://habbo.com.br/" target="_blank" class="text-decoration-none fw-bold text-light">Habbo.com.br</a>.</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="<?php echo SITE; ?>/assets/js/radio.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="<?php echo SITE; ?>/assets/js/waves.min.js"></script>
	<script>
		Waves.attach('.waves_btn', 'waves-float');
		Waves.init();
	</script>
</body>
</html>
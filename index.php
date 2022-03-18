<?php
	require_once('app/general.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $_CONFIG['nome'].' - '.$_CONFIG['lema']; ?></title>
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
	<link rel="stylesheet" href="<?php echo SITE; ?>/assets/css/habblando.css?time=<?php echo time(); ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://kit.fontawesome.com/5bb1d8cb3e.js" crossorigin="anonymous"></script>
</head>
<body class="habblando_body">
	<header>
		<div class="d-flex shadow-lg justify-content-center align-items-center flex-column box_logo">
			<a href="<?php echo SITE; ?>"><img src="https://exbrhbofc.net/images/icon_grupo.gif"></a>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark habblando_navbar shadow">
			<div class="container container-fluid">
				<a class="navbar-brand d-xsm-flex d-sm-flex d-md-flex d-lg-none" href="#">Habblando</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="https://exbrhbofc.net/">Principal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/fardamento">Fardamento</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/teamspeak">TeamSpeak</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/hierarquia">Hierarquia</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu4" data-bs-toggle="dropdown" aria-expanded="false">Escolas e Institutos</a>
							<ul class="dropdown-menu" aria-labelledby="menu4">
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/essa">EsSA</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/espcex">EsPCEx</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/aman">AMAN</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/EsAO">EsAO</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/dec">DEC</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://ctex.exbrhbofc.net/">CTEx</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/eceme">ECEME</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/escolas-institutos/esfcex">EsFCEx</a></li>
								<li></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu8" data-bs-toggle="dropdown" aria-expanded="false">Companhias</a>
							<ul class="dropdown-menu" aria-labelledby="menu8">
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/companhias/1-companhia">1ª Companhia</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/companhias/2-companhia">2ª Companhia</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/companhias/3-companhia">3ª Companhia</a></li>
								<li></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu5" data-bs-toggle="dropdown" aria-expanded="false">Honrados</a>
							<ul class="dropdown-menu" aria-labelledby="menu5">
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/honrados/honrarias">Honrarias</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/honrados/aposentados">Aposentados</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/honrados/medalhas">Medalhas</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/honrados/insigne">Insigne</a></li>
								<li></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu6" data-bs-toggle="dropdown" aria-expanded="false">Apostilas</a>
							<ul class="dropdown-menu" aria-labelledby="menu6">
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/como-atender-um-recruta">GP: Como atender um recruta</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/simbolos-e-registros">Símbolos e registros</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/cps-como-funcionam">CPs: Como funcionam</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/gp-pele-cabelo-acessorio">Peles, Cabelos e Acessórios permitidos</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/qg-divisao">QG: Divisão</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/mudancas">Funcionamento do QG</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/patrulha">Como fazer Patrulha</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/termos_e_codigos">Jargões, termos e códigos</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/apostilas/como_ser_promovido_no_apresente-se">Tutorial: Apresente-se</a></li>
								<li></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu7" data-bs-toggle="dropdown" aria-expanded="false">Alistados</a>
							<ul class="dropdown-menu" aria-labelledby="menu7">
								<li><a class="dropdown-item" href="https://002exbr.blogspot.com/">Registros antigos</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://exbrhbofc.net/lista/ativos">Praças e Oficiais</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://exbrhbofc.net/lista/soldados">Soldados</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://exbrhbofc.net/lista/demitidos">Demitidos</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/alistados/aniversariantes">Aniversariantes</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://exbrhbofc.net/lista/patrocinadores">Patrocinadores</a></li>
								<li></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu10" data-bs-toggle="dropdown" aria-expanded="false">Externos</a>
							<ul class="dropdown-menu" aria-labelledby="menu10">
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/externos/grupos">Saiba mais</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/externos/supervisores">Supervisores</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/externos/monitores">Monitores</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/externos/helpers">Helpers</a></li>
								<li></li>
								<li><a class="dropdown-item" href="http://diario.exbrhbofc.net/">Diário Habbo</a></li>
								<li></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="menu15" data-bs-toggle="dropdown" aria-expanded="false">Especiais</a>
							<ul class="dropdown-menu" aria-labelledby="menu15">
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/cavalaria">Cavalaria</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/grupocomandos">Comandos</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/forcas-especiais">Forças Especiais</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/uru-can">URU-CAN</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/patrocinadores">Patrocinadores/Privilégios</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/paraquedistas">Paraquedistas</a></li>
								<li></li>
								<li><a class="dropdown-item" href="https://sandbox.exbrhbofc.net/abaixaobraco/conteudo/especiais/dragoes">Dragões da Independência</a></li>
								<li></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<script src="<?php echo SITE; ?>/assets/js/waves.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script>
		Waves.attach('.waves_btn', 'waves-float');
		Waves.init();
	</script>
</body>
</html>
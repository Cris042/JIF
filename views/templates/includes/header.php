<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
        <title>Ola mundo</title>
		<!--======================================= Meta tags =============================================-->	
		<meta charset="utf-8" />
		<!--===============================================================================================-->	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<!--===============================================================================================-->	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
		<!--===============================================================================================-->	
		<meta name="description" content="Jogos dos Institutos Federais etapa IFGoiano" />
		<!--===============================================================================================-->	
		<meta name="keywords" content="if,ifgoiano,jif,jogos,dos,institutos,federais" />
		<!--===============================================================================================-->	
		<meta name="author" content="jovenlegolas" />
		<!--===============================================================================================-->	
		<meta name="google" value="notranslate" />
		<!--===============================================================================================-->	
		<link rel="shortcut icon" href="views/templates/img/icone.png" />
		<!--=============================================== css  ==========================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/bootstrap.css" />
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/normalize.css" />
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/component.css" />
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/input.css" />
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/editar.css" />
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/nav.css" />
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="views/templates/css/tabela.css" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/templates/fonts/fontawesome/css/all.css" /> 
		<!--===============================================================================================-->
	
	</head>
	<body>
            <ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>									
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Hospitais">
											 <span class="gn-icon gn-icon-cog">Gestao de Hospitais</span></a>
										</li>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Comunicados">
											 <span class="gn-icon gn-icon-cog">Gestao de Comunicados</span></a>
										</li>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Coordenadores">
											 <span class="gn-icon gn-icon-cog">Gestao de Coordenadores</span></a>
										</li>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Equipe">
											 <span class="gn-icon gn-icon-article">Gestao de Equipe </span></a>
										</li>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Telefone">
											 <span class="gn-icon gn-icon-article">Gestao de Telefone </span></a>
										</li>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Turismo">
											 <span class="gn-icon gn-icon-article">Gestao de Atraçoes Turisticas </span></a>
									    </li>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>Transporte">
											 <span class="gn-icon gn-icon-article">Gestao de Tranporte </span></a>
										</li>
								<?php 
									if($_SESSION['sectaria'] =  true){ ?>
										<li>
											 <a href="<?php echo INCLUDE_PATH?>CadastraBoletim">
											 <span class="gn-icon gn-icon-article">Gestao do Boletim </span></a>
										</li>

								<?php }?>
																		
								</li>
							</ul><!-- /gn-menu -->
						</div><!-- /gn-scroller -->
					</nav>
				</li><!-- /gn-trigger -->

				<li class="link"><a  href="<?php echo INCLUDE_PATH?>Home"><span>Home</span></a></li>
				<li class="link"><a  href="<?php echo INCLUDE_PATH?>sair"><span>Sair</span></a></li>
					
		    </ul>
   
<?php
	session_start();
	define('BASE_DIR',__DIR__.'/');
	define('INCLUDE_PATH','/GestaoDeDocumentos/');
	date_default_timezone_set('America/Sao_Paulo');
	$_SESSION['sectaria'] =  TRUE;
	
	include('Application.php');
	include('MySql.php');
	include('controllers/Controller.php');
	include('views/View.php');
	include('models/bd.php');
	include('models/cadastro.php');
	include('models/deletar.php');
	include('models/editar.php');
	
	$application = new Application();
	$application->run();
	ob_end_flush();

?>
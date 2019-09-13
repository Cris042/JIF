<?php
	namespace controllers;
	
	class HospitaisController extends Controller
	{
		
		public function index()
		{
			if(@$_SESSION['sectaria'] == true)
			{
			    if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_hospitais();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_hospitais();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_hospitais();
				}
				\views\View::render('adm/hospitais.php');
			}
			else
			     \views\View::render('user/hospitais.php');
		}
	}
?>
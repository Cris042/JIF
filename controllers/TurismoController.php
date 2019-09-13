<?php
	namespace controllers;
	
	class TurismoController extends Controller
	{
		
		public function index()
		{
			if(@$_SESSION['sectaria'] == true)
			{
			    if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_atracao();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_turismo();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_turismo();
				}
				\views\View::render('adm/turismo.php');
			}
			else
			    \views\View::render('user/turismo.php');
		}
	}
?>
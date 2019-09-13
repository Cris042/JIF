<?php
	namespace controllers;
	
	class EquipeController extends Controller
	{
		
		public function index()
		{
			if(@$_SESSION['sectaria'] == true)
			{
			    if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_equipe();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_equipe();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_equipe();
				}
				\views\View::render('adm/equipe.php');
			}
			else
			    \views\View::render('user/equipe.php');
		}
	}
?>
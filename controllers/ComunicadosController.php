<?php
	namespace controllers;
	
	class ComunicadosController extends Controller
	{
		
		public function index()
		{ 
			if(@$_SESSION['sectaria'] == true)
			{
				if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_comunicados();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_comunicados();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_comunicados();
				}

				\views\View::render('adm/comunicados.php');
			}
			else			
				\views\View::render('user/comunicados.php');
			
		}
		
	}
?>
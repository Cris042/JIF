<?php
	namespace controllers;
	
	class CoordenadoresController extends Controller
	{
			
		public function index()
		{
			if(@$_SESSION['sectaria'] == true)
			{
				if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_coodenadores();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_coordenador();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_coordenador();
				}
				\views\View::render('adm/coordenadores.php');
			}
			else
			    \views\View::render('user/coordenadores.php');
		}

	}
?>
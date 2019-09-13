<?php
	namespace controllers;
	
	class TransporteController extends Controller
	{
		
		public function index()
		{
			if(@$_SESSION['sectaria'] == true)
			{
			    if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_transporte();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_transporte();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_transporte();
				}
				\views\View::render('adm/trasnporte.php');
			}
			else
			    \views\View::render('user/trasnporte.php');
		}
	}
?>
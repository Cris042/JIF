<?php
	namespace controllers;
	
	class TelefoneController extends Controller
	{
		
		public function index()
		{
			if(@$_SESSION['sectaria'] == true)
			{
			    if((isset($_POST['cadastra'])))
				{
					\models\cadastro::cadastro_telefones();
				}
				if((isset($_POST['editar'])))
				{
					\models\editar::editar_telefone();
				}
				if((isset($_POST['excluir'])))
				{
					\models\deletar::excluir_telefone();
				}
				\views\View::render('adm/telefone.php');
			}
			else
			    \views\View::render('user/telefone.php');
		}
	}
?>
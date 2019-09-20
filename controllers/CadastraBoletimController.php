<?php
	namespace controllers;
	
	class CadastraBoletimController extends Controller
	{
		
		public function index()
		{ 
			
			if(@$_SESSION['sectaria'] == true)
			{
				if((isset($_POST['cadastra'])))
			    {
					\models\cadastro::cadastro_boletim();		
				}
				if((isset($_POST['editar'])))
			    {
					\models\editar::editar_boletim();		
				}
				\views\View::render('adm/cadastro_boletim.php');
			}
			else			
				die("erro 404");
			
		}
		
	}
?>
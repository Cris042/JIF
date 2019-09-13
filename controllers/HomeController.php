<?php
	namespace controllers;
	
	class HomeController extends Controller
	{
		
		public function index()
		{
			\views\View::render('adm/home.php');
		}
	}
?>
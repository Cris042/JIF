<?php
	
	class MySql
	{
		private $pdo;
		
		public static function conectar()
		{
			if(!isset($pdo))
			{
				try
				{
				  $pdo = new PDO('mysql:host=localhost;dbname=jif','root','');
				}
				catch(Exception $e)
				{
				  echo '<h2>Erro ao conectar</h2>';
				}
			}

			return $pdo;
		}
	}
?>
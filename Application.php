<?php
	
	class Application{

		const DEFAULT = 'Home';
		public function run()
		{
			if(isset($_GET['url']))
			{
				$url = explode('/',$_GET['url']);
				$class = 'controllers\\'.ucfirst($url[0]).'Controller';
				$Arquivo = 'controllers/'.ucfirst($url[0]).'Controller.php';
				include($Arquivo);
			}
			else
			{
				$class = 'controllers\\'.self::DEFAULT.'Controller';
				$Arquivo = 'controllers/'.self::DEFAULT.'Controller.php';
				$url[0] = self::DEFAULT;
				include($Arquivo);
			}
			 
			$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

			if($token != @$_SESSION['user'] )
			     die("acesso negado!");
			else
			{
				$controller = new $class();
				$controller->index();
			}
		}

	}

?>
<?php
	
	class Application{

		const DEFAULT = 'Home';
		public function run()
		{
			if(isset($_GET['url']))
			{
				$url = explode('/',$_GET['url']);
				$Arquivo = 'controllers/'.ucfirst($url[0]).'Controller.php';
				if(file_exists($Arquivo))
				{
				    $class = 'controllers\\'.ucfirst($url[0]).'Controller';
				    include($Arquivo);
				}
				else
				{
					$class = 'controllers\\'.self::DEFAULT.'Controller';
					$Arquivo = 'controllers/'.self::DEFAULT.'Controller.php';
					$url[0] = self::DEFAULT;
					include($Arquivo);
				}
				   
			}
			else
			{
				$class = 'controllers\\'.self::DEFAULT.'Controller';
				$Arquivo = 'controllers/'.self::DEFAULT.'Controller.php';
				$url[0] = self::DEFAULT;
				include($Arquivo);
			}
			 
			
			$controller = new $class();
			$controller->index();
		
		}

	}

?>
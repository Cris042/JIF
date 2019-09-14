<?php
    include('../../lib/vendor/autoload.php');
   
	ob_start();
		include('../../views/pages/pdf/comunicados.php');
		$conteudo = ob_get_contents();
	ob_end_clean();

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($conteudo);
    $mpdf->Output('comunicados.pdf','D');
?>

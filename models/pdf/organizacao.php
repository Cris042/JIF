<?php
    include('../../lib/vendor/autoload.php');
   
	ob_start();
		include('../../views/pages/pdf/organizacao.php');
		$conteudo = ob_get_contents();
	ob_end_clean();

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($conteudo);
    $mpdf->Output('organizaçao.pdf','D');
?>

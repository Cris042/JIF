<?php
    include('../../Lib/vendor/autoload.php');
   
	ob_start();
		include('../../views/pages/pdf/transporte.php');
		$conteudo = ob_get_contents();
	ob_end_clean();

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($conteudo);
    $mpdf->Output('trasportes.pdf','D');
?>

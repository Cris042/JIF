<?php
    include('../../lib/vendor/autoload.php');
   
	ob_start();
		include('../../views/pages/pdf/telefones.php');
		$conteudo = ob_get_contents();
	ob_end_clean();

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($conteudo);
    $mpdf->Output('telefones.pdf','D');
?>

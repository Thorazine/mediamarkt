<?php
	include '../Core/config.php';
	require '../vendor/autoload.php';

	$user = App::getUser();

	$dompdf = new Dompdf\Dompdf();
	$dompdf->loadHtml('hello world');
	// $dompdf->set_option('defaultFont', 'Courier');
	// $dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$dompdf->stream("sample.pdf");
?>

<?php
/**
 * Html2Pdf Library - example
 *
 * HTML => PDF converter
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 */
// attention au chemin de l'autoload de la librairie html2pdf!!!
require_once  '/../../../vendor/autoload.php';



// echo "<br>tableau indice prenom: $firstname , indice nom: $lastname<br>";

// die();
try {
	// get the HTML
	ob_start();
	include dirname(__FILE__) . '/res/facture_hotel.php';
	$content = ob_get_clean();

	$html2pdf = new Html2Pdf('P', 'A4', 'fr');
	$html2pdf->pdf->SetDisplayMode('fullpage');
	$html2pdf->writeHTML($content);
	$html2pdf->Output('facture_hotel.pdf');
} catch (Html2PdfException $e) {
	$formatter = new ExceptionFormatter($e);
	echo $formatter->getHtmlMessage();
}

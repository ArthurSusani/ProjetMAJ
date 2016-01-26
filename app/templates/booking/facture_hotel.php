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





try {
	// get the HTML
	ob_start();
	//chemin du template pour la génération du pdf: C:\xampp\htdocs\ProjetMAJ\app\templates\booking\res
	include dirname(__FILE__) . '/res/facture_hotel.php';

	$content = ob_get_clean();

	$html2pdf = new Html2Pdf('P', 'A4', 'fr');
	$html2pdf->pdf->SetDisplayMode('fullpage');
	$html2pdf->writeHTML($content);
	//soucis pour écrire le pdf ici: http://stackoverflow.com/questions/28853871/fopen-remote-host-file-access-not-accepted-on-a-local-file
	//attention au chemin en premier argument! ici on utilise un dossier dédié pour stocker toutes les factures
	
	//dabord on affiche le pdf dans le navigateur
	//on recupère l'id du booking pour le sufixer le nom du pdf...
	//echo $id_booking ;
	//die();
	$html2pdf->Output(__DIR__ .'\res\pdf\facture_hotel_'.$id_booking.'.pdf');
	//ensuite on sauvegarder le fichier dans le dossier 'pdf' du dossier res
	$html2pdf->Output(__DIR__ .'\res\pdf\facture_hotel_'.$id_booking.'.pdf','F');
} catch (Html2PdfException $e) {
	$formatter = new ExceptionFormatter($e);
	echo $formatter->getHtmlMessage();
}

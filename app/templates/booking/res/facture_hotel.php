<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
-->
</style>
<page backcolor="#FEFEFE"  backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 60%;">
            </td>
            <td style="width: 40%; color: #444444; font-size: 120%; ">
                <img style="width: 100%;" src="../res/logo_projet_hotel_grand.png" alt="Logo"><br>
                <b>Facture hotel webforce3</b>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Client :</td>
            <td style="width:36%">M. <?= $firstname .' '. $lastname?></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Adresse :</td>
            <td style="width:36%">
                <?= $adressClient?><br>
                <?= $postcodeClient.' - '. $cityClient ?><br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Email :</td>
            <td style="width:36%"><?= $mail?></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Tel :</td>
            <td style="width:36%"><?= $telephone?></td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:50%; ">Piennes, le <?= date('d/m/Y'); ?></td>
        </tr>
    </table>
    <br>
    <i>
        <b><u>Objet </u>: &laquo; Facture client Hotel Webforce3 &raquo;</b><br>
        Compte client : <?= $id_user?><br>
        Référence du Dossier : <?= $id_booking ?><br>
    </i>
    <br>
    <br>
    Madame, Monsieur, Cher Client,<br>
    <br>
    <br>
    Voici le récapitulatif de votre facture de la réservation <b>N°<?= $id_booking ?></b> concernant le séjour du <?= date('d/m/Y',strtotime($begin)) ?> au <?= date('d/m/Y',strtotime($end)) ?> <br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 25%">Réf client</th>
            <th style="width: 25%">Numéro chambre(s)</th>
            <th style="width: 25%">Nombre de jour(s)</th>
            <th style="width: 25%">Prix TTC</th>
        </tr>
    </table>
<?php
$nb_booking = 1;
$produits = array();
$total = 0;
for ($k = 0; $k < $nb_booking; $k++) {
	$nom_chambre = "chambre n°" . $id_room;
    $total=$price * $bookingDays;
	?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 25%; text-align: center"><?= $id_user; ?></td>
            <td style="width: 25%; text-align: center"><?= $id_room; ?></td>
            <td style="width: 25%; text-align: center"><?= $bookingDays; ?></td>
            <td style="width: 25%; text-align: center;"><?= number_format($price, 2, ',', ' '); ?> &euro;</td>
        </tr>
    </table>
<?php
}
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;"><?= number_format($price , 2, ',', ' '); ?> &euro;</th>
        </tr>
    </table>
    <nobreak>
        <br>
        En votre aimable règlement, <br>
        <br>
        <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%; ">
                    Mr Julien Baudouin<br>
                    Service Relation Client<br>
                    Tel : 33 (0) 1 00 00 00 00<br>
                    Email : baudouinjulien@free.fr<br>
                </td>
            </tr>
        </table>
    </nobreak>
</page>
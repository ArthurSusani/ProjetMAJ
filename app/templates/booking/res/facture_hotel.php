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
            <td style="width:36%">M. <?php echo $firstname .' '. $lastname?></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Adresse :</td>
            <td style="width:36%">
                <?php echo $adressClient?><br>
                <?php echo $postcodeClient.' - '. $cityClient ?><br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Email :</td>
            <td style="width:36%"><?php echo $mail?></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Tel :</td>
            <td style="width:36%"><?php echo $telephone?></td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:50%; ">Piennes, le <?php echo date('d/m/Y'); ?></td>
        </tr>
    </table>
    <br>
    <i>
        <b><u>Objet </u>: &laquo; Facture client Hotel Webforce3 &raquo;</b><br>
        Compte client : Id client table client<br>
        Référence du Dossier : Id table booking<br>
    </i>
    <br>
    <br>
    Madame, Monsieur, Cher Client,<br>
    <br>
    <br>
    Voici le récapitulatif de votre facture concernant le dossier <b>Id table booking</b><br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 20%">Réf client</th>
            <th style="width: 20%">Numéro chambre</th>
            <th style="width: 20%">Prix chambre/jour</th>
            <th style="width: 20%">Nombre de jour</th>
            <th style="width: 20%">Prix TTC</th>
        </tr>
    </table>
<?php
$nb_booking = 2;
$produits = array();
$total = 0;
for ($k = 0; $k < $nb_booking; $k++) {
	$num = rand(100000, 999999);
	$nom = "chambre n°" . rand(1, 100);
	$qua = rand(1, 20);
	$prix = rand(100, 9999) / 100.;
	$total += $prix * $qua;
	$produits[] = array($num, $nom, $qua, $prix, rand(0, $qua));
	?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 20%; text-align: center"><?php echo $num; ?></td>
            <td style="width: 20%; text-align: center"><?php echo $nom; ?></td>
            <td style="width: 20%; text-align: center"><?php echo number_format($prix, 2, ',', ' '); ?> &euro;</td>
            <td style="width: 20%; text-align: center"><?php echo $qua; ?></td>
            <td style="width: 20%; text-align: center;"><?php echo number_format($prix * $qua, 2, ',', ' '); ?> &euro;</td>
        </tr>
    </table>
<?php
}
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($total, 2, ',', ' '); ?> &euro;</th>
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
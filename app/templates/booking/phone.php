<?php $this->layout('layout', ['title' => 'Telephone !']) ?>

<?php $this->start('main_content') ?>
<?php if (isset($_POST['submit'])) {
	phpmailer();
}
?>

<p>Numéro de téléphone : 0382547030</p>
<form action="#" method="post" accept-charset="utf-8">
<button type="submit" name="submit">LE MAIL</button>
</form>


<?php $this->stop('main_content') ?>
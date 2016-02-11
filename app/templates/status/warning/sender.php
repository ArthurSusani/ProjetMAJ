<?php $this->layout('layout', ['title' => 'Telephone !']) ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/status.css') ?>">
<?php $this->stop('css') ?>



<?php $this->start('main_content') ?>
<div>
<p><?php echo $_POST['string']; ?></p>
</div>
<?php $this->stop('main_content') ?>
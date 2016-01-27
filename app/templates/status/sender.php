<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/status.css') ?>">
<?php $this->stop('css') ?>



<?php $this->start('main_content') ?>
<div class="windowSender">
<p><?php echo $string; ?></p>
</div>
<?php $this->stop('main_content') ?>
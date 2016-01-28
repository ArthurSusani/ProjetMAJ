<?php $this->layout('layout', ['title' => 'Warning'] ) ?>

<?php $content = $nb.";".$this->url($link); ?>
<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/status.css') ?>">
	<meta http-equiv="refresh" content=" <?php echo $content ?> " />
<?php $this->stop('css') ?>

<?php $this->start('main_content') ?>
<div class="windowSender">
<p><?php echo $string; ?></p>
</div>
<?php $this->stop('main_content') ?>
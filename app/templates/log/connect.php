<<<<<<< HEAD
<?php $this->layout('layout', ['title' => 'Connexion !']) ?>

<?php $this->start('main_content') ?>
	<h2>Espace de connexion.</h2>
=======
<?php $this->layout('layout', ['title' => 'Connectez-vous!']) ?>

<?php $this->start('main_content') ?>
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd

	<form action="<?= $this->url('log_confirm') ?>" method="post" accept-charset="utf-8" id="form_connect">
		<div class="input_div">
			<label for="account">Email</label>
			<input type="text" name="account" value="" placeholder="Votre email">
			<label for="pwdVal">Mot de passe</label>
			<input type="password" name="pwdVal" value="" placeholder="Votre mot de passe">
		</div>
		<div class="clearfix"></div>
		<button id="btn_connect" class="btn" type="submit">Connexion</button>
	</form>




<?php $this->stop('main_content') ?>

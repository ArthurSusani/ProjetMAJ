<?php $this->layout('layout', ['title' => 'Connectez-vous!']) ?>

<?php $this->start('main_content') ?>

	<form action="<?= $this->url('log_confirm') ?>" method="post" accept-charset="utf-8" id="form_connect">
		<div class="input_div">
			<label for="account">Email</label>
			<input type="text" name="account" value="" placeholder="Votre email">
			<label for="pwdVal">Mot de passe</label>
			<input type="password" name="pwdVal" value="" placeholder="Votre mot de passe">
		</div>
		<div class="clearfix"></div>
		<button type="submit">Connexion</button>
	</form>




<?php $this->stop('main_content') ?>

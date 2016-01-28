<?php $this->layout('layout', ['title' => 'Connection !']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's Connect.</h2>

	<form action="<?= $this->url('log_confirm') ?>" method="post" accept-charset="utf-8" id="form_connect">
		<div class="input_div">
			<label for="account">Identifiant</label>
			<input type="text" name="account" value="" placeholder="Votre identifiant">
			<label for="pwdVal">Mot de passe</label>
			<input type="password" name="pwdVal" value="" placeholder="Votre mot de passe">
		</div>
		<div class="clearfix"></div>
		<button type="submit">Connexion</button>
	</form>




<?php $this->stop('main_content') ?>

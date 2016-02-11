<?php $this->layout('layout', ['title' => 'Connexion !']) ?>

<?php $this->start('main_content') ?>
	<h2>Espace de connexion.</h2>

	<form action="<?= $this->url('log_confirm') ?>" method="post" accept-charset="utf-8" id="form_connect">
		<div class="input_div">
			<label for="account">Identifiant</label>
			<input type="text" name="account" value="" placeholder="Votre identifiant">
			<label for="pwdVal">Mot de passe</label>
			<input type="password" name="pwdVal" value="" placeholder="Votre mot de passe">
		</div>
		<div class="clearfix"></div>
		<button id="btn_connect" class="btn" type="submit">Connexion</button>
	</form>




<?php $this->stop('main_content') ?>

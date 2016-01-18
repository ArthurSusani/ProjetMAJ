<?php $this->layout('layout', ['title' => 'Inscription !'])?>

<?php $this->start('main_content')?>
	<h2>Let's register.</h2>

	<form action="#" method="post" accept-charset="utf-8" id="form_register">
		<div class="input_div">
			<label for="firstname">Prénom</label>
			<input type="text" name="firstname" value="" placeholder="Votre prenom">
		</div>
		<div class="input_div">
			<label for="lastname">Nom</label>
			<input type="text" name="lastname" value="" placeholder="Votre nom">
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="address">Adresse </label>
			<input type="text" name="address" value="" placeholder="Votre adresse">
		</div>
		<div class="input_div">
			<label for="city">Ville </label>
			<input type="text" name="city" value="" placeholder="Votre ville">
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="birthday">Date de naissance</label>
			<input type="text" name="birthday" value="" placeholder="Votre date de naissance">
		</div>
		<div class="input_div">
			<label for="mail">Votre E-mail</label>
			<input type="text" name="mail" value="" placeholder="Votre courriel">
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="password">Mot de passe</label>
			<input type="password" name="password" value="" placeholder="Entrez votre mot de passe">
		</div>
		<div class="input_div">
			<label for="password_confirm">Confirmez le mot de passe</label>
			<input type="password" name="password_confirm" value="" placeholder="Confirmer votre mort de passe">
		</div>
		<div class="clearfix"></div>
		<div id="button">
			<button type="submit" class="btn" name="save" value="send">Enregister</button>
		</div>
	</form>
 <?php
//var_dump($_POST);
?>

<?php $this->stop('main_content')?>

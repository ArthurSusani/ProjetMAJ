<?php $this->layout('layout', ['title' => 'Inscription !'])?>

<?php $this->start('main_content')?>
<!-- ajout d'un code javascript pour vérifier le formulaire -->
<script src="<?=$this->assetUrl('js/checkForm.js')?>" type="text/javascript" charset="utf-8" async defer></script>
	<h2>Enregistrment compte client</h2>

	<form action="#" method="post" accept-charset="utf-8" id="form_register">
		<div class="input_div">
			<label for="firstname">Prénom</label><p>Veuillez entrer votre prénom!</p>
			<input type="text" name="firstname" value="" placeholder="Votre prenom">

		</div>
		<div class="input_div">
			<label for="lastname">Nom</label><p>Veuillez entrer votre nom!</p>
			<input type="text" name="lastname" value="" placeholder="Votre nom">
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="address">Adresse postale</label>
			<input type="text" name="address" value="" placeholder="rue...">
		</div>
		<div class="input_div">
			<label for="postalCode">Code postal</label>
			<input type="text" name="postalCode" value="" placeholder="#####">
		</div>
		<div class="input_div">
			<label for="city">Ville </label>
			<input type="text" name="city" value="" placeholder="Votre ville">
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="birthday">Date de naissance (format: jour/mois/année 00/00/0000)</label>
			<input type="date" name="birthday" value="">
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


<?php $this->stop('main_content')?>

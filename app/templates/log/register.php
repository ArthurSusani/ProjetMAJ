<?php $this->layout('layout', ['title' => 'Inscription !'])?>

<?php $this->start('main_content')?>
<!-- ajout d'un code javascript pour vérifier le formulaire -->
<!-- on peut mettre un attribut required pour forcer le remplissage d'un input en javascript sur les navigateurs récents -->
<script src="<?=$this->assetUrl('js/checkForm.js')?>" type="text/javascript" charset="utf-8" async defer></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<h2>Enregistrement compte client:</h2>
	<hr>

	<form action="#" method="post" accept-charset="utf-8" id="form_register">
		<div class="input_div">
			<label for="firstname">Prénom</label><p>Veuillez entrer votre prénom!</p>
			<input  type="text" name="firstname" value="" placeholder="Votre prenom">

		</div>
		<div class="input_div">
			<label for="lastname">Nom</label><p>Veuillez entrer votre nom!</p>
			<input  type="text" name="lastname" value="" placeholder="Votre nom">
		</div>
		<div class="clearfix"></div>
		<div>
			<div class="input_div">
				<label for="address">Adresse postale</label><p>Veuillez entrer votre adresse postale!</p>
				<input  type="text" name="address" value="" placeholder="rue...">
			</div>
			<div class="input_div">
				<label for="postalCode">Code postal</label><p>Veuillez entrer votre code postal!</p>
				<input  type="text" name="postalCode" value="" placeholder="#####">
			</div>
			<div class="input_div">
				<label for="city">Ville </label><p>Veuillez entrer votre ville</p>
				<input  type="text" name="city" value="" placeholder="Votre ville">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="birthday">Date de naissance (format: jour/mois/année 00/00/0000)</label>
			<p>Veuillez entrer votre date de naissance!</p>
			<input  type="date" name="birthday" value="">
		</div>
		<div class="input_div">
			<label for="mail">Votre E-mail</label><p>Veuillez entrer votre mail!</p>
			<input  type="email" name="mail" value="" placeholder="Votre courriel">
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="password">Mot de passe</label><p>Veuillez entrer votre mot de passe!</p><br/>
			<input  type="password" name="password" value="" placeholder="Entrez votre mot de passe">
		</div>
		<div class="input_div">
			<label for="password_confirm">Confirmez le mot de passe</label>
			<!-- ajout d'un 2ème texte d'erreur pour le 2ème pass pour prévenir s'il n'est pas le meme que le premier -->
			<p>Veuillez entrer un mot de passe identique!</p>
			<p>Veuillez entrer votre mot de passe!</p>
			<input  type="password" name="password_confirm" value="" placeholder="Confirmer votre mort de passe">
		</div>
		<div class="clearfix"></div>
		<div id="button">
			<button type="submit" class="btn" name="save" value="send">Enregister</button>
		</div>
	</form>


<?php $this->stop('main_content')?>

<?php
	include '../inc/header.php';
?>
	<div class="contact">
		<h2>Nous contacter</h2>

		<div>
			
		</div>
		<div class="form1">
				
		<form action="#" method="post" accept-charset="utf-8" id="cont">
			<p>Titre :</p><select name="titre" size="1">
				<option value="mme">Madame</option>
				<option value="mr">Monsieur</option>
			</select>
			<p>Nom :</p><input type="text" name="nom" value="" placeholder="">
			<p>Prénom :</p><input type="text" name="prenom" value="" placeholder="">
			<p>Téléphone :</p><input type="tel" name="tel" value="" placeholder="">
			<p>Email :</p><input type="email" name="email" value="" placeholder="">
			<p>Sujet :</p><input type="text" name="sujet" value="" placeholder="">
			<p>Message :</p><textarea name="message" form="cont" cols="60" rows="6"></textarea>
			<input type="submit" name="" value="Envoyer">
		</form>

		</div>
	</div>
<?php
	include '../inc/footer.php';
?>
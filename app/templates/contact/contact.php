<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
	<div class="contact">
		<h2>Nous contacter</h2>
				
		<form action="#" method="post" accept-charset="utf-8" id="form_contact">
			<p>Titre :</p>
			<select name="title" size="1">
				<option value="Madame">Madame</option>
				<option value="Monsieur">Monsieur</option>
			</select>
			<p>Nom :</p><input type="text" name="firstname" value="" placeholder="">
			<p>Prénom :</p><input type="text" name="lastname" value="" placeholder="">
			<p>Téléphone :</p><input type="tel" name="phone" value="" placeholder="">
			<p>Email :</p><input type="email" name="mail" value="" placeholder="">
			<p>Sujet :</p><input type="text" name="subject" value="" placeholder="">
			<p>Message :</p><textarea name="message" form="form_contact" cols="60" rows="6"></textarea>
			<input type="submit" class="btn" name="send" value="Envoyer">
		</form>
	</div>
	
<?php $this->stop('main_content') ?>

<?php $this->layout('layout', ['title' => 'contact']) ?>

<?php $this->start('main_content') ?>
	<div class="contact">
				
		<form action="#" method="post" accept-charset="utf-8" id="form_contact">
			<label>Titre* :</label><br>
			<select name="title" size="1">
				<option value="Madame">Madame</option>
				<option value="Monsieur">Monsieur</option>
			</select>
			<div class="input_div">
				<label for="firstname">Nom* :</label>
				<input type="text" name="firstname" value="" placeholder="">
				<label for="lastname">Prénom* :</label>
				<input type="text" name="lastname" value="" placeholder="">
			</div>
			<div class="input_div">	
				<label for="phone">Téléphone* :</label>
				<input type="tel" name="phone" value="" placeholder="">
				<label for="mail">Adresse Email* :</label>
				<input type="email" name="mail" value="" placeholder="">
			</div>
			<div class="input_div">
				<label for="subject">Sujet* :</label>
				<input type="text" name="subject" value="" placeholder=""><br>
				<label for="message">Message* :</label>
				<textarea name="message" form="form_contact" cols="60" rows="6"></textarea>
			</div>
			<br>
			<input type="submit" class="btn" name="send" value="Envoyer">
		</form>
		<br>
		<p>* Champs obligatoires</p>
	</div>
	
<?php $this->stop('main_content') ?>

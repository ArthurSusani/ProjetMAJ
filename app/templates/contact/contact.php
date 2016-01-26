<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<p> En cas de soucis, d'écrivez nous votre problème. Nous y repondrons dans les plus breve délai. </p>
	<div class="contact">
		<h2>Nous contacter</h2>
		
		<form action="<?= $this->url('contact_phpmailer') ?>" method="post" accept-charset="utf-8" id="form_contact">
			<p>Titre :</p>
			<div class="input_div" id="select_contact">
				<select name="title" size="1">
					<option value="Madame">Madame</option>
					<option value="Monsieur">Monsieur</option>
				</select>
			</div>
			<hr>
			<div class="input_div">
				<label for="firstname">Nom :</label>
				<input type="text" name="firstname" value="<?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="lastname">Prénom :</label>
				<input type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>" placeholder="">
			</div>
			<div class="input_div">	
				<label for="phone">Téléphone :</label>
				<input type="tel" name="phone" value="<?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];}?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="mail">Adresse Email :</label>
				<input type="email" name="mail" value="<?php if(isset($_SESSION['mail'])){echo $_SESSION['mail'];}?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="subject">Sujet :</label>
				<input type="text" name="subject" value="" placeholder="">
			</div>
			<div class="clearfix"></div>
			<div class="input_div">
				<label for="message">Message :</label>
				<textarea name="message" form="form_contact" cols="134" rows="10"></textarea>
			</div>

			<button type="submit" id="button">Envoyer</button>
		</form>
	</div>
	
<?php $this->stop('main_content') ?>

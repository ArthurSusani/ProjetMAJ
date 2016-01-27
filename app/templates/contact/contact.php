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
				<label for="firstname">Nom :</label><!-- Si connecté, rempli les champs avec les infos du compte -->
				<input type="text" name="firstname" value="<?php if(isset($_SESSION['user']['firstname'])){
					echo $_SESSION['user']['firstname'];
				}elseif (isset($_POST['firstname'])){
					echo $_POST['firstname'];
					}; ?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="lastname">Prénom :</label>
				<input type="text" name="lastname" value="<?php if(isset($_SESSION['user']['lastname'])){
					echo $_SESSION['user']['lastname'];
				}elseif (isset($_POST['lastname'])){
					echo $_POST['lastname'];
					}; ?>" placeholder="">
			</div>
			<div class="input_div">	
				<label for="phone">Téléphone :</label>
				<input type="tel" name="phone" value="<?php if(isset($_SESSION['user']['phone'])){
					echo $_SESSION['user']['phone'];
				}elseif (isset($_POST['phone'])){
					echo $_POST['phone'];
					}; ?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="mail">Adresse Email :</label>
				<input type="email" name="mail" value="<?php if(isset($_SESSION['user']['mail'])){
					echo $_SESSION['user']['mail'];
				}elseif (isset($_POST['mail'])){
					echo $_POST['mail'];
					}; ?>" placeholder="">
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

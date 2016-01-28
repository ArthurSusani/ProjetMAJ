<?php $this->layout('layout', ['title' => 'Bureau des avis']) ?>

<?php $this->start('main_content') ?>
<div class="contact">

	<form action="#" method="post" accept-charset="utf-8" id="form_contact">
			<div class="input_div">
				<label for="firstname">Nom :</label>
				<input type="text" name="firstname" value="<?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="lastname">Prénom :</label>
				<input type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="room">Chambre :</label>
				<select name="room" size="1">
					<option value="Chambre du roi">Chambre du roi</option>
					<option value="Chambre de la dame">Chambre de la dame</option>
					<option value="Chambre du fou">Chambre du fou</option>
					<option value="Chambre du cavalier">Chambre du cavalier</option>
					<option value="Chambre de la tour">Chambre de la tour</option>
				</select>
			</div>
			<div class="clearfix"></div>
			<div class="input_div">
				<label for="message">Commentaire :</label>
				<textarea name="message" form="form_contact" cols="95" rows="15"></textarea>
			</div>
			<button type="submit" id="button">Envoyer</button>
		</form>
	
</div>
<?php $this->stop('main_content') ?>
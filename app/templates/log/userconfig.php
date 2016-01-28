<?php $this->layout('layout', ['title' => 'Modifier vos infos']) ?>

<?php $this->start('main_content') ?>
	<form action="<?= $this->url('log_usersave') ?>" method="post" accept-charset="utf-8" id="form_user_config">
		<div class="input_div">
			<label for="firstname">Prénom</label>
			<input  type="text" name="firstname" value="<?php echo $user['firstname'] ?>" placeholder="">
		</div>
		<div class="input_div">
			<label for="lastname">Nom</label>
			<input  type="text" name="lastname" value="<?php echo $user['lastname'] ?>" placeholder="">
		</div>
		<div class="clearfix"></div>
		<div>
			<div class="input_div">
				<label for="address">Adresse postale</label>
				<input  type="text" name="address" value="<?php echo $user['adressClient'] ?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="postalCode">Code postal</label>
				<input  type="text" name="postalCode" value="<?php echo $user['postcodeClient'] ?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="city">Ville </label>
				<input  type="text" name="city" value="<?php echo $user['cityClient'] ?>" placeholder="Votre ville">
			</div>
			<div class="input_div">
				<label for="phone">Téléphone </label>
				<input  type="number" name="phone" value="<?php echo $user['telephone'] ?>" placeholder="">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="birthday">Date de naissance (format: jour/mois/année 00/00/0000)</label>
			<input  type="date" name="birthday" value="<?php echo $user['birthday'] ?>">
		</div>
		<div class="input_div">
			<label for="mail">Votre E-mail</label>
			<input  type="email" name="mail" value="<?php echo $user['mail'] ?>" placeholder="">
		</div>
		<div class="clearfix"></div>
		<button type="submit">Sauvegarder changemment</button>
	</form>



<?php $this->stop('main_content') ?>
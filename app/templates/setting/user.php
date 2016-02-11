<?php $this->layout('layout', ['title' => 'Configuration Admin !']) ?>

<?php $this->start('main_content') ?>

<h2>Information général</h2>
	<form action="<?= $this->url('setting_usersave', ['id' => $user['id'] ]) ?>" method="post" accept-charset="utf-8" id="form_register">
		<hr>
		<div class="input_div">
		<label for="role">Choisir le role :</label>
		<select name="role" >
			<option value="admin"<?php if($user['role'] =="admin"){echo "selected";}?>>Admin</option>
			<option value="user"<?php if($user['role'] =="user"){echo "selected";}?>>User</option>
		</select>
		</div>
		<div class="clearfix"></div>

		<div class="input_div">
			<label for="firstname">Prénom</label><p>prenom</p>
			<input  type="text" name="firstname" value="<?php echo $user['firstname'] ?>" placeholder="">

		</div>
		<div class="input_div">
			<label for="lastname">Nom</label><p>nom</p>
			<input  type="text" name="lastname" value="<?php echo $user['lastname'] ?>" placeholder="">
		</div>
		<div class="clearfix"></div>
		<div>
			<div class="input_div">
				<label for="address">Adresse postale</label><p>adresse postal</p>
				<input  type="text" name="address" value="<?php echo $user['adressClient'] ?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="postalCode">Code postal</label><p>code postal</p>
				<input  type="text" name="postalCode" value="<?php echo $user['postcodeClient'] ?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="city">Ville </label><p>ville</p>
				<input  type="text" name="city" value="<?php echo $user['cityClient'] ?>" placeholder="Votre ville">
			</div>
			<div class="input_div">
				<label for="phone">Téléphone </label><p>phone</p>
				<input  type="number" name="phone" value="<?php echo $user['telephone'] ?>" placeholder="">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="input_div">
			<label for="birthday">Date de naissance (format: jour/mois/année 00/00/0000)</label><p>born</p>
			<input  type="date" name="birthday" value="<?php echo $user['birthday'] ?>">
		</div>
		<div class="input_div">
			<label for="mail">Votre E-mail</label><p>mail</p>
			<input  type="email" name="mail" value="<?php echo $user['mail'] ?>" placeholder="">
		</div>
		<div class="clearfix"></div>
		<button type="submit">Sauvegarder changemment</button>
	</form>
	<form action=" <?= $this->url('setting_userdel') ?> " method="post" accept-charset="utf-8">
	<button type="submit" name="id_user" value="<?php echo $user['id'] ?>">Supprimer Utilisateur</button>
	</form>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/config.css') ?>">
<?php $this->stop('css') ?>
<?php $this->layout('layout', ['title' => 'Modifier vos infos']) ?>

<?php $this->start('main_content') ?>

	<h2>Information personnel</h2>
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
			<label for="birthday">Date de naissance (format: jour/mois/année)</label>
			<input  type="date" name="birthday" value="<?php echo $user['birthday'] ?>">
		</div>
		<div class="input_div">
			<label for="mail">Votre E-mail</label>
			<input  type="email" name="mail" value="<?php echo $user['mail'] ?>" placeholder="">
		</div>
		<div class="clearfix"></div>
		<button type="submit">Sauvegarder changemment</button>
	</form>
	<hr>
	<h2> Réservation </h2>
	<table>
	<thead>
		<tr>
			<th>N° de reserv.</th>
			<th>Nom</th>
			<th>Chambre</th>
			<th>Début</th>
			<th>Fin</th>
			<th>Enregistrement</th>
			<th>Prix Total</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($book as $key => $value): ?>
			<tr>
				<td><?= $book[$key]['id_booking']; ?></td>
				<td><?= $user['lastname']." ".$user['firstname']; ?></td>
				<td><?= $book[$key]['id_room']; ?></td>
				<td><?= $book[$key]['begin']; ?></td>
				<td><?= $book[$key]['end']; ?></td>
				<td><?= $book[$key]['validate']; ?></td>
				<td><?= $book[$key]['price']; ?></td>
				<td>				
					<form action="<?= $this->url('log_bookdel', ['id' => $value['id_booking'] ]) ?>" method="get" accept-charset="utf-8">
						<button type="submit">X</button>
					</form>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<hr>
<h2>Facture PDF</h2>
<?php foreach ($book as $key => $value): ?>
	<div class="lien_pdf">
		<p><?php echo $book[$key]['validate'] ?></p>
		<a href="<?= $this->assetUrl('pdf/facture_hotel_'.$value['id_booking'].'.pdf') ?>" title=""><img src="<?= $this->assetUrl('img/icon_pdf.png') ?>" alt=""></a>
	</div>
			
<?php endforeach; ?>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/config.css') ?>">
<?php $this->stop('css') ?>
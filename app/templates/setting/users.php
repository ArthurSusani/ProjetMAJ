<?php $this->layout('layout', ['title' => 'Configuration Admin !']) ?>

<?php $this->start('main_content') ?>

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Date de nais.</th>
			<th>Adresse</th>
			<th>Code postal</th>
			<th>Ville</th>
			<th>Téléphone</th>
			<th>Email</th>
			<th>Role</th>
			<th>Modif</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $key => $value):?>
		<tr>
			<td><?php echo $value['id'] ?></td>
			<td><?php echo $value['firstname'] ?></td>
			<td><?php echo $value['lastname'] ?></td>
			<td><?php echo $value['birthday'] ?></td>
			<td><?php echo $value['adressClient'] ?></td>
			<td><?php echo $value['postcodeClient'] ?></td>
			<td><?php echo $value['cityClient'] ?></td>
			<td><?php echo $value['telephone'] ?></td>
			<td><?php echo $value['mail'] ?></td>
			<td><?php echo $value['role'] ?></td>
			<td>
				<form action="<?= $this->url('setting_user') ?>" method="post" accept-charset="utf-8">
					<button value="<?php echo $value['id']; ?>" name="id_users" type="submit">X</button>
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/config.css') ?>">
<?php $this->stop('css') ?>
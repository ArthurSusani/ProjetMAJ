<?php $this->layout('layout', ['title' => 'Administration Réservation !']) ?>

<?php $this->start('main_content') ?>
	

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>utilisateur</th>
			<th>Chambre</th>
			<th>Duree</th>
			<th>Date de reservation</th>
			<th>Total TTC</th>
			<th>Modif</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($books as $key => $value): ?>
			<tr>
				<td><?= $value['id_booking']; ?></td>
				<td><?= $value['id_user']; ?></td>
				<td><?=  '2' ?></td>
				<td><?= $value['begin']." à ".$value['end']; ?></td>
				<td><?= $value['validate']; ?></td>
				<td><?= $value['price']; ?></td>
				<td>
					<form action="<?= $this->url('setting_bookdel') ?>" method="post" accept-charset="utf-8">
						<button type="submit" value="<?php echo $value['id'] ?>" name="id_book">X</button>
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
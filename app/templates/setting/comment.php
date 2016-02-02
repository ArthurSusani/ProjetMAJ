<?php $this->layout('layout', ['title' => 'Administration des Avis']) ?>

<?php $this->start('main_content') ?>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Room</th>
			<th>ID user</th>
			<th>Date</th>
			<th>Commentaire</th>
			<th>Modif</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($comment as $key => $value): ?>
			<tr>
				<td><?= $value['id']; ?></td>
				<td><?= $value['room']; ?></td>
				<td><?= $value['id_logs']; ?></td>
				<td><?= $value['datestart']." a ".$value['dateend']; ?></td>
				<td><?= $value['comment']; ?></td>
				<td>
					<form action="<?= $this->url('setting_commentdel') ?>" method="post" accept-charset="utf-8">
						<button type="submit" name="id_comment" value="<?php echo $value['id']; ?>">X</button>
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
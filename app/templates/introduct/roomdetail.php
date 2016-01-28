<?php $this->layout('layout', ['title' => 'Chambre']) ?>

<?php $this->start('main_content') ?>

<div id="rooms">
	<nav>
	<h3>Nos chambres :</h3>
		<ul>
		<?php foreach ($allRoom as $room) : ?>
		    <li>
		    <a href="<?= $this->url('introduct_roomdetail', ['id' => $room['id']]) ?>">
		    <?= $room['name'] ?></a>
		    </li>
		    <?php endforeach ?>
		</ul>
	
	</nav>

	<div class='chambre'>
		<ul>
		    <?php foreach($rooms as $room) : ?>
		        <li>
			       	<h4><?= $room['name'] ?></h4>
			        <img src="<?= $room['picture']?>" height="400" width="700" >
			        <p>Prix : <?= $room['price'] ?> €</p>
		        </li>
		    <?php endforeach ?>
		</ul>
	</div>
</div>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/presentation.css') ?>">
<?php $this->stop('css') ?>
<?php $this->layout('layout', ['title' => 'L\'hôtel']) ?>

<?php $this->start('main_content') ?>

<div id="presentation">

		<!--<div class="flexslider">
			<ul class="slides">
				<li><a class="grouped_elements" rel="group1" href="image_big_1.jpg"><img src="../../public/assets/img/hotel_front.jpg" alt="hotel_front"/></a></li>
				<li><a class="grouped_elements" rel="group1" href="image_big_2.jpg"><img src="../../public/assets/img/hotel_lobby.jpg" alt="hotel_lobby"/></a></li>
				<li><a class="grouped_elements" rel="group1" href="image_big_3.jpg"><img src="../../public/assets/img/hotel_restaurant.jpg" alt="hotel_restaurant"/></a></li>
			</ul>
		</div>-->
<<<<<<< HEAD
		<img src="<?= $this->assetUrl('img/hotel_front.jpg') ?>" alt="" height="400" width="700">
=======
	<img src="../../public/assets/img/hotel_front.jpg" alt="" height="400" width="600">
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd
	<p>L’Hôtel WebForce 3 se situe, en plein cœur de Piennes,
	dans la partie de la rue Gino Raimondi la plus ancienne, qui était au XIIIème
	siècle le chemin du fossé de la ville de Piennes et qui commença à être bâtie au XVIème siècle.
	L’Hôtel de La Reine Margot s’y trouvait en bord de Piennes et D’Artagnan a habité cette rue.
	La réception nichée derrière un ancien comptoir de librairie dans une pièce donnant
 	sur la rue, vous accueille 24h/24h et 7j/7j.</p>

 	<img src="../../public/assets/img/hotel_lobby.jpg" alt="" height="400" width="600">
	<p>Les murs dont les pierres sont mises à nu vous rappellent que vous êtes dans le vieux Piennes.
 	L’atmosphère y est chaleureuse du fait de ses boiseries, de son parquet et de son plafond
 	tapissé d’un papier Zuber (manufacture créée au XVIIIème siècle en Alsace dont les planches
   	d’impression en bois d’origine sculptée sont classées Monuments Historiques)… 
   	Une touche de modernité est apportée par un très beau tableau (éclairé par une lampe Lichtsack
    de Christopher Born) de Marco Del Re artiste contemporain édité par la Galerie Maeght à Paris.
    La banquette Louis XVI a été revisitée exclusivement pour l'hôtel par une jeune artiste : Magali Jeambrun.</p> 
    
    </div>

<?php $this->stop('main_content') ?>
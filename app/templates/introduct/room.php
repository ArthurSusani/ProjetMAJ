<?php $this->layout('layout', ['title' => 'Nos chambres']) ?>

<?php $this->start('main_content') ?>

<div id="rooms">
  <ul>
    <?php foreach ($rooms as $room) : ?>
        <li>
        <a href="<?= $this->url('introduct_roomdetail', ['id' => $room['id']]) ?>">
        <?= $room['name'] ?></a>
        </li>
    <?php endforeach ?>
  </ul>


  <div>
  	<p>Toutes nos chambres donnent sur la rue de Seine. Elles sont au nombre de deux par étage et la suite,
  	  légèrement mansardée, occupe l'intégralité du dernier et sixième étage.
  Les chambres double, d'une superficie moyenne de 18m², se trouvent sur le palier à droite : 
  elles ont toutes un lit queen size (160 X 200) et sont isolées de l'activité de l'hôtel grâce à une longue entrée au tissu
     tendu Designers Guild aux couleurs vives. La chambre proprement dite alterne mur
      en vieilles pierres, mur en argile rouge et miroirs encadrant la tête de lit en fausse
       peau d’autruche colorée…les appliques sont en bronze de Objet Insolite…
       Vous pourrez également y découvrir une table bureau en bois bicolore et un fauteuil
        Louis XVI revisité par la jeune artiste Magali Jeambrun.
  Sur le Palier de gauche, se trouvent les chambres à deux lits (2x90x200) qui peuvent 
  être transformés selon votre convenance en lit king size (180 X 200). 
  D'une superficie moyenne de 20m² ces chambres sont un peu plus spacieuses et offre
   une décoration plus classique: murs de pierres apparentes et tissu tendu inspiré du 1er Empire.
  La suite vous assure une tranquillité totale puisque vous êtes les seuls occupant de
   l’étage et sans voisin… Cette chambre d'une superficie moyenne de 32m²,
    dispose d’une vue imprenable sur les toits de Paris et offre tout le
     confort nécessaire grâce à son lit Queen Size et son jacuzzi dans sa salle de bain de marbre gris.</p>

  <h4>Equipements dans toutes les chambres :</h4>

  <ul>
  	<li>- Air Conditionné</li>
  	<li>- 4 oreillers</li>
  	<li>- Téléphone avec ligne directe</li>
  	<li>- Salle de bain individuelle avec baignoire (Jacuzzi dans la suite)</li>
  	<li>- Lit Queen ou King size</li>
  	<li>- Double vitrage</li>
  	<li>- Ecran plat avec un bouquet de 65 chaînes internationales</li>
  	<li>- Bureau</li>
  	<li>- Coffre-fort individuel</li>
  	<li>- Accès wifi gratuit</li>
  	<li>- Bouilloire et eaux minérales</li>
  	<li>- Sèche-cheveux et Sèche-serviette</li>
  </ul>	
  <br>
  <p>La décoration de l’hôtel Prince de Condé est à l’image de Saint-Germain-des-Prés,
   quartier central et historique de Paris, dans lequel se situe l’hôtel. Ce quartier,
    tel qu’il est aujourd’hui, a été rendu célèbre par les nombreux artistes et 
    intellectuels qui s’y croisaient au Café des Deux Magots, Café de Flore ou encore
     à la Brasserie Lipp. Il reste encore aujourd’hui le lieu par excellence de création
      artistique, un espace intellectuel de renommée mondiale. L’hôtel Prince de Condé
       propose donc des œuvres d’art originales. Dans chacune des chambres on retrouve
        une lithographie sur les revues littéraires et artistiques réalisée par Marco
         Del Re, tirée par la Galerie Maeght (Célèbre galerie où sont exposés depuis 
         1946 les plus grands artistes internationaux tels que Braque, Matisse, Miro, Chagall...)
          En combinant tradition classique et peinture moderne, l'univers de Marco del Re
          – qui a réalisé les fresques lors de la dernière rénovation de la salle Pleyel 
          - est un hommage à l'histoire de l'art, ce qui confère à chacune des chambres 
          une touche d'originalité et un caractère unique.
  Enfin, pour plonger complétement dans l’atmosphère artistique de l’hôtel Prince de condé
   et de Saint-Germain-des-Prés, nous vous laissons le soin de méditer sur les citations 
   de Georges Braque et Joan Miro, présentes dans chaque chambre… Bons mots et traits d’esprit sur l’art….</p>

  </div>

</div>

<?php $this->stop('main_content') ?>

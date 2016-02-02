<?php $this->layout('layout', ['title' => 'Bureau des avis']) ?>

<?php $this->start('main_content') ?>

	<div class="opinion">
		<ul><?php if (is_array($viewall)):?>
			<?php foreach ($viewall as $view) : ?>	
				<li>
					Nom : <?= $view['firstname'] ?>
					<?= $view['lastname'] ?><br>				
					Séjour du : <?= $view['datestart'] ?> au : <?= $view['dateend'] ?><br>
					Dans la chambre <?= $view['room'] ?><br>
					Note : <?= $view['rate'] ?><br>
					Commentaire : <?= $view['comment'] ?>
				</li>
			<?php endforeach; ?>
			<?php else: ?>
				<p><?php echo $viewall." de la tete"; ?>
			<?php endif; ?>
		</ul>
	</div>
	<?php if (isset($_SESSION['user'])): ?>
		<div class="contact">
			<form action=" <?= $this->url('opinion_insert') ?> " method="post" accept-charset="utf-8" id="form_opinion">
				<div class="form_div">
					<!--<div class="input_div">
						<label for="firstname">Nom :</label>
						<input type="text" name="firstname" value="<?php if(isset($_SESSION['user']['firstname'])){echo $_SESSION['user']['firstname'];}?>" placeholder="">
					</div>
					<div class="input_div">
						<label for="lastname">Prénom :</label>
						<input type="text" name="lastname" value="<?php if(isset($_SESSION['user']['lastname'])){echo $_SESSION['user']['lastname'];}?>" placeholder="">
					</div>-->
					<div class="input_div">
						<label for="datestart">Date de début :</label>
						<input type="date" name="datestart" value="" placeholder="">
					</div>
					<div class="input_div">
						<label for="dateend">Date de fin : </label>
						<input type="date" name="dateend" value="" placeholder="">
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
					<div id="note">
						<ul class="notes-echelle">
							<li>
								<label for="note01" title="Note: 1 sur 5">1</label>
								<input type="radio" name="rate" id="note01" value="1" />
							</li>
							<li>
								<label for="note02" title="Note: 2 sur 5">2</label>
								<input type="radio" name="rate" id="note02" value="2" />
							</li>
							<li>
								<label for="note03" title="Note: 3 sur 5">3</label>
								<input type="radio" name="rate" id="note03" value="3" />
							</li>
							<li>
								<label for="note04" title="Note: 4 sur 5">4</label>
								<input type="radio" name="rate" id="note04" value="4" />
							</li>
							<li>
								<label for="note05" title="Note: 5 sur 5">5</label>
								<input type="radio" name="rate" id="note05" value="5" />
							</li>
						</ul>
					</div>
				</div>

				<div class="input_div">
					<label for="comment">Commentaire :</label>
					<textarea name="comment" cols="90" rows="15"></textarea>
				</div>
				<div class="clearfix"></div>
				<button type="submit" name="submit" id="button">Envoyer</button>
			</form>
			
		</div>
	<?php else: ?>
		<div class="contact disconnect">
			<p>Connectez vous pour pouvoir laisser votre avis.</p>
		</div>
	<?php endif; ?>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
			<link rel="stylesheet" href="<?= $this->assetUrl('css/contact.css') ?>">
<?php $this->stop('css') ?>
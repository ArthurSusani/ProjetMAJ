<?php $this->layout('layout', ['title' => 'Bureau des avis']) ?>

<?php $this->start('main_content') ?>
<div class="contact">

	<form action="#" method="post" accept-charset="utf-8" id="form_contact">
			<div class="input_div">
				<label for="firstname">Nom :</label>
				<input type="text" name="firstname" value="<?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?>" placeholder="">
			</div>
			<div class="input_div">
				<label for="lastname">Prénom :</label>
				<input type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>" placeholder="">
			</div>
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
			<div class="input_div" id="note">
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
						<label for="note04" title="Note: 4 sur 4">4</label>
						<input type="radio" name="rate" id="note04" value="4" />
					</li>
					<li>
						<label for="note05" title="Note: 5 sur 5">5</label>
						<input type="radio" name="rate" id="note05" value="5" />
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="input_div">
				<label for="message">Commentaire :</label>
				<textarea name="message" form="form_contact" cols="95" rows="15"></textarea>
			</div>
			<div class="clearfix"></div>
			<button type="submit" id="button">Envoyer</button>
		</form>
	
</div>
<?php $this->stop('main_content') ?>
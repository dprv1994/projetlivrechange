
<?php $this->layout('layoutBack', ['title' => 'Modifier les informations du site']) ?>

<?php $this->start('main_content') ?>


	<div class="container">

			<h3>Ajouter une actualité</h3>
			<br>

			<div>
				<form method="POST">
					<label for="event">Evènement :</label>
					<input type="text" name="event" id="event">
					<br><br>

					<label for="who">Qui :</label>
					<input type="text" name="who" id="who">
					<br><br>

					<label for="place">Lieu :</label>
					<input type="text" name="place" id="place">
					<br><br>

					
					<label for="date">Date :</label>
						<select name="date_day">
							<option value="" selected disabled>Jour</option>
							<?php for($i=1;$i<=31;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?></option>
							<?php endfor; ?>
						</select>

						<select name="date_month">
							<option value="" selected disabled>Mois</option>
							<?php for($i=1;$i<=12;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?></option>
							<?php endfor; ?>
						</select>

						<select name="date_year">
							<option value="" selected disabled>Année</option>
							<?php for($i=date('Y');$i<=date('Y')+100;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?></option>
							<?php endfor; ?>
						</select>
					<br><br>

					<label for="time">Quand :</label>
						<select name="hour">
							<option value="" selected disabled>Heure</option>
							<?php for($i=0;$i<=23;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?> h</option>
							<?php endfor; ?>
						</select>

						<select name="minute">
							<option value="" selected disabled>Minute</option>
							<?php for($i=1;$i<=59;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?> min</option>
							<?php endfor; ?>
						</select>
					<br><br>

					<input type="submit"  value="Ajouter">
					<br><br>

				</form>
	        </div>
	</div>	

<?php $this->stop('main_content') ?>

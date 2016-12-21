
<?php $this->layout('layoutBack', ['title' => 'Ajouter des actualités']) ?>

<?php $this->start('main_content') ?>


	<div class="container">

	<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
	<?php endif; ?>

	<?php if(isset($success) && $success == true):?>
		<div class="alert alert-success">
			L'actualité a bien été ajoutée !
		</div>
	<?php endif; ?>

			<h3>Ajouter une actualité</h3>
			<br>

			<div class="actu">
				<form method="POST">
					<label for="event">Evènement :</label>
					<div class="center">
					<input type="text" name="event" id="event">
					</div>
					<br><br>

					<label for="who">Qui :</label>
					<div class="center">
					<input type="text" name="who" id="who">
					</div>
					<br><br>

					<label for="place">Lieu :</label>
					<div class="center">
					<input type="text" name="place" id="place">
					</div>
					<br><br>

					
					<label for="date">Date :</label>
					<div class="center">
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
					</div>
					<br><br>

					<label for="time">Quand :</label>
					<div class="center">
						<select name="hour">
							<option value="" selected disabled>Heure</option>
							<?php for($i=00;$i<=23;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?> h</option>
							<?php endfor; ?>
						</select>

						<select name="minute">
							<option value="" selected disabled>Minute</option>
							<?php for($i=00;$i<=59;$i++): ?>
								<option value="<?=$i;?>"><?=$i;?> min</option>
							<?php endfor; ?>
						</select>
					</div>
					<br><br>

					<div class="btnsubmit">
						<input type="submit"  class="linebuttons" value="ENREGISTRER">
					</div>
					<br><br>

				</form>
	        </div>
	</div>	

<?php $this->stop('main_content') ?>

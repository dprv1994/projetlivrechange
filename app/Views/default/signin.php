<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
<?php endif; ?>

<?php if(isset($success) && $success == true):?>
	<div class="alert alert-success">
		Inscription réalisée avec succès !
	</div>
<?php endif; ?>
	
<h2>FORMULAIRE D'INSCRIPTION</h2>
	
<br>
<div class="add">
	<form method="post" enctype="multipart/form-data">

		<label  for="firstname">Prénom :</label>
		<div class="center">
		<input type="text" id="firstname" name="firstname">
		</div>
		<br><br>

		<label for="lastname">Nom :</label>
		<div class="center">
		<input type="text" id="lastname" name="lastname">
		</div>
		<br><br>

		<label for="username">Pseudo :</label>
		<div class="center">
		<input type="text" id="username" name="username">
		</div>
		<br><br>

		<label for="picture">Image :&nbsp;</label>
		<div class="center">
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		</div>
		<small id="fileHelp" class="form-text text-muted">Maxi : 256 x 256</small>
		<br><br>

		<label for="email">Email :</label>
		<div class="center">
		<input type="email" id="email" name="email">
		</div>
		<br><br>

		<label for="password">Mot de passe :</label>
		<div class="center">
		<input type="password" id="password" name="password">
		</div>
		<br><br>

		
		<div class="btnsubmit">
				<button type="submit" class="linebuttons" name="register">S'INSCRIRE</button>
				</a>
		</div>
		<br><br>
	</form>
</div>	

<?php $this->stop('main_content') ?>
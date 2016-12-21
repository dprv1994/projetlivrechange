<?php $this->layout('layout', ['title' => 'Modifier votre profil']) ?>

<?php $this->start('main_content') ?>

	<h2>Modifier mon profil ( <?=$w_user['username'];?> )</h2>
	<br><br>

<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
<?php endif; ?>

<?php if(isset($success) && $success == true):?>
	<div class="alert alert-success">
		Votre profil a bien été modifié !
	</div>
<?php endif; ?>


	<form method="POST" enctype="multipart/form-data">
		
		<label  for="firstname">Prénom:</label>
		<div class="center">
		<input type="text" id="firstname" name="firstname" placeholder="<?=$w_user['firstname'];?>">
		</div>
		<br><br>

		<label for="lastname">Nom:</label>
		<div class="center">
		<input type="text" id="lastname" name="lastname" placeholder="<?=$w_user['lastname'];?>">
		</div>
		<br><br>

		

		<label for="picture">Image:</label>
		<div class="center">
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		</div>
		<br><br>

		<label for="email">Email:</label>
		<div class="center">
		<input type="email" id="email" name="email" placeholder="<?=$w_user['email'];?>">
		</div>
		<br><br>


		<label for="password">Mot de passe:</label>
		<div class="center">
		<input type="password" id="password" name="password">
		</div>
		<br><br>

		<input type="submit"  value="Enregistrer">

	</form>



<?php $this->stop('main_content') ?>
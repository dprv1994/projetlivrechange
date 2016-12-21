<!-- SI ADMIN PEUT, AUTRE NON -->

<?php $this->layout('layoutBack', ['title' => 'Modifier un utilisateur ']) ?>

<?php $this->start('main_content') ?>
<?php if (!empty($w_user)): ?>


<h2>Modifier l'utilisateur </h2>

	<?php if(isset($errors) && !empty($errors)):?>
		<div class="alert alert-danger">
			<?=implode('<br>', $errors); ?>
		</div>
	<?php endif; ?>

	<?php if(isset($success) && $success == true):?>
		<div class="alert alert-success">
			Le profil a bien été modifié !
		</div>
	<?php endif; ?>

<br>
<div class="add">
	<form method="POST" enctype="multipart/form-data">
		
		<label  for="firstname">Prénom :</label>
		<div class="center">
		<input type="text" id="firstname" name="firstname" placeholder="">
		</div>
		<br><br>

		<label for="lastname">Nom :</label>
		<div class="center">
		<input type="text" id="lastname" name="lastname" placeholder="">
		</div>
		<br><br>

		<label for="picture">Image:</label>
		<div class="center">
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		</div>
		<br><br>

		<label for="email">Email:</label>
		<div class="center">
		<input type="email" id="email" name="email" placeholder="">
		</div>
		<br><br>


<!-- 		<label for="password">Mot de passe:</label>
		<div class="center">
		<input type="password" id="password" name="password">
		</div>
		<br><br> -->

		
		<label for="role">Rôle:</label>
		<div class="center">
		<select name="role">
			<option>admin</option>
			<option>modo</option>
			<option>user</option>
		</select>
		</div>
		<br><br>

		<div class="btnsubmit">
		<input type="submit"  class="linebuttons" value="ENREGISTRER">
		</div>
		<br><br>
	</form>
</div>
<?php endif; ?>

<?php $this->stop('main_content') ?>
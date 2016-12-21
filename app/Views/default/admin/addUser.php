<?php $this->layout('layoutBack', ['title' => 'Ajout d\'un utilisateur  ']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
<?php endif; ?>

<?php if(isset($success) && $success == true):?>
	<div class="alert alert-success">
		L'utilisateur a bien été ajouté !
	</div>
<?php endif; ?>

	<h2><i class="fa fa-user-circle" aria-hidden="true"></i>
 Ajouter un utilisateur</h2><br>

	<div id="texte">
	<form method="post" enctype="multipart/form-data">
		
		<label  for="firstname">Prénom:</label>
		<input type="text" id="firstname" name="firstname">
		<br><br>

		<label for="lastname">Nom:</label>
		<input type="text" id="lastname" name="lastname">
		<br><br>

		<label for="username">Pseudonyme:</label>
		<input type="text" id="username" name="username">
		<br><br>

		<label for="picture">Image:</label>
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		<br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<br><br>


		<label for="password">Mot de passe:</label>
		<input type="password" id="password" name="password">
		<br><br>

		
		<label for="role">role:</label>
		<select name="role">
			<option>admin</option>
			<option>modo</option>
			<option>user</option>
		</select>

		<input type="submit"  value="Enregistrer">


	</form>
	</div>


<?php $this->stop('main_content') ?>
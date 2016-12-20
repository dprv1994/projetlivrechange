<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
<?php endif; ?>

<?php if(isset($success) && $success == true):?>
	<div class="alert alert-success">
		Vous avais bien été ajouté !
	</div>
<?php endif; ?>
	
	<h2>Page D'inscription</h2>
		
	<form method="post" enctype="multipart/form-data">

		<label  for="firstname">Prénom:</label>
		<input type="text" id="firstname" name="firstname">
		<br><br>

		<label for="lastname">Nom:</label>
		<input type="text" id="lastname" name="lastname">
		<br><br>

		<label for="username">Nom d'utilisateur:</label>
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

		<input type="submit" value="S'inscrire">

		<br><br>
	</form>
	

<?php $this->stop('main_content') ?>
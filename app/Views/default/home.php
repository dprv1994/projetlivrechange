<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('main_content') ?>
	
	<h2>Page D'inscription</h2>


	<form method="post">
	<label  for="firstname">Prénom:</label>
	<input type="text" id="firstname" name="firstname">
	<br><br>

	<label for="lastname">Nom:</label>
		<input type="text" id="lastname" name="lastname">
		<br><br>

		<label for="username">Nom d'utilisateur:</label>
		<input type="text" id="username" name="username">
		<br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<br><br>

		<label for="password">Mot de passe:</label>
		<input type="password" id="password" name="password">
		<br><br>

		<input type="submit" value="Ajouter">
	</form>
	

<?php $this->stop('main_content') ?>

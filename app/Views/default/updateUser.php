<?php $this->layout('layout', ['title' => 'Modifier votre profil']) ?>

<?php $this->start('main_content') ?>

	<h2>Modifier un utilisateur</h2>

	<form method="POST">
		
		<label  for="firstname">Prénom:</label>
		<input type="text" id="firstname" name="firstname">
		<br><br>

		<label for="lastname">Nom:</label>
		<input type="text" id="lastname" name="lastname">
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

		<input type="submit"  value="Enregistrer">


	</form>



<?php $this->stop('main_content') ?>
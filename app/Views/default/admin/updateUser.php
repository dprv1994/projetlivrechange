<!-- SI ADMIN PEUT, AUTRE NON -->

<?php $this->layout('layoutBack', ['title' => 'Modifier un utilisateur  ']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajouter un utlisateur</h2>

	<form method="POST">
		
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

		
		<label for="role">role:</label>
		<select name="role">
			<option>admin</option>
			<option>modo</option>
			<option>user</option>
		</select>

		<input type="submit"  value="Enregistrer">


	</form>



<?php $this->stop('main_content') ?>
<?php $this->layout('layoutBack', ['title' => 'Fiche de profil ']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajouter un utlisateur</h2>

	<form>
		
		<label for="username">Pseudo:</label>
		<input type="text" name="username" id="username">

		<label for="pseudo">Nom:</label>
		<input type="text" name="pseudo" id="pseudo">

		<label for="pseudo">Prénom:</label>
		<input type="text" name="p" id="pseudo">

		<label for="email">email:</label>
		<input type="email" name="email" id="email">

		<label for="pseudo">Mot de passe:</label>
		<input type="password" name="password" id="password">

		<input type="submit" name="register" value="Enregistrer">

		
	</form>



<?php $this->end('main_content') ?>
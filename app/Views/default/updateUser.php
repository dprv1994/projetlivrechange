<?php $this->layout('layout', ['title' => 'Modifier votre profil']) ?>

<?php $this->start('main_content') ?>

	<h2>Modifier un utilisateur</h2>

	<form method="POST">
		
		<label  for="firstname">Prénom:</label>
		<div class="center">
		<input type="text" id="firstname" name="firstname">
		</div>
		<br><br>

		<label for="lastname">Nom:</label>
		<div class="center">
		<input type="text" id="lastname" name="lastname">
		</div>
		<br><br>

		

		<label for="picture">Image:</label>
		<div class="center">
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		</div>
		<br><br>

		<label for="email">Email:</label>
		<div class="center">
		<input type="email" id="email" name="email">
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
<!-- SI ADMIN PEUT, AUTRE NON -->

<?php $this->layout('layoutBack', ['title' => 'Modifier un utilisateur  ']) ?>

<?php $this->start('main_content') ?>

<h2>Modifier un utlisateur</h2>

<br>
<div class="add">
	<form method="POST" enctype="multipart/form-data">
		
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

		
		<label for="role">role:</label>
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


<?php $this->stop('main_content') ?>
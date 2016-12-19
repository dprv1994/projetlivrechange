<?php $this->layout('layoutBack', ['title' => 'Connexion ']) ?>

<?php $this->start('main_content') ?>

		<?php if (isset($errors) && !empty($errors)): ?>
			<div class="alert alert-danger">
				<?=$errors;?>
			</div>
		<?php endif; ?>

			<br><br>

			<p>Bonjour !<br> Veuillez entrer vos identifiants pour vous connecter.</p>

			<form method="POST">
				<label for="username">User:</label><br>
				<input type="text" id="username" name="username">

				<br><br>
				<label for="password">Mot de passe:</label><br>
				<input type="password" id="password" name="password">

				<br><br>
				<input type="submit" value="Se connecter">
			</form>

			<br><br>
			
<?php $this->stop('main_content') ?>
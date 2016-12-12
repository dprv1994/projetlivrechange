
<?php $this->layout('layout', ['title' => 'Connexion ']) ?>

<?php $this->start('main_content') ?>

<?php if (isset($errors) && !empty($errors)): ?>
	<div class="alert alert-danger">
		<?=$errors;?>
	</div>
<?php endif; ?>

	<p>Vous avez atteint le login. Bravo.</p>

	<form method="post">
		<label for="username">User:</label><br>
		<input type="text" id="username" name="username">

		<br><br>
		<label for="password">Mot de passe:</label><br>
		<input type="password" id="password" name="password">

		<br><br>
		<input type="submit" value="Se connecter">
	</form>

<?php $this->stop('main_content') ?>

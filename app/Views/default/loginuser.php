<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('main_content'); ?>

<h1>Page de connexion</h1>
<br>
	
<?php if (isset($errors) && !empty($errors)): ?>
	<div class="alert alert-danger">
		<?=$errors;?>
	</div>
<?php endif; ?>


	<p>Veuillez entrer vos identifiants pour vous connecter.</p>

	<form method="post">

		<label for="username">Pseudo :</label><br>
		<input type="text" id="username" name="username">

		<br><br>
		<label for="password">Mot de passe :</label><br>
		<input type="password" id="password" name="password">

		<br><br>
			<div class="btnsubmit">
				<button type="submit" class="linebuttons" name="register">CONNEXION</button>
			</div>
		<br><br>
	</form>

</p>
<?php $this->stop('main_content'); ?>

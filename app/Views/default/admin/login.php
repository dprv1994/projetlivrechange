<?php $this->layout('layoutBack', ['title' => 'Connexion ']) ?>

<?php $this->start('main_content') ?>

<!-- AFFICHE LES ERREURS -->
<?php if (isset($errors) && !empty($errors)): ?>
	<div class="alert alert-danger">
		<?=$errors;?>
	</div>
<?php endif; ?>

	<br><br>

	<p>Bonjour !<br> Veuillez entrer vos identifiants pour vous connecter.</p>

	<form method="POST">
		<label for="username">Pseudo :</label><br>
		<input type="text" id="username" name="username">

		<br><br>
		<label for="password">Mot de passe :</label><br>
		<input type="password" id="password" name="password">

		<br><br>
		<div class="btnsubmit">
			<button type="submit" class="linebuttons" name="register">CONNEXION</button>
		</div>
	</form>
	<br>
	<p>Pour toute demande veuillez contacter les administrateurs <a href="<?=$this->url('sendMessages')?>">ici</a></p>
	<br><br>
			
<?php $this->stop('main_content') ?>
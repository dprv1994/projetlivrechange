

<?php $this->layout('layout', ['title' => 'Fiche de profil ']) ?>

<?php $this->start('main_content') ?>



	<div class="container">
		<?php if (!empty($user)): ?>

			<h2>Mon profil</h2>

			<ul>
				<li>Pseudo : <?=$user['username'];?></li>
				<li>Prénom : <?=$user['firstname'];?></li>
				<li>Nom : <?=$user['lastname'];?></li>
				<li>Email : <?=$user['email'];?></li>
			</ul>

			<p>Mes livres :</p>
			<ul>
				<li>Faire boucle foreach avec lien DB pour lister les livres de l'user</li>
			</ul>

		<?php else: ?>
			<div class="alert alert-danger">
				L'utilisateur n'existe pas
			</div>
		<?php endif; ?>
	</div>	

<?php $this->stop('main_content') ?>

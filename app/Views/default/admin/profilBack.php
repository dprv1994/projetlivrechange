

<?php $this->layout('layout', ['title' => 'Fiche de profil ']) ?>

<?php $this->start('main_content') ?>

	<div class="container">
		<?php if (!empty($user)): ?>
			<h2>Utilisateur : <?=$user['username']?></h2>

			<ul>
				<li><?=$user['firstname'];?></li>
				<li><?=$user['lastname'];?></li>
				<li><?=$user['email'];?></li>
				<li><?=$user['role'];?></li>
			</ul>

		<?php else: ?>
			<div class="alert alert-danger">
				L'utilisateur n'existe pas
			</div>
		<?php endif; ?>
	</div>	

<?php $this->stop('main_content') ?>

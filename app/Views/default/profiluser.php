

<?php $this->layout('layout', ['title' => 'Votre profil ']) ?>

<?php $this->start('main_content') ?>


	<div class="container-colonnes">
		<?php if (!empty($user)): ?>

			<div>
				<h2>Mon profil</h2>

				<ul>
					<li>Pseudo : <?=$user['username'];?></li>
					<li>Prénom : <?=$user['firstname'];?></li>
					<li>Nom : <?=$user['lastname'];?></li>
					<li>Email : <?=$user['email'];?></li>
				</ul>
				<a href="">Modifier mon profil</a>
			</div>

			<div>
				<h2>Mes livres :</h2>
				<ul>
					<li>Faire boucle foreach avec lien DB pour lister les livres de l'user</li>
				</ul>
				<a href="<?=$this->url('add_book')?>">Ajouter un livre</a>
			</div>

		<?php else: ?>
			<div class="alert alert-danger">
				L'utilisateur n'existe pas
			</div>
		<?php endif; ?>
	</div>	

<?php $this->stop('main_content') ?>

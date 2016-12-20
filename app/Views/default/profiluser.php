

<?php $this->layout('layout', ['title' => 'Votre profil ']) ?>

<?php $this->start('main_content') ?>


	
		<?php if (!empty($user)): ?>
	<div id="container-colonnes">

		<div id="profil">
			<h2>Mon profil :</h2>
				<ul>
					<li>Pseudo : <?=$user['username'];?></li>
					<li>Prénom : <?=$user['firstname'];?></li>
					<li>Nom : <?=$user['lastname'];?></li>
					<li>Email : <?=$user['email'];?></li>
				</ul>
		</div>

		<div id="image"><h2>Avatar : <img src="<?=$this->assetUrl($upload.$user['picture'])?>"></h2> 
		</div>
				
	</div>
			<a href="">Modifier mon profil</a>

			<br><br>
			<div>
				<h2>Mes livres :</h2>
				<ul>
					<li>Faire boucle foreach avec lien DB pour lister les livres de l'user</li>
				</ul>
				<a href="<?=$this->url('add_book')?>">Ajouter un livre</a>
			</div>
			<br><br>

		<?php else: ?>
			<div class="alert alert-danger">
				L'utilisateur n'existe pas
			</div>
		<?php endif; ?>
	

<?php $this->stop('main_content') ?>

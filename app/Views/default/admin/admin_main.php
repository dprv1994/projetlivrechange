

<?php $this->layout('layout', ['title' => 'Administration du Site']) ?>

<?php $this->start('main_content') ?>


	<div class="container">
		<?php if (!empty($user)): ?>
			<h1><?=$user['username']?></h1>
			<h2>Bienvenue sur la session "administration" de votre site web !</h2>

			<p>
	            Vous êtes sur la page d'administration de votre site web.<br> Vous pouvez, à l'aide la barre de navigation en haut de page, gérer le contenu de votre site :
	            <ul>
	                <li><a href=""> Modifier les infos de votre site</a></li>
	                <li><a href="">Gérer vos utilisateurs</a></li>
	                <li><a href="">Gérer vos livres</a></li>
	                <li><a href=""> Lire les messages qui vous ont été envoyés dans la session "Contact"</a></li>
	            </ul>
	            Merci de votre confiance !
       		</p>

		<?php else: ?>
			<div class="alert alert-danger">
				L'utilisateur n'existe pas
			</div>
		<?php endif; ?>
	</div>	

<?php $this->stop('main_content') ?>

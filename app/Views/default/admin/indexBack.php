

<?php $this->layout('layout', ['title' => 'Administration du Site']) ?>

<?php $this->start('main_content') ?>

<?php include_once 'navbar.php'; ?>

	<div class="container">

			
			<h2>Bienvenue sur la session "administration" de votre site web !</h2>

			<p>
	            Vous êtes sur la page d'administration de votre site web.<br> Vous pouvez, à l'aide la barre de navigation en haut de page, gérer le contenu de votre site :
	            <ul>
	                <li><a href="">Gérer le contenu de votre site</a></li>
	                <li><a href="">Gérer vos utilisateurs</a></li>
	                <li><a href=""> Lire les messages qui vous ont été envoyés dans la session "Contact"</a></li>
	                <li><a href="">...</a></li>
	            </ul>
	            Merci de votre confiance !
       		</p>

		
			<div class="alert alert-danger">

			</div>

	</div>	

<?php $this->stop('main_content') ?>

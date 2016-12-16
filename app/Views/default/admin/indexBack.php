<?php

	if (empty($_SESSION)){
		header('Location: admin/login');
	} 
?>

<?php $this->layout('layoutBack', ['title' => 'Administration du Site']) ?>

<?php $this->start('main_content') ?>


	<div class="container">

			
			<h2>Bienvenue sur la session "administration" de votre site web !</h2>
			<br><br>

			<div class="main_back">
			<p>
	            Vous êtes sur la page d'administration de votre site web.<br> Vous pouvez, à l'aide de la barre de navigation en haut de page, gérer le contenu de votre site :
	            <ul>
	                <li><a href="">Gérer le contenu de votre site</a></li>
	                <li><a href="list">Gérer vos utilisateurs</a></li>
	                <li><a href="addUser">Ajouter un nouvel utilisateur</a></li>
	                <li><a href=""> Lire les messages qui vous ont été envoyés dans la session "Contact"</a></li>
	                <li><a href="">...</a></li>
	                <li><a href="">Déconnexion</a></li>
	            </ul>
	      	</p>
	        </div>
	            <p>Merci de votre confiance !</p>
       		


		
			<div class="alert alert-danger">

			</div>

	</div>	

<?php $this->stop('main_content') ?>

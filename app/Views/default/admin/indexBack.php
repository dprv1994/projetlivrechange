
<?php $this->layout('layoutBack', ['title' => 'Administration du Site']) ?>

<?php $this->start('main_content') ?>


	<div class="container">

			
			<h2>Bienvenue sur la session "administration" de votre site web !</h2>
			<br><br>

			<div class="main_back">
			<p>
	            Vous êtes sur la page d'administration de votre site web.<br> Vous pouvez, à l'aide de la barre de navigation en haut de page, gérer le contenu de votre site :
	            <ul>
	                <li><a href="<?=$this->url('updateInfo');?>">Gérer vos actualités</a></li>
	                <li><a href="<?=$this->url('user_list')?>">Gérer vos utilisateurs</a></li>
	                <li><a href="<?=$this->url('updateMaps')?>">Gérer votre carte Google maps</a></li>
	                <li><a href=""> Lire les messages qui vous ont été envoyés dans la session "Contact"</a></li>
	            </ul>
	      	</p>
	        </div>
	        <br>
	            <h3>Merci de votre confiance ! <i class="fa fa-smile-o" aria-hidden="true"></i>
</h3>
	</div>	

<?php $this->stop('main_content') ?>

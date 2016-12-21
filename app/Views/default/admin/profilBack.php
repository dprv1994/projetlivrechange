
<?php $this->layout('layoutBack', ['title' => 'Fiche de profil ']) ?>

<?php $this->start('main_content') ?>



	<div class="container-profil-back">
		<?php if (!empty($w_user)): ?>

			<h2>Utilisateur : <?=$user['username']?></h2>
			<h5><a href="<?=$this->url('updateUserBack', ['id' => $user['id']])?>"><i class="fa fa-cog" aria-hidden="true"></i> Modifier</a></h5>

			<h3><i class="fa fa-book" aria-hidden="true"></i>
 Informations :</h3>
			<ul>
				<li><strong>Prénom :</strong> <?=$user['firstname'];?></li>
				<br>
				<li><strong>Nom :</strong> <?=$user['lastname'];?></li>
				<br>
				<li><strong>Email :</strong> <?=$user['email'];?></li>
				<br>
				<li><strong>Rôle :</strong> <?=$user['role'];?></li>
				<br>
				<li><strong>Photo :</strong> <br><img src="<?=$this->assetUrl($upload.$user['picture'])?>"></li>
			</ul>

		<?php else: ?>
			<div class="alert alert-danger">
				L'utilisateur n'existe pas
			</div>
		<?php endif; ?>
		

	</div>	

<?php $this->stop('main_content') ?>


<?php $this->layout('layout', ['title' => 'Votre profil ']) ?>

<?php $this->start('main_content') ?>


	<!-- AFFICHAGE DE MES DONNEES -->
	<?php if (!empty($user)): ?>
		<div id="container-colonnes">

			<div id="profil">
				<h2>Mon profil :</h2>
					<ul id="user">
						<li>Pseudo : <?=$user['username'];?></li>
						<li>Prénom : <?=$user['firstname'];?></li>
						<li>Nom : <?=$user['lastname'];?></li>
						<li>Email : <?=$user['email'];?></li>
					</ul>
			</div>

			<div id="image"><h2>Avatar :<br> 
				<img src="<?=$this->assetUrl($upload.$user['picture'])?>"></h2> 
			</div>			
		</div>
		
		<a href="">Modifier mon profil</a>
		<br><br>

	<?php else: ?>

		<div class="alert alert-danger">
			L'utilisateur n'existe pas
		</div>
	<?php endif; ?>

	<!-- AFFICHAGE DE MES LIVRES -->
	<?php var_dump($this->e($books)); ?>

	<?php if(!empty($books)): ?>
		<h2>Liste des Livres</h2>
		<br>
		<!-- tableeau contenant les utilisateurset permettant d'accéder aux options -->
		<table class="table">
			<thead>
				<tr>
					<th>Image</th>
					<th>Titre</th>
					<th>Auteur</th>
					<th>Catégories</th>
					<th>Etat</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($books as $book): ?>		
					<tr>	
						<td><?=$book['picture_book'];?>></td>
						<td><?=$book['title'];?></td>
						<td><?=$book['author'];?></td>
						<td><?=$book['category'];?></td>
						<td><?=$book['condition'];?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>

		<div class="alert alert-danger">
			Vous n'avez pas de livres ajoutés
		</div>
	<?php endif; ?>
		
		<!-- Url Ajouter un livre -->
		<a href="<?=$this->url('add_book')?>">Ajouter un livre</a>
		<br><br>


<?php $this->stop('main_content') ?>

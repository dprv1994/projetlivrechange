
<?php $this->layout('layoutBack', ['title' => 'Liste des utilisateurs ']) ?>

<?php $this->start('main_content') ?>
	
	<div id="list_users">

		<h2><i class="fa fa-address-card" aria-hidden="true"></i>Liste des utilisateurs</h2>
			<p>
				<i class="fa fa-plus" aria-hidden="true"></i>
				<a href="<?=$this->url('addUser');?>"> Ajouter un utilisateur</a>
			</p>
		<br>

	<!-- tableau contenant les utilisateurs et permettant d'accéder aux options -->
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Pseudonyme</th>
					<th>Email</th>
					<th>Rôle</th>
					<th>Profil</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($users as $user): ?>		
				<tr>
					<td><?=$user['id'];?></td>	
					<td><?=$user['firstname'];?></td>
					<td><?=$user['lastname'];?></td>
					<td><?=$user['username'];?></td>
					<td><?=$user['email'];?></td>
					<td><?=$user['role'];?></td>
					<td>
					<!-- Url vers le profil du membre -->
					<a href="<?=$this->url('profilBack', ['id' => $user['id']]);?>">
					Voir le profil</a>
					</td>
					<td>
					<!-- Créer un url pour effacer un membre -->
					<a href="<?=$this->url('user_update', ['id' => $user['id']]);?>">
					Modifier le profil</a>
					</td>
					<td>
					<!-- Créer un url pour effacer un membre -->
					<a href="<?=$this->url('user_delete', ['id' => $user['id']]);?>">
					Effacer le profil</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>

<?php $this->stop('main_content') ?>
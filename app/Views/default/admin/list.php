
<?php $this->layout('layoutBack', ['title' => 'Liste des utilisateurs ']) ?>

<?php $this->start('main_content') ?>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Prénom</th>
				<th>Nom</th>
				<th>nom de l'utilisateur</th>
				<th>Email</th>
				<th>Rôle</th>
				<th>Profil</th>
				<th>Action</th>
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
				<a href="<?=$this->url('user_delete', ['id' => $user['id']]);?>">
				Effacer le profil</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

<?php $this->stop('main_content') ?>
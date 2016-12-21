<?php $this->layout('layoutBack', ['title' => 'Messages']) ?>

<?php $this->start('main_content') ?>

<h2>
<i class="fa fa-inbox" aria-hidden="true"></i> Messages</h2>

<?php if(!empty($messages)): ?>
		<h2>Liste des Messages</h2>
		<br>
		<!-- tableeau contenant les utilisateurset permettant d'accéder aux options -->
		<table class="table">
			<thead>
				<tr>
					<th>Nom Complet</th>
					<th>Email</th>
					<th>Sujet</th>
					<th>message</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($messages as $message): ?>		
					<tr>	
						<td><?=$message['fullname'];?></td>
						<td><?=$message['email'];?></td>
						<td><?=$message['subject'];?></td>
						<td><?=$message['message'];?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>

		<div class="alert alert-danger">
			Vous n'avez pas de messages
		</div>
	<?php endif; ?>

<?php $this->stop('main_content') ?>
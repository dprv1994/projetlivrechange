
<?php $this->layout('layoutBack', ['title' => 'Modifier les actualités du site']) ?>

<?php $this->start('main_content') ?>


	<div class="container">

			
			<h2>Modifier les actualités de votre site</h2>
			<br><br>

			<table class="table">
				<thead>
					<tr>
						<th>Evènement</th>
						<th>Qui ?</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Rencontre/Dédicace</td>
						<td>Guy Delisle/Christophe André</td>
						<td>Bordeaux</td>
						<td>03/02/17 à 17h</td>
						<td>
						<a href="<?=$this->url('deleteActu', ['id' => $actu['id']]);?>">
					Supprimer</a>
						</td>
					</tr>
				</tbody>
			</table>

			<br><br>

			<h3><a href="<?=$this->url('addActu');?>">Ajouter une actualité</a></h3>
			<br>

	</div>	

<?php $this->stop('main_content') ?>

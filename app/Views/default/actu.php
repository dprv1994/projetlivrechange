<?php $this->layout('layout', ['title' => 'Actualités']) ?>

<?php $this->start('main_content') ?>
<br>
<body>
	<h2>Actualités littéraires</h2>
	
	<br><br>

	<div id="texte">
		<p>Retrouvez ici les dernières actualités du monde du livre.<br> Conférences, dédicaces..
		<br>Cette section est mise à jour régulièrement par nos administrateurs !
		<br>
	</div>
	<br>

	<table class="table">
		<thead>
			<tr>
				<th>Evènement</th>
				<th>Qui ?</th>
				<th>Lieu</th>
				<th>Date</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Rencontre/Dédicace</td>
				<td>Guy Delisle/Christophe André</td>
				<td>Bordeaux</td>
				<td>03/02/17 à 17h</td>
			</tr>
		</tbody>
	</table>

</body>

<br><br><br><br><br>

<?php $this->stop('main_content') ?>

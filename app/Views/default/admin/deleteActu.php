
<?php $this->layout('layoutBack', ['title' => 'Supprimer une actualité']) ?>

<?php $this->start('main_content') ?>


	<div class="container">

		<h1>Supprimer l'actualité'</h1>
	
	<hr>

		<p>Voulez-vous vraiment supprimer cette actualité?</p>

		<form method="POST">
			<!-- Annuler -->
			<input type="button" onclick="history.back();" value="Annuler" class="btn btn-default">
			<!-- Valider -->
			<input type="submit" name="delete" value="Oui, je veux le supprimer" class="btn btn-danger">
		</form>
	</div>	

<?php $this->stop('main_content') ?>

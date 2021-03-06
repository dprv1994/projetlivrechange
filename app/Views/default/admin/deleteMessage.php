<?php $this->layout('layoutBack', ['title' => 'Supprimer un message']) ?>

<?php $this->start('main_content') ?>

	<div class="container">

		<h1>Supprimer le message</h1>
	
	<hr>

		<p>Voulez-vous vraiment supprimer ce message?</p>

		<form method="POST">
			<!-- Annuler -->
			<input type="button" onclick="history.back();" value="Annuler" class="btn btn-default">
			<!-- Valider -->
			<a href="<?=$this->url('messages');?>"><input type="submit" name="delete" value="Oui, je veux le supprimer" class="btn btn-danger"></a>
		</form>

		<br><br>
	</div>	

<?php $this->stop('main_content') ?>

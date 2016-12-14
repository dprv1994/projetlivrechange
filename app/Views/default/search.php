<?php $this->layout('layout', ['title' => 'Lieux d\'échanges']) ?>

<?php $this->start('main_content') ?>


<label for="search">Recherche:</label>
	<input type="text" id="search" name="search" placeholder="Title or Author">
	<br><br>
	<input type="submit" id="submit" value="Rechercher">

	<div id="results"></div>

<!-- SCRIPTS JS DE LA PAGE -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="js/myscript.js"></script>


<?php $this->stop('main_content') ?>
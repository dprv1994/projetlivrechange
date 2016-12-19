<?php $this->layout('layout', ['title' => 'Ajouter livre ']) ?>

<?php $this->start('main_content') ?>

<h1>AJOUTER UN LIVRE</h1>

<br>
<form method="post">

		<label  for="title">Titre :&nbsp;</label>
		<input type="text" id="title" name="title">
		<br><br>

		<label for="author">Auteur :&nbsp;</label>
		<input type="text" id="author" name="author">
		<br><br>

		<label for="category">Catégories :&nbsp;</label>
		<select name="category">
			<option value="Polar">Polar</option>
			<option value="SF">Sci-fi</option>
			<option value="Romance">Romance</option>
			<option value="Biographie">Biographie</option>
		</select>

		<label for="picture">Image :&nbsp;</label>
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		<br><br>

		<label for="condition">Etat du Livre :&nbsp;</label>
		<input type="text" id="condition" name="condition">
		<br><br>

		<div class="btnsubmit">
		<input type="submit" class="linebuttons" value="AJOUTER">
		</div>
		<br><br>
	</form>

<?php $this->stop('main_content') ?>
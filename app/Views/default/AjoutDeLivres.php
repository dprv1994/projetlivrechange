<?php $this->layout('layout', ['title' => 'Ajouter livre ']) ?>

<?php $this->start('main_content') ?>

<h2>Ajouter un livre</h2>

<form method="post">

		<label  for="title">Titre:</label>
		<input type="text" id="title" name="title">
		<br><br>

		<label for="author">Auteur:</label>
		<input type="text" id="author" name="author">
		<br><br>

		<label for="category">catégorie:</label>
		<select name="category">
			<option>Polar</option>
			<option>Sci-fi</option>
			<option>Romance</option>
			<option>Biographie</option>
		</select>

		<label for="picture">Image:</label>
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		<br><br>

		<label for="condition">Etat du Livre:</label>
		<input type="text" id="condition" name="condition">
		<br><br>

		<input type="submit" value="Ajouter">

		<br><br>
	</form>

<?php $this->stop('main_content') ?>
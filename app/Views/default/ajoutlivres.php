<?php $this->layout('layout', ['title' => 'Ajouter livre ']) ?>

<?php $this->start('main_content') ?>

<!-- AFFICHE LES ERREUR -->
<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
<?php endif; ?>

<?php if(isset($success) && $success == true):?>
	<div class="alert alert-success">
		Vous avais bien été ajouté !
	</div>
<?php endif; ?>

<h1>AJOUTER UN LIVRE</h1>

<br>
<form method="post" enctype="multipart/form-data">

		<label  for="title" id="book">Titre :&nbsp;</label>
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
		<br><br>

		<label for="picture">Image :</label>
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		<br><br>

		<label for="s">Etat du Livre :&nbsp;</label>
		<input type="text" id="condition" name="condition">
		<br><br>

		<div class="btnsubmit">
		<input type="submit" class="linebuttons" value="AJOUTER">
		</div>
		<br><br>
	</form>

<?php $this->stop('main_content') ?>
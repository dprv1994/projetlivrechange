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
<div class="add">
	<form method="post" enctype="multipart/form-data">

		<label  for="title">Titre :&nbsp;</label>
		<div class="center">
		<input type="text" id="title" name="title">
		</div>
		<br><br>

		<label for="author">Auteur :&nbsp;</label>
		<div class="center">
		<input type="text" id="author" name="author">
		</div>
		<br><br>

		<label for="category">Catégories :&nbsp;</label>
		<div class="center">
		<select name="category">
			<option value="Polar">Polar</option>
			<option value="SF">Sci-fi</option>
			<option value="Romance">Romance</option>
			<option value="Biographie">Biographie</option>
		</select>
		</div>
		<br><br>

		<label for="picture">Image :</label>
		<div class="center">
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		</div>
		<br><br>

		<label for="s">Etat du Livre :&nbsp;</label>
		<div class="center">
		<input type="text" id="condition" name="condition">
		</div>
		<br><br>

		<div class="btnsubmit">
		<input type="submit" class="linebuttons" value="AJOUTER">
		</div>
		<br><br>
	</form>
</div>

<?php $this->stop('main_content') ?>
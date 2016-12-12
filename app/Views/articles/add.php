<?php $this->layout('layout', ['title' => 'Ajouter un article ']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($errors) && !empty($errors)):?>
	<div class="alert alert-danger">
		<?=implode('<br>', $errors); ?>
	</div>
<?php endif; ?>

<?php if(isset($success) && $success == true):?>
	<div class="alert alert-success">
		Votre article a bien été ajouté !
	</div>
<?php endif; ?>

<p>Vous avez atteint l'ajout d'article. Bravo.</p>

	<form method="post">
		<label for="title">Titre:</label>
		<input type="text" id="title" name="title">
		<br><br>

		<label for="content">Contenu:</label>
		<input type="text" id="content" name="content">
		<br><br>

		<label for="picture">Image:</label>
		<input type="file" id="picture" name="picture" placeholder="Votre image">
		<br><br>

		<input type="submit" value="Ajouter">
	</form>

	<?php $this->stop('main_content') ?>
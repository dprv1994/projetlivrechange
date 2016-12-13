
<?php $this->layout('layout', ['title' => 'Inscription utilisateur ']) ?>

<?php $this->start('main_content') ?>


	<p>Vous avez atteint l'insertion d'utilisateur. Bravo.</p>

	<div id="resultAjax"></div>

	<form method="post">
		<label for="firstname">Prénom:</label>
		<input type="text" id="firstname" name="firstname">
		<br><br>

		<label for="lastname">Nom:</label>
		<input type="text" id="lastname" name="lastname">
		<br><br>

		<label for="username">Nom d'utilisateur:</label>
		<input type="text" id="username" name="username">
		<br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<br><br>

		<label for="password">Mot de passe:</label>
		<input type="password" id="password" name="password">
		<br><br>

		<input type="submit" value="Ajouter">
	</form>

	
<?php $this->stop('main_content') ?>


<?php $this->start('js') ?>
<script>
$(document).ready(function(){

	$('button[type="submit"]').click(function(e){
		e.preventDefault(); // Empeche la soumission du formulaire au clic sur le bouton

		$.ajax({
			url: '<?=$this->url('ajax_addUser'); ?>',
			type: 'post',
			cache: false,
			data: $('form').serialize(),
			dataType: 'json',
			success: function(result){
				if(result.code == 'ok'){
					$('#resultAjax').html('<div class="alert alert-success">'+ result.msg + '</div>');
					$('form input').val(''); // Permet de vider les champs
				}
				else if(result.code == 'error'){
					$('#resultAjax').html('<div class="alert alert-danger">'+ result.msg + '</div>');

				}
			}
		});
	});
});	
</script>
<?php $this->stop('js') ?>


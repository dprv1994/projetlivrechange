<?php $this->layout('layout', ['title' => 'Recherche Livre']) ?>

<?php $this->start('main_content') ?>

	<form method="GET">
		<label for="search" class="srch">Recherche :</label>
		<input type="text" id="search" name="search" placeholder="Titre ou auteur du livre...">
		<br><br>

		<div class="btnsubmit">
		<input type="submit" id="submit" class="linebuttons" value="Recherche">
		<div>
		<br><br>

		<div id="results"></div>
	</form>
<?php $this->stop('main_content') ?>

<!-- SCRIPTS JQuery DE LA PAGE POUR RECHERCHE LIVRE -->

<?php $this->start('js') ?>

<script>

	function bookSearch(){
		var search = document.getElementById('search').value
		
		document.getElementById('results').innerHTML = "";
		console.log(search);

		$.ajax({
			url: "https://www.googleapis.com/books/v1/volumes?q=" + search ,
			dataType:"json",

			success:function(data){
				for(i = 0; i < data.items.length; i++){
					results.innerHTML = "<h2>Title:" + data.items[i].volumeInfo.title + "</h2>";
					results.innerHTML = "<h3>Authors:" + data.items[i].volumeInfo.authors  + "</h3>" ;
					results.innerHTML = "<h4>Publisher:" + data.items[i].volumeInfo.publisher  + "</h4>" ; 
					results.innerHTML = "<p>published Date:" + data.items[i].volumeInfo.publishedDate + "</p>";
					results.innerHTML = "<p>Categories:" + data.items[i].volumeInfo.categories + "</p>";
					results.innerHTML = "<p>img:" + '<img src="' + data.items[i].volumeInfo.imageLinks.thumbnail + '">' + "</p>";
				}
			},

			type:'GET'
		});
	}

	document.getElementById('submit').addEventListener('click', bookSearch, false);


	
</script>

<!-- ...................................APPEL A API GOOGLE BOOKS............................................... -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>



<?php $this->stop('js') ?>
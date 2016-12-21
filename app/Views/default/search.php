<?php $this->layout('layout', ['title' => 'Recherche Livre']) ?>

<?php $this->start('main_content') ?>


<label for="search" class="srch">Recherche :</label>
	<input type="text" id="search" name="search" placeholder="Titre ou auteur du livre...">
	<br><br>
	<div class="btnsubmit">
	<input type="submit" id="submit" class="linebuttons" value="Rechercher">
	<div>
	<br><br>

<?php $this->stop('main_content') ?>

	<div id="results"></div>
	


<!-- SCRIPTS JQuery DE LA PAGE POUR RECHERCHE LIVRE -->
<?php $this->start('js') ?>

<script>

	function bookSearch(){
		var search = document.getElementById('search').value
		
		document.getElementById('results').innerHTML = ""
		console.log(search);

		$.ajax({
			url: "https://www.googleapis.com/books/v1/volumes?q=" + search,
			dataType:"json",

			success:function(data){
				for(i = 0; i < data.items.length; i++){
					console.log(data.items.length);
					/*results.innerHTML += "<h2>Titre:" + data.items[i].volumeInfo.title + "</h2>";
					results.innerHTML += "<h3>Authors:" + data.items[i].volumeInfo.authors  + "</h3>"; 
					results.innerHTML += "<h4>Publisher:" + data.items[i].volumeInfo.publisher  + "</h4>"  ;
					results.innerHTML += "<p>published Date:" + data.items[i].volumeInfo.publishedDate + "</p>";
					results.innerHTML += "<p>Categories:" + data.items[i].volumeInfo.categories + "</p>";
					results.innerHTML += "<p>img:" + '<img src="' + data.items[i].volumeInfo.imageLinks.thumbnail + '">' + "</p>";
					results.innerHTML += "<p>ISBN:" + data.items[i].volumeInfo.industryIdentifiers.identifier + "</p>";*/
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
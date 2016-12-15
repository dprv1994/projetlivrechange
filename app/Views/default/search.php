<?php $this->layout('layout', ['title' => 'Recherche Livre']) ?>

<?php $this->start('main_content') ?>


<label for="search">Recherche:</label>
	<input type="text" id="search" name="search" placeholder="Title or Author">
	<br><br>
	<input type="submit" id="submit" value="Rechercher">

	<div id="results"></div>

<!-- SCRIPTS JQuery DE LA PAGE POUR RECHERCHE LIVRE -->

<script>
	function bookSearch(){
	var search = document.getElementById('search').value
	document.getElementById('results').innerHTML = ""
	console.log(search);

	$.ajax({
		url: "https://www.googleapis.com/books/v1/volumes?q=" + search,
		type:'GET',
		cache: false,
		dataType:"json",
		success:function(data){
			for(i = 0; i < data.items.length; i++){
				results.innerHTML += "<h2>Title:" + data.items[i].volumeInfo.title + "</h2>"
				results.innerHTML += "<h4>Authors:" + data.items[i].volumeInfo.authors  + "</h4>" 
				results.innerHTML += "<h5>Publisher:" + data.items[i].volumeInfo.publisher  + "</h5>"  
				results.innerHTML += "<p>published Date:" + data.items[i].volumeInfo.publishedDate + "</p>"
				results.innerHTML += "<p>Categories:" + data.items[i].volumeInfo.categories + "</p>"
				results.innerHTML += "<p>Image:" + '<img src="' + data.items[i].volumeInfo.imageLinks.thumbnail + '">' + "</p>"
				if (data.items[i].volumeInfo.industryIdentifiers.type == "ISBN_10") {
					results.innerHTML += "<p>ISBN:" + data.items[i].volumeInfo.industryIdentifiers.identifier[0][2][2] + "</p>"
				}
				
			}
		}	
	});
}

document.getElementById('submit').addEventListener('click', bookSearch, false);


	
</script>

<!-- ...................................APPEL A API GOOGLE BOOKS............................................... -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="js/myscript.js"></script>


<?php $this->stop('main_content') ?>
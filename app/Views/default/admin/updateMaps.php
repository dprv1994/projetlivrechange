
<?php $this->layout('layoutBack', ['title' => 'Gestion de la carte google maps']) ?>

<?php $this->start('main_content') ?>


 	
 	
<div id="mapupdate"></div><!--  La carte s affichera dans cette div "map" -->
 	
 	

 	<h3>Ajouter un nouveau lieu d'échange</h3>

 	<br>
 	<form method="POST">
		
 		<label for="title">Lieu :</label>
 		<input type="text" name="title" id="title">
 		&nbsp;
		<label for="inputLatitude">Latitude :</label>
		<input type="text" name="inputLatitude" id="inputLatitude">
		&nbsp;
		<label for="inputLongitude">Longitude :</label>
		<input type="text" name="inputLongitude" id="inputLongitude">
		&nbsp;
		<input type="submit" value="Enregistrer">
		

	</form>

	<br>
	<?php if(isset($errors) && !empty($errors)):?>
		<div class="alert alert-danger">
			<?=implode('<br>', $errors); ?>
		</div>
	<?php endif; ?>

	<?php if(isset($success) && $success == true):?>
		<div class="alert alert-success">
			Le lieu a bien été ajouté !
		</div>
	<?php endif; ?>


 	<h3>Liste des points d'échange</h3>

 	<!-- lISTE DES MARKERS -->

 	<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Lieux</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($markers as $marker): ?>
				<tr>
					<td><?=$marker['id'];?></td>
					<td><?=$marker['title'];?></td>
					<td><a href="<?=$this->url('marker_delete', ['id' => $marker['id']]);?>">
				Effacer le marker</a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>




<?php $this->stop('main_content') ?>


<?php $this->start('js') ?>

	  <script type="text/javascript">
	  		

			
				function initMap() {
			  	
			  	var map;
			  	

			  	map = new google.maps.Map(document.getElementById('mapupdate'), {/* Ici on crée notre objet map*/
				    center: {lat: 44.8404400, lng:-0.5805000}, // centrage de la carte à l'affichage
				    zoom: 13 // niveau de zoom
			  		});
				
				google.maps.event.addListener(map, 'click', function(event) {
				    placeMarker(event.latLng);
				});
				 
				var marker;
				



				function placeMarker(location) {
				  if(marker){ //on vérifie si le marqueur existe
				    marker.setPosition(location); //on change sa position
				  }else{
				    marker = new google.maps.Marker({ //on créé le marqueur
				      position: location,
				      map: map
				    });
				  }
				  inputLatitude.value=location.lat();
				  inputLongitude.value=location.lng();
				}
			



			}


	  


	  </script>

	  			<!-- .......................FIN DU SCRIPT MAPS................................... -->


	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    



<?php $this->stop('js') ?>
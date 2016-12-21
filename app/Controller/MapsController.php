<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MapsModel; 
use \W\View\Plates\PlatesExtensions;

use \Respect\Validation\Validator as v;



class MapsController extends Controller
{

	public function getMarkers()
	{
		$showMarker = new MapsModel();
		$markers = $showMarker->findAll();
	
		$data = [
			'markers' => $markers
		];
		$this->show('default/maps', $data); // envoie les données en paramètres 
	
	}
	public function getMarkersBack()
	{
		$showMarkerBack = new MapsModel();
		// Les données qu'on renverra à la vue
		$data = [];


		$user = $this->getUser(); // Récupère l'utilisateur connecté
		if(!empty($user)){
			// Soumission du formulaire
			if(!empty($_POST)){
				$post = array_map('trim', array_map('strip_tags', $_POST));
				$addMarker = $this->addMarker($post['title'], $post['inputLatitude'], $post['inputLongitude']);

				// Surcharge le tableau $data
				$data['errors'] = $addMarker['errors'];
				$data['success'] = $addMarker['success'];
			}
		}


		// On récupère les markers après l'insertion SQL
		$markers = $showMarkerBack->findAll('id', 'DESC');
		$data['markers'] = $markers;

		$this->show('default/admin/updateMaps', $data); // envoie les données en paramètres 
	
	}
	public function deleteMarker($id)
	{
		if (!is_numeric($id) || empty($id)) {
				$this->showNotFound();
		}
		else{
			$destroyMarker = new MapsModel();
			$destroy = $destroyMarker->delete($id);

			$this->redirectToRoute('updateMaps');  
		}
	}
	


	/*
	 * Pour traiter l'ajout d'un marker
	 */
	private function addMarker($title, $lat, $lng)
	{
		$errors = [];
		$post = [];
		$success = false;

		if (!empty($_POST)) {

		
			if (!v::length(3, 100)->validate($title)) {
				$errors[] = 'Le titre du lieu doit comporter entre 3 et 100 caractères';
			}

			if (!v::numeric()->validate($lat)) {
				$errors[] = 'La latitude doit être numérique';
			}

			if (!v::numeric()->validate($lng)) {
				$errors[] = 'La longitude doit être numérique';
			}

			if (count($errors) === 0 ) {
				//On instancie le modèle pour communiquer avec la BDD
				$MapsModel = new MapsModel();

				$insert = $MapsModel->insert([
				 	'title' => $title,
				 	'lat'	=> $lat,
				 	'lng'	=> $lng,
				]);

				if ($insert) {
					$success = true;
				}
				else{
					$errors[] = 'Erreur lors de l\'ajout en BDD';
				}
			}
		}
		// Après le !empty($_POST) on envoi la vue et les éventuels paramètres
		$params = [
			'errors'  => $errors,
			'success' => $success,
		];

		return $params;
	}

}
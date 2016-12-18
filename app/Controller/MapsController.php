<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MapsModel; 
use \W\View\Plates\PlatesExtensions;




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
			$markers = $showMarkerBack->findAll();
		
			$data = [
				'markers' => $markers
			];
			$this->show('default/admin/updateMaps', $data); // envoie les données en paramètres 
		
		}
		
		public function addMarker()
		{


		$errors = [];
		$post = [];
		$success = false;

		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags',$_POST));
		
			if (!v::length(3, 100)->validate($post['title'])) {
				$errors[] = 'Votre prénom doit faire entre 3 e 25 caractères';
			}

			
				 //On instancie le modèle pour communiquer avec la BDD
				 $UserModel = new MapsModel();

				 $insert = $UserModel->insert( [
				 	'lat' => $post['lat'],
				 	'lng'	=> $post['lng'],
				 	
			
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

		$this->show('default/admin/updateMaps', $params);
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
		
}
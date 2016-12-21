<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ActusModel; //as Actus;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;

Class ActuController extends Controller
{

	/**
	 * 
	 * Page de messages actus
	**/
	public function actus()
	{
		$this->show('default/admin/actus');

	}

	/**
	* Affichage des actualités en BACK
	*
	*/
	public function listActu()
	{
		$listActu = new ActusModel();
		$actus = $listActu->findAll();

		$data = [
			'actus' => $actus
		];

		$this->show('default/admin/listActu', $data);
	}

	/**
	* Affichage des actualités en FRONT
	*/
	public function actu()
	{
		$listActu = new ActusModel();
		$actus = $listActu->findAll();

		$data = [
			'actus' => $actus
		];

		$this->show('default/actu', $data);
	}
	/**
	* Ajout d'une actualité
	*/
	public function addActu()
	{

		if (empty($this->getUser())){
			$this->showNotFound();
		}
		else{

			$ActusModel = new ActusModel();

			$errors = [];
			$post = [];
			$success = false;


			if (!empty($_POST)) {
				$post = array_map('trim', array_map('strip_tags',$_POST));
				// Event
				if (!v::length(3, 150)->validate($post['event'])) {
					$errors[] = 'Le champ "Evènement" doit comprendre entre 3 et 150 caractères';
				}
				// Qui
				if (!v::length(3, 80)->validate($post['who'])) {
					$errors[] = 'Le champ "Qui" doit comprendre entre 3 et 80 caractères';
				}
				// Lieu
				if (!v::length(4, 30)->validate($post['place'])) {
					$errors[] = 'Le champ "Lieu" doit comprendre faire entre 4 et 30 caractères';
				}

				// Date
				if (!isset($post['date_day']) || !isset($post['date_month']) || !isset($post['date_year'])) {
					$errors[] = 'Vous devez entrer une date pour votre évènement';
				}
				elseif (!is_numeric($post['date_day']) || !is_numeric($post['date_month']) || !is_numeric($post['date_year'])) {
					$errors[] = 'Votre date d\'évènement est invalide';
				}
				// Heure
				if (!isset($post['hour']) || !isset($post['minute'])) {
					$errors[] = 'Vous devez entrer une heure complète';
				}

				if (count($errors) === 0 ) {

					//On instancie le modèle pour communiquer avec la BDD
					$ActuModel = new ActusModel();

					$insert = $ActuModel->insert([
					 	'event' => $post['event'],
					 	'who'	=> $post['who'],
					 	'place'	=> $post['place'],
					 	'date' => $post['date_year'].'/'.$post['date_month'].'/'.$post['date_day'],
					 	'time' => $post['hour'].'h '.$post['minute'].'min',
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

			$this->show('default/admin/listActu', $params);
		}
	}



	/**
	* Suppression d'une actualité
	*/
	public function deleteActu()
	{
		$this->show('default/admin/deleteActu');
	}
}


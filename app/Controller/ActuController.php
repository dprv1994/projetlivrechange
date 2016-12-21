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
	* Page de liste et de mise à jour des infos du site
	* Appel à la Db et affichage
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
	* Ajout d'une actualité
	*/
	public function addActu()
	{
		$this->show('default/admin/addActu');
	}

	/**
	* Suppression d'une actualité
	*/
	public function deleteActu()
	{
		$this->show('default/admin/deleteActu');
	}
}


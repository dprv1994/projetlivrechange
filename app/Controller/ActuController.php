<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use Model\AdminModel; 

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
	* Page de mise à jour des infos du site
	*
	*/
	public function updateActu()
	{
		$this->show('default/admin/updateActu');
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


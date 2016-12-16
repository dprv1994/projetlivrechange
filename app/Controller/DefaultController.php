<?php

namespace Controller;

use \W\Controller\Controller;


class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{	
		$this->show('/default/home');
	}

	/**
	 * Page Inscription
	 */
	public function loginuser()
	{
		$this->show('default/loginuser');
	}

	/**
	 * Page Recherche livre
	*/
	public function search()
	{
		$this->show('default/search');

	}

	/**
	 * Page actualités
	*/
	public function actu()
	{
		$this->show('default/actu');

	}

	/**
	 * Page ajout livres
	*/
	public function ajoutLivres()
	{
		$this->show('default/AjoutDeLivres');

	}

	/**
	 * Page 404
	*/
	public function notFound()
	{
		$this->showNotFound();

	}

	
	

}
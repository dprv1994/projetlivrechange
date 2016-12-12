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
	 * Page 1
	 */
	public function page()
	{
		$this->show('default/page');
	}

	/**
	 * Page de profil
	 */
	public function profil()
	{
		$this->show('default/user/profil');
	}

	/**
	 * Page 404
	*/
	public function notFound()
	{
		$this->showNotFound();

	}



}
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
	 * Page 404
	*/
	public function notFound()
	{
		$this->showNotFound();

	}

	
	/**
	 * Page 404
	*/
	public function search()
	{
		$this->show('default/search');

	}


}
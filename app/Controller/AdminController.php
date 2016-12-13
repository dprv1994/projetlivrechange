<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use \W\Security\AuthentificationModel;

Class AdminController extends Controller
{
	/**
	* Page d'accueil de l'admin
	*/
	public function indexBack()
	{
		$this->show('default/admin/indexBack');
	}



	public function login()
	{

		$errors = null;

		if (!empty($_POST)) {
		$post = array_map('trim', array_map('strip_tags', $_POST));
		

			if (empty($post['username']) && empty($post['password'])) {
				$errors = 'Vous devez compléter votre identifiant et mot de passe pour vous connecter';
			}
			else{
				//l'utilisateur a bien rempli un mot de passe et un username
				$authModel = new AuthentificationModel;
				$idUser = $authModel->isValidLoginInfo($post['username'], $post['password']);

				//On a un id utilisateur si le couple username/password est bon, sinon 0
				if($idUser){
					$UsersModel = new UsersModel();
					$user = $UsersModel->find($idUser); //Récupère les données de l'utilisateur via son ID

					//Connecte L'utilisateur et peuple la session
					$authModel->logUserIn($user);
				}
				else{ // $idUser est égal à 0
					$errors = 'Erreur d\'identifiant ou de mot de passe';
				}
			}
		}
		//$this->getUser() récupere l'utilisateur actuelment connecté
		//Si déjà connecté je le redirige
		//Je le sors du !empty($_POST) pour que la redirection soit effective si un utilisateur et déjà connecté arrive sur le formulaire de connexion
		if (!empty($this->getUser())) {
			$this->redirectToRoute('admin_indexBack');
		}
		
		$param = ['errors' => $errors];
		$this->show('default/admin/login', $param);
	}

	public function logout()
	{

		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags', $_POST));
		
			if (!empty($post['username'] && !empty($post['password']))) {

				//l'utilisateur a bien rempli un mot de passe et un username
				$authModel = new AuthentificationModel;
				$idUser = $authModel->getLoggedUser($post['username'], $post['password']);

				//On a un id utilisateur si le couple username/password est bon, sinon 0
				if($idUser){
					//Deconnecte L'utilisateur et peuple la session
					$authModel->logUserOut($user);
					$this->redirectToRoute('login');
				}
			}
		}

		//Si $this->getUser() ne récupere aucun utilisateur redigirige vers la page de login

		if (empty($this->getUser())) {
			$this->redirectToRoute('login');
		}

	}
}
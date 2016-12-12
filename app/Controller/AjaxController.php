<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use \W\Security\AuthentificationModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;

/*
*
*Ce controller va gérer l'ensemble des appels ajax
*/
class AjaxController extends Controller 
{

	/*
	*Permet l'ajout d'un utilisateur via Ajax
	*
	*/
	public function addUser()
	{

		$UsersModel = new UsersModel();

		$errors = [];
		$post = [];


		if (!empty($_POST)) {
		//On nettoie les données
		$post = array_map('trim', array_map('strip_tags', $_POST));	
		}

		if (!v::notEmpty()->length(3,15)->validate($post['firstname'])) {
			$errors[] = 'le prénom doit comporter entre 3 et 15 caractères';
		}

		if (!v::notEmpty()->length(3,15)->validate($post['lastname'])) {
			$errors[] = 'le nom doit comporter entre 3 et 15 caractères';
		}

		if (!v::notEmpty()->length(3,15)->validate($post['username'])) {
			$errors[] = 'le nom de l\'utilisateur doit comporter entre 3 et 15 caractères';
		}

		//Renverra TRUE si l'username existe déjà en BDD
		if ($UsersModel->usernameExists($post['username'])) {
			$errors[] = 'Le pseudo et déjà utilisé';
		}

		if (!v::notEmpty()->email()->validate($post['email'])) {
			$errors[] = 'L\'adresse email saisie est invalide';
		}

		//Renverra TRUE si l'email existe déjà en BDD
		if ($UsersModel->emailExists($post['email'])) {
			$errors[] = 'L\'adresse email et déjà utilisé';
		}

		if (!v::notEmpty()->length(8,20)->validate($post['password'])) {
			$errors[] = 'le mot de passe doit comporter entre 8 et 20 caractères';
		}		

		if(count($errors) === 0){

			$authModel = new AuthentificationModel(); // Permet d'utiliser la fonction de hash de password

			$dataInsert = [
				'firstname' 	=> $post['firstname'],
				'lastname'		=> $post['lastname'],
				'username'		=> $post['username'],
				'email'			=> $post['email'],
				'password'		=> $authModel->hashPassword($post['password']),
				'role'			=> 'user',
				];
				
			if($usersModel->insert($dataInsert)){
				$this->showJson(['code' => 'ok', 'msg' => 'Utilisateur ajouté avec succès']);
			}
			else{
				$this->showJson(['code' => 'error', 'msg' => implode('<br>', $errors)]);
			}
		}
	}

}
<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use \W\Security\AuthentificationModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;


class UsersController extends Controller 
{

	/**
	 * 
	 * Page de login
	 *
	**/
	public function loginUser()
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
		
		if (!empty($this->getUser())) {
			//Je le sors du !empty($_POST) pour que la redirection soit effective si un utilisateur et déjà connecté arrive sur le formulaire de connexion
			
			$this->redirectToRoute('profilUser');

		}
		else{
			$param = ['errors' => $errors];
			$this->show('default/loginuser', $param);
		}

		$this->show('default/loginuser');
	}

	public function logOutUser()
	{	//Si la SESSION N'EST PAS VIDE 
		if (!empty($_SESSION)){
			$authModel = new AuthentificationModel;

			//Deconnecte L'utilisateur 
			$authModel->logUserOut();
			
			$this->redirectToRoute('default_home');
		}
		//Si la SESSION EST VIDE 
		$this->redirectToRoute('loginUser');

	}

	/**
	 *Affiche le profil d'un membre sélectionné
	 * Page de profil
	**/
	public function profilUser()
	{
		//Si l'internaute accède à la page sans login, on le redirige vers la page 404
		if (empty($_SESSION)){
			$this->showNotFound();
		}
		else{
			//Instancie la classe "Controller" qui permet de sélectionner un utilisateur
			$userlogged = new AuthentificationModel();
			$user = $userlogged->getLoggedUser();//$id correspond à l'id en URL

			//Permet de gérer l'affichage
			$data = [
				'user' => $user, 
			];
		$this->show('default/profiluser', $data);
		}
	}

	/**
	 *Méthode pour verifier l'inscritipon de l'utilisateur
	 * Page d'inscription
	**/
	public function signIn()
	{

		$UsersModel = new UsersModel();

		$errors = [];
		$post = [];
		$success = false;

		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags',$_POST));
		
			if (!v::length(3, 25)->validate($post['firstname'])) {
				$errors[] = 'Votre prénom doit faire entre 3 et 25 caractères';
			}

			if (!v::length(3, 25)->validate($post['lastname'])) {
				$errors[] = 'Votre nom doit faire entre 3 et 25 caractères';
			}

			if (!v::length(4, 20)->validate($post['username'])) {
				$errors[] = 'Votre nom d\'utilisateur doit faire entre 4 et 20 caractères';
			}

			//si l'username existe déjà en BDD renverra TRUE
			if ($UsersModel->usernameExists($post['username'])) {
				$errors[] = 'Le pseudo est déjà utilisé';
			}

			/*if(!v::image()->validate($_FILES['picture']['tmp_name'])) {
				$errors[] = 'L\'image n\'est pas valide';
			}*/

			if (!v::email()->validate($post['email'])) {
				$errors[] = 'Votre e-mail n\'est pas valide';
			}

			//si l'email existe déjà en BDD renverra TRUE
			if ($UsersModel->emailExists($post['email'])) {
				$errors[] = 'L\'adresse email et déjà utilisé';
			}

			if (!v::length(7,null)->validate($post['password'])) {
				$errors[] = 'Le mot de passe doit avoir au moins 7 caractères';
			}

			if (count($errors) === 0 ) {
				 
				 $authModel = new AuthentificationModel(); // Permet d'utiliser la fonction de hash de password

				 //On instancie le modèle pour communiquer avec la BDD
				 $UserModel = new UsersModel();

				 $insert = $UserModel->insert( [
				 	'firstname' => $post['firstname'],
				 	'lastname'	=> $post['lastname'],
				 	'username'	=> $post['username'],
				 	/*'picture'	=> $_FILES['picture'],*/
				 	'email'		=> $post['email'],
				 	'password'	=> $authModel->hashPassword($post['password']),
				 	'role'		=> 'user',
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

		$this->show('default/signin', $params);
		
	}
	
	/*
	*
	* Page ajout livres
	* 
	 */
	public function ajoutlivres()
	{

	$UsersModel = new UsersModel();

	$errors = [];
	$post = [];
	$success = false;

		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags',$_POST));
		
			if (!v::length(3, 25)->validate($post['title'])) {
				$errors[] = 'Le titre doit faire entre 3 et 25 caractères';
			}

			if (!v::length(3, 25)->validate($post['author'])) {
				$errors[] = 'le nom de l\'auteur doit faire entre 3 et 25 caractères';
			}

			if (!v::length(4, 20)->validate($post['category'])) {
				$errors[] = 'la catégories doit faire entre 4 et 20 caractères';
			}

			/*if(!v::image()->validate($_FILES['picture']['tmp_name'])) {
				$errors[] = 'L\'image n\'est pas valide';
			}*/

			if (!v::length(3,null)->validate($post['condition'])) {
				$errors[] = 'L\'etat du livre doit avoir au moins 3 caractères';
			}

			if (count($errors) === 0 ) {
				 
				 //On instancie le modèle pour communiquer avec la BDD
				 $UserModel = new UsersModel();

				 $insert = $UserModel->insert( [
				 	'title'		=> $post['title'],
				 	'author'	=> $post['author'],
				 	'category'	=> $post['category'],
				 	/*'picture'	=> $_FILES['picture'],*/
				 	'condition'		=> $post['condition'],
				 	
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
		$this->show('default/ajoutlivres', $params);
		
	}

	/**
	 * Page Contact
	 */
	public function contact()
	{
		$this->show('default/contact');
	}

}

	




 ?>
<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use \W\Security\AuthentificationModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;

Class AdminController extends Controller
{
	/**
	* Page d'accueil de l'admin
	*/
	public function indexBack()
	{
		$this->show('default/admin/indexBack');
	}

	public function logIn()
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

	public function logOut()
	{
		if (isset($_GET['logout']) && $_GET['logout'] == 'yes') {
			$authModel = new AuthentificationModel;

			//Deconnecte L'utilisateur 
			$authModel->logUserOut($user);
			
			$this->$this->redirectToRoute('login');
		}

	}

	/**
	 *EN BACK Affiche le profil d'un membre sélectionné 
	 *@param int $id l'id du membre
	 * Page de profil
	**/
	public function profilBack($id)
	{
		//Si l'internaute accède à la page sans id, on le redirige vers la page 404
		if (!is_numeric($id) || empty($id)) {
			$this->showNotFound();
		}
		else{
		//Instancie la classe "UserModel" qui permet de sélectionné un utilisateur
		$UsersModel = new UsersModel();
		$user = $UsersModel->find($id);//$id correspond à l'id en URL

		//Permet de gérer l'affichage
		$data = [
			'user' => $user, //
		];
		$this->show('default/admin/profilBack', $data);
		}
	}


	/**
	 *Affiche tout les profil 
	 *@param data table de user
	 * Page de tout les profil
	 */
	public function listAll()
	{
	//Instancie la classe "UserModel" qui permet de sélectionner plusieurs utilisateurs
	$UsersModel = new UsersModel();
	$users = $UsersModel->findAll();

	//Permet de gérer l'affichage
	$data = ['users' => $users];
	$this->show('default/admin/list', $data);

	}
	
	/**
	 *Affiche tout les profil 
	 *@param data table de user
	 * Page de tout les profil
	 */
	
	public function delete($id)
	{
		if (!is_numeric($id) || empty($id)) {
			$this->showNotFound();
		}
		else{
			$UserDelete = new UsersModel();
			$user = $UserDelete->delete($id);

			$this->redirectToRoute('user_list');
		}	
	}
		
	public function add()
	{

	$UsersModel = new UsersModel();

	$errors = [];
	$post = [];
	$success = false;

		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags',$_POST));
		
			if (!v::length(3, 25)->validate($post['firstname'])) {
				$errors[] = 'Votre prénom doit faire entre 3 e 25 caractères';
			}

			if (!v::length(3, 25)->validate($post['lastname'])) {
				$errors[] = 'Votre nom doit faire entre 3 e 25 caractères';
			}

			if (!v::length(6, 20)->validate($post['username'])) {
				$errors[] = 'Votre nom d\'utilisateur doit faire entre 6 e 20 caractères';
			}

			//si l'username existe déjà en BDD renverra TRUE
			if ($UsersModel->usernameExists($post['username'])) {
				$errors[] = 'Le pseudo et déjà utilisé';
			}

			if(!v::image()->validate($_FILES['picture']['tmp_name'])) {
				$errors[] = 'L\'image n\'est pas valide';
			}

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

			if(!v::notEmpty()->validate($post['role'])){
				$errors[] = 'Vous devez choisir un rôle';
			};	

			if (count($errors) === 0 ) {
				 
				 $authModel = new AuthentificationModel(); // Permet d'utiliser la fonction de hash de password

				 //On instancie le modèle pour communiquer avec la BDD
				 $UserModel = new UserModel();

				 $insert = $UserModel->insert( [
				 	'firstname' => $post['firstname'],
				 	'lastname'	=> $post['lastname'],
				 	'username'	=> $post['username'],
				 	'picture'	=> $_FILES['picture'],
				 	'email'		=> $post['email'],
				 	'password'	=> $authModel->hashPassword($post['password']),
				 	'role'			=> $post['role'],
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

		$this->show('default/admin/addUser', $params);
	}
}
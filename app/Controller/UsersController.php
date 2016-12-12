<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use \W\Security\AuthentificationModel;


class UsersController extends Controller 
{

	/**
	 * 
	 * Page de login
	 *
	**/
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
			
			$this->redirectToRoute('articles_add');
		}
		else{
			$param = ['errors' => $errors];
			$this->show('default/user/login', $param);
		}

		$this->show('default/user/login');
	}

	/**
	 *Affiche le profil d'un membre sélectionné
	 *@param int $id l'id du membre
	 * Page de profil
	**/
	public function profil($id)
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
		$this->show('default/front/profil', $data);
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
/*
*
* Inscription utilisateur en AJAX
*
*/
	public function signIn()
	{
		$this->show('default/user/signin');

	}

/*
*
* Inscription utilisateur en PHP
*
*/
/*	public function add()
	{	
		if (!empty($_POST)) {
			
			$data =[
				'firstname' => $_POST['firstname'],
				'lastname'	=> $_POST['lastname'],
				'username'		=> $_POST['username'],
				'email'		=> $_POST['email'],
				'password'	=> password_hash($_POST['password'], PASSWORD_DEFAULT),
				'role'		=> $_POST['role'],	
			];
	
			$Insert = new UsersModel();
			$Insert->insert($data);
		}
		
		$this->show('default/user/add');		
	}*/

	public function delete($id)
	{
		if (!is_numeric($id) || empty($id)) {
			$this->showNotFound();
		}
		else{
			$UserDelete = new UsersModel();
			$user = $UserDelete->delete($id);

			$this->redirectToRoute('default_home');
		}

	}

	
}



 ?>
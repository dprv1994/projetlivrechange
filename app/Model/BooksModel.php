<?php 
namespace Model;

class BooksModel extends \W\Model\Model
{

	public function MyBooks()
	{	
		$requete = $bdd->prepare('SELECT books.title, users.username
		FROM  users
		INNER JOIN books
		ON books.id_users = users.id')

		$requete->execute();
	}

}

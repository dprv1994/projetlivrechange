<?php 
namespace Model;

class BooksModel extends \W\Model\Model
{

	public function AllBooks()
	{	

		$sql = 'SELECT books.title, users.username FROM users
				INNER JOIN books
				ON books.id_user = users.id';
				
		$select = $bdd->prepare($sql);

		if ($select->execute()) {
			$books = $select->fetchAll(\PDO::FETCH_ASSOC);
		}
		
	}

	/**
	 * Sélectionne les livres d'un utilisateur donné
	 * @param $id_user L'id de l'utilisateur
	 */
	public function MyBook($id_user)
	{

		if(!is_numeric($id_user)){
			return false;
		}

		$sql = 'SELECT * FROM books 
				INNER JOIN users
				ON users.id = books.id_user 
				WHERE users.id = :id';

		$select = $this->dbh->prepare($sql);
		$select->bindValue(':id', $id_user, \PDO::PARAM_INT);

		if ($select->execute()) {
			return $select->fetchAll(\PDO::FETCH_ASSOC);
		}
	}
}

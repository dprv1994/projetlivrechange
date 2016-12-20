<?php 
namespace Model;

class BooksModel extends \W\Model\Model
{

	public function MyBooks()
	{	

		$sql = 'SELECT books.title, users.username FROM users
				INNER JOIN books
				ON books.id_user = users.id';
				
		$select = $bdd->prepare($sql);

		if ($select->execute()) {
			$books = $select->fetchAll(PDO::FETCH_ASSOC);
		}
		
	}

	public function MyBook()
	{

		$sql = 'SELECT * FROM books 
				INNER JOIN users
				WHERE users.id = books.id_user';

		$select = $bdd->prepare($sql);

		if ($select->execute()) {
			$books = $select->fetchAll(PDO::FETCH_ASSOC);
		}
	}
}

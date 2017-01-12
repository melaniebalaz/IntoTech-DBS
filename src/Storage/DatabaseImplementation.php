<?php


namespace Melanie\Conference\Storage;


use Melanie\Conference\Core\AbstractDatabaseMigration;
use Melanie\Conference\Model\AttendantModel;
use PDO;

class DatabaseImplementation implements StorageInterface {
	/**
	 * @var PDO
	 */
	private $pdo;

	/**
	 * @param PDO $pdo
	 */


	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}



	public function getAttendantCount():int {
		$statement = $this->pdo->prepare('SELECT * FROM Attendants WHERE id=?');
		return($statement->execute());

	}

	public function saveAttendant(string $name, string $email, string $workshop) {
		$statement = $this->pdo->prepare('INSERT INTO Attendant (id, name, workshop) VALUES (?,?,?)');
		$statement->execute([$name, $email, $workshop]);
	}

}
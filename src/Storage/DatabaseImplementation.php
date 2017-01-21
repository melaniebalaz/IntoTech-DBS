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
		$statement = $this->pdo->prepare('SELECT COUNT (*) FROM Attendants WHERE id=?');
		return($statement->execute());

	}

	public function saveAttendant(string $name, string $email, string $workshopID) {

		$statement = $this->pdo->prepare('INSERT INTO Attendant (Attendant_Name, Email, WorkshopID) VALUES (?,?,?)');
		$statement->execute([$name, $email, $workshopID]);
	}

	public function getAllWorkshops() {
		// TODO: Implement getAllWorkshops() method.
	}

}
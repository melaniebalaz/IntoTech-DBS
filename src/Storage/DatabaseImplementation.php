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



	public function getAttendantCount() {
		$statement = $this->pdo->prepare('SELECT COUNT (*) FROM Attendants');
		$queryResult = $statement->execute();

	}

	public function saveAttendant(string $name, string $email, string $workshopID) {

		$statement = $this->pdo->prepare('INSERT INTO Attendant (Attendant_Name, Email, WorkshopID) VALUES (?,?,?)');
		$statement->execute([$name, $email, $workshopID]);

		//After attendant has been saved..write an email?
	}

	public function getAllWorkshops() {
		// TODO: Implement getAllWorkshops() method.
		$statement = $this->pdo->prepare('SELECT * FROM Workshop W INNER JOIN Event E ON W.Event_ID = E.Event_ID');
		$queryResult = ($statement->execute());


	}

}
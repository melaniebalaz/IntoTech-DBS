<?php


namespace Melanie\Conference\Storage;


use DateTime;
use Melanie\Conference\Core\AbstractDatabaseMigration;
use Melanie\Conference\DB\DatabaseConnection;
use Melanie\Conference\Model\Attendant;
use Melanie\Conference\Model\Workshop;
use PDO;

class DatabaseImplementation implements StorageInterface {
	/**
	 * @var PDO
	 */
	private $db;

	/**
	 * @param DatabaseConnection $db
	 */
	public function __construct(DatabaseConnection $db) {
		$this->db = $db;
	}



	public function getAttendantCount() {
		$result = $this->db->query('SELECT COUNT (*) AS cnt FROM Attendant');
		return $result[0]['cnt'];
	}

	public function saveAttendant(string $name, string $email, string $workshopID) {

		$this->db->query(
			'INSERT INTO Attendant (Attendant_Name, Email, WorkshopID) VALUES (:name,:email,:workshop)',
			[':name' => $name, ':email' => $email, ':workshop' => $workshopID]
		);
		//After attendant has been saved..write an email?
	}

	public function getAllWorkshops() {
		// TODO: Implement getAllWorkshops() method.
		$result = $this->db->query('
			SELECT
				WORKSHOPID, PARTICIPANTS_LIMIT, W.EVENTID, E.EVENTID, NAME, TOPIC, DESCRIPTION, BEGINTIME, ENDTIME, SPEAKERID
			FROM
				Workshop W
				INNER JOIN Event E ON W.EventID = E.EventID');

		$workshops = [];
		foreach($result as $row){
			$workshops[] = new Workshop(
				$row['WORKSHOPID'],
				$row['DESCRIPTION'],
				$row['TOPIC'],
				new DateTime($row['BEGINTIME']),
				new DateTime($row['ENDTIME']),
				$row['NAME'],
				$row['PARTICIPANTS_LIMIT']
			);
		}

		return $workshops;
	}

}
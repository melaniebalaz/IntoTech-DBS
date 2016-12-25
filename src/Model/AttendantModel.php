<?php


namespace Melanie\Conference\Model;


use PDO;

class AttendantModel {
	/**
	 * @var PDO
	 */
	private $pdo;

	/**
	 * @param PDO $pdo
	 */
	/*public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}*/

	public function getAttendantCount(){
		return 10;
	}

}
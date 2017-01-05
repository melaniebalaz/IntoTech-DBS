<?php


namespace Melanie\Conference\Storage;


use Melanie\Conference\Model\AttendantModel;

class DatabaseImplementation implements StorageInterface {
	/**
	 * @var PDO
	 */
	private $pdo;

	/**
	 * @param PDO $pdo
	 */

	/*
	public function __construct(\PDO $pdo) {
		$this->pdo = $pdo;
	}
	*/

	function getAttendeeCount():int {
		return 10;
	}

	function saveAttendee(string $name, string $email, string $workshop) {

	}

}
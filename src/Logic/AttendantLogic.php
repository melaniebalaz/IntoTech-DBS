<?php


namespace Melanie\Conference\Logic;


use InvalidArgumentException;
use Melanie\Conference\Model\AttendantModel;

class AttendantLogic {
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

	public function registerAttendant(AttendantModel $attendant){

	}

	public function getAttendantCount(){
		return 10;
	}

	public static function fromArray(array $data) : AttendantModel {
		if (!array_key_exists('name', $data) || !array_key_exists('email', $data)) {
			throw new InvalidArgumentException('Invalid argument: ' . var_export($data, true));
		}
		return new AttendantModel(
			$data['name'],
			$data['email'],
			$data['workshop']
		);
	}

}
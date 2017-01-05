<?php


namespace Melanie\Conference\Logic;


use InvalidArgumentException;
use Melanie\Conference\Model\AttendantModel;
use Melanie\Conference\Storage\StorageInterface;

class AttendantLogic {

	private $storageConnector;

	public function __construct(StorageInterface $storageConnector) {
		$this->storageConnector = $storageConnector;
	}

	/**
	 * @param string $name
	 * @param string $email
	 * @param string $workshop
	 * @throws \Exception from the Storage
	 */
	public function registerAttendant(string $name, string $email, string $workshop){
		if ($workshop == ''){
			$workshop = null;
		}
		$this->storageConnector->saveAttendee($name, $email, $workshop);
	}

	public function getAttendantCount() : int{
		return ($this->storageConnector->getAttendeeCount());
	}

	public static function fromArray(array $data) : AttendantModel {
		if (!array_key_exists('name', $data) || !array_key_exists('email', $data) || !array_key_exists('workshop', $data)) {
			throw new InvalidArgumentException('Invalid argument: ' . var_export($data, true));
		}
		return new AttendantModel(
			$data['name'],
			$data['email'],
			$data['workshop']
		);
	}

}
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
	public function registerAttendant($name, $email, $workshop){
		$this->storageConnector->saveAttendant($name, $email, $workshop);
	}

	public function getAttendantCount() : int{
		return ($this->storageConnector->getAttendantCount());
	}

}
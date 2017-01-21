<?php


namespace Melanie\Conference\Model;


use InvalidArgumentException;
use PDO;

class Attendant {

	private $name;
	private $email;
	private $workshop;

	public function __construct(string $name, string $email, string $workshop) {
		$this->name  = $name;
		$this->email = $email;
		$this->workshop = $workshop;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @return string
	 */
	public function getWorkshop() {
		return $this->workshop;
	}

}
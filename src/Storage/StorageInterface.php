<?php


namespace Melanie\Conference\Storage;


use Melanie\Conference\Model\AttendantModel;

interface StorageInterface {

	/**
	 * @return integer
	 */
	function getAttendantCount();


	function saveAttendant(string $name, string $email, string $workshopID);

	/**
	 * @return array of Workshops
	 */
	function getAllWorkshops();

}
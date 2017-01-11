<?php


namespace Melanie\Conference\Storage;


use Melanie\Conference\Model\AttendantModel;

interface StorageInterface {

	function getAttendantCount():int;
	function saveAttendant(string $name, string $email, string $workshop);

}
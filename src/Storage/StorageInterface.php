<?php


namespace Melanie\Conference\Storage;


use Melanie\Conference\Model\AttendantModel;

interface StorageInterface {

	function getAttendeeCount():int;
	function saveAttendee(string $name, string $email, string $workshop);

}
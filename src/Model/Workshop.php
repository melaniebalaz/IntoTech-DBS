<?php


namespace Melanie\Conference\Model;


class WorkshopModel {

	private $workshopID;
	private $workshopDescription;
	private $workshopName;
	private $participants;
	private $eventID;

	/**
	 * WorkshopModel constructor.
	 * @param $workshopID
	 * @param $workshopDescription
	 * @param $workshopName
	 * @param $participants
	 * @param $requirements
	 * @param $eventID
	 */
	public function __construct($workshopID, $workshopDescription, $workshopName, $participants, $eventID) {
		$this->workshopID = $workshopID;
		$this->workshopDescription = $workshopDescription;
		$this->workshopName = $workshopName;
		$this->participants = $participants;
		$this->eventID = $eventID;
	}

	/**
	 * @return integer
	 */
	public function getWorkshopID() {
		return $this->workshopID;
	}


	/**
	 * @return String
	 */
	public function getWorkshopName() {
		return $this->workshopName;
	}


	/**
	 * @return integer
	 */
	public function getParticipants() {
		return $this->participants;
	}

	/**
	 * @return String
	 */
	public function getWorkshopDescription() {
		return $this->workshopDescription;
	}
	/**
	 * @return integer
	 */
	public function getEventID() {
		return $this->eventID;
	}

}
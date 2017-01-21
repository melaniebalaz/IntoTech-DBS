<?php


namespace Melanie\Conference\Model;


class Workshop {

	/**
	 * @var integer
	 */
	private $workshopID;

	/**
	 * @var string
	 */
	private $workshopDescription;

	/**
	 * @var string
	 */
	private $topic;

	/**
	 * @var \DateTime
	 */
	private $begintime;

	/**
	 * @var \DateTime
	 */
	private $endtime;

	/**
	 * @var string
	 */
	private $workshopName;

	/**
	 * @var integer
	 */
	private $participants;


	/**
	 * Workshop constructor.
	 * @param int $workshopID
	 * @param string $workshopDescription
	 * @param string $topic
	 * @param \DateTime $begintime
	 * @param \DateTime $endtime
	 * @param string $workshopName
	 * @param int $participants
	 */
	public function __construct($workshopID, $workshopDescription, $topic, \DateTime $begintime, \DateTime $endtime, $workshopName, $participants) {
		$this->workshopID = $workshopID;
		$this->workshopDescription = $workshopDescription;
		$this->topic = $topic;
		$this->begintime = $begintime;
		$this->endtime = $endtime;
		$this->workshopName = $workshopName;
		$this->participants = $participants;
	}

	/**
	 * @return int
	 */
	public function getWorkshopID(): int {
		return $this->workshopID;
	}

	/**
	 * @return string
	 */
	public function getWorkshopDescription(): string {
		return $this->workshopDescription;
	}

	/**
	 * @return string
	 */
	public function getTopic(): string {
		return $this->topic;
	}

	/**
	 * @return \DateTime
	 */
	public function getBegintime(): \DateTime {
		return $this->begintime;
	}

	/**
	 * @return \DateTime
	 */
	public function getEndtime(): \DateTime {
		return $this->endtime;
	}

	/**
	 * @return string
	 */
	public function getWorkshopName(): string {
		return $this->workshopName;
	}

	/**
	 * @return int
	 */
	public function getParticipants(): int {
		return $this->participants;
	}



}
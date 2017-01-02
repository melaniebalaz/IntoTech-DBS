<?php

namespace Melanie\Conference\Controller;

use Melanie\Conference\Logic\AttendantLogic;
use Melanie\Conference\Model\AttendantModel;
use Melanie\Conference\Model\SampleModel;
use Psr\Http\Message\RequestInterface;

class IndexController {

	private $attendantLogic;

	public function __construct(AttendantLogic $attendantLogic) {
		$this->attendantLogic = $attendantLogic;
	}

	public function index() {
		return [
			'remainingTickets' => 200-$this->attendantLogic->getAttendantCount(),
		];
	}


	public function team(){
		return [];
	}

	public function workshops(){
		return [];
	}

	public function program(){
		return [];
	}

	public function why(){
		return [];
	}

	public function location(){

		return [];
	}

	public function register(RequestInterface $request){
		$newAttendant = $this->attendantLogic->fromArray(json_decode($request->getBody(), true));
		//now save the new attendant to the storage, in a try-catch block

		//if all goes well
		return json_encode(['success' => true]);

		//if all doesnt go well return false
	}
}
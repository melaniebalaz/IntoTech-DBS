<?php

namespace Melanie\Conference\Controller;

use Melanie\Conference\Model\AttendantModel;
use Melanie\Conference\Model\SampleModel;

class IndexController extends AbstractController {
	public function index(AttendantModel $attendantModel) {
		return [
			'remainingTickets' => 200-$attendantModel->getAttendantCount(),
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
}
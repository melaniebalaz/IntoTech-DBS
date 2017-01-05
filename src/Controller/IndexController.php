<?php

namespace Melanie\Conference\Controller;

use Melanie\Conference\Logic\AttendantLogic;
use Melanie\Conference\Model\AttendantModel;
use Melanie\Conference\Model\SampleModel;
use Melanie\Conference\Storage\StorageInterface;
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
		$newAttendant = json_decode($request->getBody(), true);
		if (json_last_error()){
			return json_encode(['success' => false]);
		}
		foreach (['name','email','workshop'] as $key){
			if (!array_key_exists($key,$newAttendant)){
				return json_encode(['success' => false]);
			}
		}
		//if all goes well
		try{
			$this->attendantLogic->registerAttendant($newAttendant['name'],$newAttendant['email'],$newAttendant['workshop']);
			return json_encode(['success' => true]);

		} catch (\Exception $e) {
			return json_encode(['success' => false]);
		}
	}
}
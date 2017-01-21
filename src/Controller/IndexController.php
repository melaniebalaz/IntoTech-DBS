<?php

namespace Melanie\Conference\Controller;

use Melanie\Conference\Logic\AttendantLogic;
use Melanie\Conference\Model\AttendantModel;
use Melanie\Conference\Model\SampleModel;
use Melanie\Conference\Storage\StorageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexController {

	private $attendantLogic;
	private $storage;

	public function __construct(AttendantLogic $attendantLogic, StorageInterface $storage) {
		$this->attendantLogic = $attendantLogic;
		$this->storage = $storage;
	}

	public function index() {
		return [
			'remainingTickets' => 200-$this->attendantLogic->getAttendantCount(),
			'workshops' => $this->storage->getAllWorkshops()
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

	public function register(ServerRequestInterface $request){
		$newAttendant = json_decode($request->getBody(), true);
		if (json_last_error()){
			return json_encode(['success' => false]);
		}
		foreach (['name','email','workshopID'] as $key){
			if (!array_key_exists($key,$newAttendant)){
				return json_encode(['success' => false]);
			}
		}
		//if all goes well
		try{
			$this->attendantLogic->registerAttendant($newAttendant['name'],$newAttendant['email'],$newAttendant['workshopID']);
			return json_encode(['success' => true]);

		} catch (\Exception $e) {
			return json_encode(['success' => false]);
		}
	}
}
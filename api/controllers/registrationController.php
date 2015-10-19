<?php  

Class registrationController {

	public function readRegistrations(){
		$params = json_decode(file_get_contents('php://input'),true);
		$registrations = new Registrations_Collection();
		$registrations->order_by('id');
		$registrations->where('deleted', '0');
		$registrations->get();
		header('Content-Type: application/json');
		echo ($registrations);
	}

	public function createRegistration(){
		$registration = new Registration();
		$registration->fill(Input::all());
		$registration->save();
		header('Content-Type: application/json');
		echo ($registration);
	}
	
}
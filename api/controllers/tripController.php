<?php  

Class tripController {

	public function readTrips(){
		$params = json_decode(file_get_contents('php://input'),true);
		$trips = new Trips_Collection();
		$trips->order_by('id');
		$trips->where('deleted', '0');
		$trips->get();
		header('Content-Type: application/json');
		echo ($trips);
	}

	public function createTrip(){
		$trip = new Trip();
		$trip->fill(Input::all());
		$trip->save();
		header('Content-Type: application/json');
		echo ($trip);
	}

	public function readTrip(){
		$trip = new Trip();
		$trip->load(Route::param('id'));
		header('Content-Type: application/json');
		echo ($trip);
	}

	public function updateTrip(){
		$trip = new Trip();
		$trip->load(Route::param('id'));
		if (Input::get('name')) {
			$trip->name = Input::get('name');
		}
		if (Input::get('description')) {
			$trip->description = Input::get('description');
		}
		if (Input::get('days')) {
			$trip->days = Input::get('days');
		}
		if (Input::get('date')) {
			$trip->date = Input::get('date');
		}
		$trip->save();
		header('Content-Type: application/json');
		echo $trip;
	}

	public function deleteTrip(){
		$params = json_decode(file_get_contents('php://input'),true);
		$id = $params['id'];
		$trip = new Trip();
		$trip->load(Route::param('id'));
		$trip->deleted = 1;
		$trip->save();
		header('Content-Type: application/json');
		echo $trip;
	}
	
}
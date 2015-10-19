<?php  

Class userController {

	// public function __construct(){
	// 	if(!Auth::is_logged_in()){
	// 		http_response_code(401);
	// 		echo json_encode([
	// 			'error' => 'You are not logged in'
	// 		]);
	// 		exit;
	// 	}
	// }


	public function readUsers(){
		$params = json_decode(file_get_contents('php://input'),true);
		$users = new Users_Collection();
		$users->get();
		header('Content-Type: application/json');
		echo ($users);
	}

	public function readUser(){
		$id = Auth::user_id();
		$user = new User();
		$user->load(Route::param('id'));
		header('Content-Type: application/json');
		echo ($user);
	}

	public function createUser(){
		$user = new User();
		$user->name = Input::get('name');
		$user->name = Input::get('email');
		$user->password = password_hash(Input::get('password'), PASSWORD_DEFAULT);

		// If there is a file to upload
		if($_FILES){
			# Upload the file and...
			$files = UPLOAD::to_folder(ASSETS.'uploads/');
			# Put a link to it in the database
			$user->profile = $files[0]['filepath'];
		}

		$user->save();
		header('Content-Type: application/json');
		echo $list;
	}
	
}

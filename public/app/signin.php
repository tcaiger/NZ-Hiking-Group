<?php

# 1. Logic
if($_POST){

	# Attempt to log the user in
	$user = new User();

	$user->email = $_POST['email'];
	$user->password = $_POST['password'];

	$success = $user->authenticate();

	if($success){
		Auth::log_in($user->id);
		URL::redirect('/admin');
		
	}else{
		$msg = '<p class="error">Your login details are incorrect.</p>';
	}
}


# 3. Load Views / Redirects

include VIEWS.'header.php';
include VIEWS.'signin.php';
include VIEWS.'footer.php';

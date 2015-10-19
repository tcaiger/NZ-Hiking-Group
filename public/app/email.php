<?php

Class sendEmail {

	//==========================
	// Newsletter Emails
	//==========================
	public function newsletter(){
		$email = new Email();
		$email->from = '"NZ HIking" <admin@gmail.com>';
		$email->to = $_POST['email'];
		$email->subject = 'NZ Hiking Group Newsletter';
		$email->message = get_include_contents(VIEWS.'email-newsletter.php');

		$email->send();

		URL::redirect('/');
	}

	//==========================
	// Trip Registration Emails
	//==========================
	public function registration(){

		$email = new Email();
		$email->from = '"NZ HIking" <admin@gmail.com>';
		$email->to = Input::get('email');
		$email->subject = 'NZ Hiking Group Trip Registration';
		$email->message = get_include_contents(VIEWS.'email-reg.php');

		$email->send();
		
		return ($email);
	}


	//==========================
	// Contact Form Emails
	//==========================
	public function contact(){
		$email = new Email();
		$email->from = 'NZ Hiking Group';
		$email->to = 'caigertom@gmail.com';
		$email->subject = 'NZ Hiking Group - Query';
		$email->message = 
			'<h3>NZ HIKING GROUP QUERY</h3>
			<p>Name: '.$_POST['fname'].$_POST['lname'].'</p>
			<p>Email: '.$_POST['email'].'</p>
			<p>Message: '.$_POST['message'].'</p>';

		$email->send();

		if($email->success){
			echo 'Email send successfully!';
		} else {
			echo "Error";
		}
		URL::redirect('/');
	}

}

// Include the email contents from the views folder
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}


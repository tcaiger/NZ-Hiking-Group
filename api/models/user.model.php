<?php


class User extends Model{

	protected $table = 'users';

	public function authenticate(){

		$user = $this->db->select('*')
					 ->from($this->table)
					 ->where('email', $this->email)
					 ->get_one();

		# if no user was loaded, return false
		if(!$user){
			return false;

		}

		if(password_verify($this->password, $user['password'])) {
			$this->fill($user);

			return true;

		}else{

			return false;
		}
	}

}
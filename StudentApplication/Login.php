<?php
class Login{
	private $_username;
	private $_password;
	private $_role;
	
	// Constructors
	public function __construct($username, $password, $role) {
		$this->setUsername($username);
		$this->setPassword($password);
		$this->setRole($role);
	}
	
	// Getters
	public function getUsername() {
		return $this->_username;
	}
		
	public function getPassword() {
		return $this->_password;
	}

	public function getRole() {
		return $this->_role;
	}
	
	// Setters
	public function setUsername($username) {
		if(is_string($username) && strlen($username) <= 20) {
			$this->_username = $username;
		}
	}
	
	public function setRole($role) {
			if(is_string($role) && strlen($role) <= 20) {
				$this->_name = $name;
			}
	}
	
	public function setPassword($password) {
			if(is_string($password) && strlen($password) <= 10) {
				$this->_password = $password;
			}
	}
		
}



?>
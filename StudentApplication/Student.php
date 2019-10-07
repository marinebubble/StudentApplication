<?php
	class Student {
		private $_id;
		private $_gender;
		private $_fName;
		private $_lName;
		private $_major;
		private $_batch;
		private $_email;
		private $_address;
		
		// Constructors
		public function __construct($id, $gender, $fName, $lName, $major, $batch, $email, $address)
		{
			$this->setId($id);
			$this->setfName($fName);
			$this->setlName($lName);
			$this->setMajor($major);
			$this->setBatch($batch);
			$this->setEmail($email);
			$this->setAddress($address);
		}
		
		// Getters
		public function getId() {
			return $this->_id;
		}
		
		public function getGender() {
			return $this->_gender;
		}
		
		public function getfName() {
			return $this->_fName;
		}
		
		public function getlName() {
			return $this->_lName;
		}
		
		public function getMajor() {
			return $this->_major;
		}
		
		public function getBatch() {
			return $this->_batch;
		}
		
		public function getEmail() {
			return $this->_email;
		}
		
		public function getAddress() {
			return $this->_address;
		}
		
		// Setters
		public function setId($id) {
			if(is_string($id) && strlen($id) <= 10) {
				$this->_id = $id;
			}
		}
		
		public function setGender($gender) {
			if(is_string($gender) && strlen($gender) <= 1) {
				$this->_gender= $gender;
			}
		}
		
		public function setfName($fName) {
			if(is_string($fName) && strlen($fName) <= 50) {
				$this->_fName= $fName;
			}
		}
		
		public function setlName($lName) {
			if(is_string($lName) && strlen($lName) <= 50) {
				$this->_lName= $lName;
			}
		}
		
		public function setMajor($major) {
			if(is_string($major) && strlen($major) <= 100) {
				$this->_major= $major;
			}
		}
		
		public function setBatch($batch) {
				$this->_batch = (int) $batch;
		}
		
		public function setEmail($email) {
			if(is_string($email) && strlen($email) <= 50) {
				$this->_email= $email;
			}
		}
		
		public function setAddress($address) {
			if(is_string($address) && strlen($address) <= 100) {
				$this->_address= $address;
			}
		} 
		
	}
?>
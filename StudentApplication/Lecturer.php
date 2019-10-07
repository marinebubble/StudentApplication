<?php
	class Lecturer {
		private $_id;
		private $_gender;
		private $_fName;
		private $_lName;
		private $_specialization;
		private $_address;
		
		// Constructors
		public function __construct($id, $gender, $fName, $lName, $specialization, $address)
		{
			$this->setId($id);
			$this->setGender($gender);
			$this->setfName($fName);
			$this->setlName($lName);
			$this->setSpecialization($specialization);
			
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
		
		public function getSpecialization() {
			return $this->_specialization;
		}
		
		public function getAddress() {
			return $this->_address;
		}
		
		// Setters
		public function setId($id) {
			if(is_string($id) && strlen($id) <= 5) {
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
		
		public function setSpecialization($specialization) {
			if(is_string($specialization) && strlen($specialization) <= 100) {
				$this->_specialization= $specialization;
			}
		}
		
		public function setAddress($address) {
			if(is_string($address) && strlen($address) <= 100) {
				$this->_address= $address;
			}
		} 
		
	}
?>
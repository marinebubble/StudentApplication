<?php

require_once('dbconfig.php');

 class LecturerManager {	
	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
		
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	public function viewLecturer(){
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM Lecturer");
			$stmt->execute();
			while($userRow=$stmt->fetch(PDO::FETCH_ASSOC)){
			
			$id = $userRow['LecturerID'];
			$gender = $userRow['LecturerGender'];
			$fName = $userRow['LecturerFName'];
			$lName = $userRow['LecturerLName'];
			$specialization = $userRow['LecturerSpecialization'];
			$address = $userRow['LecturerAddress'];
			return new Lecturer($fname,$lname);
			//$sa[] = new Lecturer($id, $gender, $fName, $lName, $specialization, $address);
		}   
		}		
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
 }
	
 
?>
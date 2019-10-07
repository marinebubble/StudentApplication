<?php
require_once('dbconfig.php');

 class MeetingManager {	
	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
		
    }
	
	
	public function booking($sid_para, $lname_para, $time_para, $location_para, $mstatus_para)
	{
		try
		{
			$sql = "INSERT INTO Meeting(StudentID, LecturerLName, MeetingTime, MeetingLocation, MeetingStatus)
			VALUES ('$sid_para', '$lname_para', '$time_para', '$location_para', '$mstatus_para' )";
			$this->conn->exec($sql);
			return true;
		} 
		
		catch(PDOException $e)
		{
			echo $e->getMessage();
			
		}
	}
	
	/*
	public function viewLecturer(){
		try
		{
			//$lects[];
			$sql = "SELECT LecturerFName, LecturerLName FROM Lecturer";
			$row=$this->conn->exec($sql);
			
			
			//return true;
			//$lects[] = $sql;
			
			//while($row = mysql_fetch_assoc($result)){
			// $json[] = $row;
			
			
	}

	
		catch(PDOException $e)
		{
			echo $e->getMessage();
			
		}
		return $lects;
	}
	*/
	
	

 }
	
 
?>
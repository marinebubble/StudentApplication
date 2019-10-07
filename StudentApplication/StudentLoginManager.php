<?php

require_once('dbconfig.php');

 class StudentLoginManager {	
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
	
	
	public function doLogin($uname,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT username, passwords FROM login WHERE username=:uname AND role='student'");
			$stmt->execute(array(':uname'=>$uname));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if($upass == $userRow['passwords'])
				{
					$_SESSION['user_session'] = $userRow['username'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}    
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
		exit();
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);	
		return true;
	}
 }
	
 
?>
<?php
class USER
{
	private $database;
	
	function __construct($connection)
	{
		$this->database = $connection;
	}
	
	public function register($first_name,$last_name,$username,$email,$password)
	{
		try
		{
			$created_password = password_hash($password, PASSWORD_DEFAULT);
			
			$res = $this->database->prepare("INSERT INTO users(username,email,password) 
		                                               VALUES(:username, :email, :password)");
												  
			$res->bindparam("username", $username);
			$res->bindparam("email", $email);
			$res->bindparam("password", $created_password);										  
				
			$res->execute();	
			
			return $res;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	public function login($username,$email,$password)
	{
		try
		{
			$query = "SELECT * FROM users WHERE username= username OR email= email LIMIT 1";
			$result = mysqli_query($connection, $query);
            $userRow= mysqli_fetch_assoc($result);
			if($result->rowCount() > 0)
			{
				if(password_verify($password, $userRow['password']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
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
	}
	
	public function logout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>
<?php
function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}

	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
function valid_query($query_result){
  if (!$query_result){
    die("query faild. check you query and try again!");
  }
}
 function find_users() {
    global $connection;
    
    $sql  = "SELECT * ";
    $sql .= "FROM tb_users ";
    $sql .= "ORDER BY first_name ASC";
    $user_result = mysqli_query($connection, $sql);
    valid_query($user_result);
    return $user_result;
  }

function users_by_id($user_id) {
		global $connection;
		
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);
		
		$query  = "SELECT * ";
		$query .= "FROM tb_users ";
		$query .= "WHERE user_id = {$safe_user_id} ";
		$query .= "LIMIT 1";
		$user_result = mysqli_query($connection, $query);
		valid_query($user_result);
		if($user = mysqli_fetch_assoc($user_result)) {
			return $user;
		} else {
			return null;
		}
	}
?>
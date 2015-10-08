<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>
 <?php
		  //escap user input for security purposes
		  $person_id = mysqli_real_escape_string($connection, $_POST[  'person_id']);
		  $first_name = mysqli_real_escape_string($connection, $_POST[  'first_name']);
		  $last_name = mysqli_real_escape_string($connection, $_POST[  'last_name']);
		  $email = mysqli_real_escape_string($connection, $_POST['email']);
		  $ocupation = mysqli_real_escape_string($connection, $_POST[  'ocupation']);
	
		//insert query
		$add_user ="INSERT INTO tb_users (person_id, first_name, last_name, email, ocupation)
		VALUES ('$person_id','$first_name','$last_name', '$email', '$ocupation')";
		
		if(mysqli_query($connection, $add_user)){
			echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
			redirect_to("users.php");
			
		}
		 else{
			redirect_to("users.php");
			 $message=" ERROR: unable tp add the record." . mysqli_error($connection);
		 }
		  ?>  
			
		   
			
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php
  $user = users_by_id($_GET["user_id"]);
  if (!$user) {
    // admin ID was missing or invalid or 
    // admin couldn't be found in database
    redirect_to("users.php");
  }
  
  $id = $user["user_id"];
  $query = "DELETE FROM tb_users WHERE user_id = {$id} LIMIT 1";
  $result = mysqli_query($connection, $query);

  if ($result && mysqli_affected_rows($connection) == 1) {
    // Success
  echo '<script language="javascript">';
echo 'alert("record successfully deleted")';
echo '</script>';
    redirect_to("users.php");
  } else {
    // Failure
    $_SESSION["message"] = "user deletion failed.";
    redirect_to("users.php");
  }
  
?>
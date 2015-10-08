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
  
      //escap user input for security purposes
      
      $first_name = mysqli_real_escape_string($connection, $_POST[  'first_name']);
      $last_name = mysqli_real_escape_string($connection, $_POST[  'last_name']);
      $email = mysqli_real_escape_string($connection, $_POST['email']);
      $ocupation = mysqli_real_escape_string($connection, $_POST[  'ocupation']);
  

  $id = $user["user_id"];
  $person_id = $user["person_id"];
  $last_name = mysql_prep($_POST["last_name"]);
  $query = "UPDATE tb_users SET ";
  $query = "user_id = '{$id}' ";
  $query = "person_id = '{$person_id}' ";
  $query = "first_name = '{$first_name}' ";
  $query = "last_name = '{ $last_name}' ";
  $query = "email = '{$email}' ";
  $query = "ocupation = '{$ocupation}' ";
  $result = mysqli_query($connection, $query);

 
?>

<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
   
   
    
    <h2>Edit Admin: <?php echo htmlentities($user["first_name"]); ?></h2>
    <form action="update_user.php?user_id=<?php echo urlencode($user["user_id"]); ?>" method="post">
      <p>Username:
        <input type="text" name="username" value="<?php echo htmlentities($user["first_name"]); ?>" />
      </p>
      <p>First Name:
        <input type="text" name="first_name" value="" />
      </p>
      <p>Last Name:
        <input type="text" name="last_name" value="" />
      </p>
      <p>Email:
        <input type="email" name="email" value="" />
      </p>
      <p>ocupation:
        <input type="text" name="ocupation" value="" />
      </p>
      <input type="submit" name="submit" value="Edit Admin" />
    </form>
    <br />
    <a href="users.php.php">Cancel</a>
  </div>
</div>


<?php require_once("includes/db_connection.php"); ?>
<?php require_once("user-login.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
if(!$user->is_loggedin())
{
  $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$query = "SELECT * FROM users WHERE user_id = user_id";
$result = mysqli_query($connection, $query);
$userRow= mysqli_fetch_assoc($result);
?>


<?php include("includes/layouts/header.php"); ?>
<!--include header content-->
<?php include("includes/nav_bar.php"); ?>
<!-- body starts -->
<div class="container">
	<!--include navigation bar-->
  <?php require_once("includes/navigation_bar.php"); ?>
		  </div>  
		<!--page conent-->
		<div id="page">
		  <div class="col-md-9">
		  
				<!--admin bar-->
				<div class="row admin-bar">
				  
<div class="col-md-1"><a href="#"><i class="fa fa-download "></i></a></div>
<div class="col-md-1"><a href="#"><i  class="fa fa-print"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-trash"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-upload"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-info"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-folder-open-o"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-filter"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-check"></i></a></div>
<div class="col-md-1"><a href="#"><i class="fa fa-bell-o"></i></a></div>

</div><!--admin bar ends-->
<p>&nbsp;</p>
<hr>
<h4> List of application users</h4>
<hr>
<button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal"><i class="icon-plus-sign"></i>Add a user</button><br>
<p> <?php  $message ?></p>
<table class="table table-striped" >
<tr>
  <td>ID</td>
  <td>person ID</td>
  <td>Fname</td>
  <td>Lname</td>
  <td>Email</td>
  <td>Job</td>
    <td>Delete</td>
    <td>Edit</td>
</tr>


<?php
//display players
$user_result = find_users();
while ($user = mysqli_fetch_assoc($user_result)){
  echo "<tr>";
	     echo '<td>' .  htmlentities($user['user_id']) . '</td>';
		echo '<td>' . htmlentities($user['person_id']) . '</td>';
		echo '<td>' . htmlentities($user['first_name']) . '</td>';
		echo '<td>' . htmlentities($user['last_name']) . '</td>';
		echo '<td>' . htmlentities($user['email']) . '</td>';
		echo '<td>' . htmlentities($user['ocupation']) . '</td>';
		echo '<td><a href="delete_user.php?user_id=' . urlencode($user['user_id']) . '">Delete</a></td>';
		echo '<td><a href="update_user.php?user_id=' . urlencode($user['user_id']) . '">Edit</a></td>';
		echo "</tr>"; 
  }
?>
			</div> 
			 <p>&nbsp;</p> 
			  
			<!--modal starts-->
			<!-- Trigger the modal with a button -->



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal">&times;</button>
	  <h4 class="modal-title">Click submit when you done!</h4>
	</div>
	<div class="modal-body">
	<form action="add_user.php" method="POST">
	 <div class="form-group required">
	 

<input type="text" class="form-control" id="person_id" placeholder="User ID" name="person_id" maxlength="6">

</div>
<div class="form-group required">

<input type="text" class="form-control" id="first_name" required="required" placeholder="First Name" name="first_name" maxlength="20">
</div>
<div class="form-group required">

<input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" required="required" maxlength="20">
</div>
<div class="form-group required">

<input type="text" class="form-control" id="email" placeholder="Email Address" name="email" required="required" maxlength="20">
</div>
<div class="form-group required">

<input type="text" class="form-control" id="ocupation" placeholder="Ocuppation" name="ocupation" required="required" maxlength="20">
</div>
	 
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  <button type="submit" class="btn btn-default" >Submit</button>
	</div>
	</form>
  </div>

</div>
</div>
	   <!--php for modal-->
		
		   
			<!--modal ./ends-->
			
			
			
			
		  </div> <!--col-md-9--ends-->
		</div><!--page ends-->
  </div>
</div>

<?php include("includes/layouts/footer.php"); ?>
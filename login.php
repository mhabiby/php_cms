<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>

<?php
$username = "";

if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  if (empty($errors)) {
    // Attempt Login

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $found_admin = attempt_login($username, $password);

    if ($found_admin) {
      // Success
      // Mark user as logged in
      $_SESSION["admin_id"] = $found_admin["id"];
      $_SESSION["username"] = $found_admin["username"];
      redirect_to("admin.php");
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not found.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>
<!--include header-->
<?php $layout_context = "admin"; ?>
<?php include("includes/layouts/header.php"); ?>
<!-- body starts -->
<div class="container">
	<div class="row">
  			<div class="col-md-3" id="navigation">
              	
				<div class="well"> 
              <p>use "mohammed"	as username</p><br>
              <p>and "test1" as password</p>
  				</div>

      		</div>  
          <div id="page"><!--page starts-->
      		<div class="col-md-9">
          <!--show login errors-->
          <?php echo message(); ?>
        <?php echo form_errors($errors); ?>
        <!--login form-->
      <form class="form-signin"  action"login.php" method="post">       
      <h2 class="form-signin-heading">Admin Login</h2>
      <input type="text" class="form-control" name="username" value=""  placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">Login</button>   
    </form>   	
      		</div> 
          </div><!--page ends-->
  	</div>
</div>

<?php include("includes/layouts/footer.php"); ?>
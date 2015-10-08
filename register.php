<!--code for new user sign up -->
   <?php
 require_once 'includes/db_connection.php';

  if($user->is_loggedin()!="")
{
  $user->redirect('admin.php');
}

 
 if(isset($_POST['btn-signup']))
{
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);  
  
  if($username=="") {
    $error[] = "provide username !";  
  }
  else if($email=="") {
    $error[] = "provide email id !";  
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
  }
  else if($password=="")  {
    $error[] = "provide password !";
  }
  else if(strlen($password) < 6){
    $error[] = "Password must be atleast 6 characters"; 
  }
  else
  {
    try
    {
      $res = $DB_connection->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
      $res->execute(array(':username'=>$username, ':email'=>$email));
      $row=$res->fetch(PDO::FETCH_ASSOC);
        
      if($row['username']==$username) {
        $error[] = "sorry username already taken !";
      }
      else if($row['email']==$email) {
        $error[] = "sorry email id already taken !";
      }
      else
      {
        if($user->register($first_name,$last_name,$username,$email,$password))  {
          
          $user->redirect('register.php?joined');
        }
      }
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  } 
}

?>


<?php $layout_context = "user"; ?>
<!--include header-->
<?php include("includes/layouts/header.php"); ?>


 <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Please Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                           <h2>Sign up.</h2><hr />
            <?php
      if(isset($error))
      {
        foreach($error as $error)
        {
           ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
        }
      }
      else if(isset($_GET['joined']))
      {
         ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
      }
      ?>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-sm" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Email Address">
                            </div>

                            

                            <input type="submit" value="Register" class="btn btn-success btn-block" name="btn-signup">
                            <hr>
                            <p> you have an account?
                            <a type="submit" value="Register" class="btn btn-info btn-block" name="btn-signup" href="index.php">Sign in</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include("includes/layouts/footer.php"); ?>
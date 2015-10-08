
<?php
require_once 'includes/db_connection.php';

if($user->is_loggedin()!="")
{
  $user->redirect('admin.php');
}

if(isset($_POST['btn-login']))
{
  $username = $_POST['txt_uname_email'];
  $email = $_POST['txt_uname_email'];
  $password = $_POST['txt_password'];
    
  if($user->login($username,$email,$password))
  {
    $user->redirect('index.php');
  }
  else
  {
  echo '<script language="javascript">';
echo 'alert("please check your username and password and log in again !")';
echo '</script>'; 
  } 
}
?>
<?php $layout_context = "user"; ?>
<!--include header-->
<?php include("includes/layouts/header.php"); ?>
      
        <!--login form-->
 <div class="row">
        <div class="col-mm-12">
       
        </div>
      </div>

<div class="container">
    <div class="row centered-form" >
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ADMIN LOG IN</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post">
                       <?php
      if(isset($error))
      {
           ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                     </div>
                     <?php
      }
      ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="user name = demo" name="txt_uname_email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="txt_password" placeholder="password= demo123" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                            </label>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" name="btn-login" type="submit" value="Login">
                        <hr>
                        <p>don't have an account? No problem!
                         <a  class="btn btn-lg btn-primary btn-block" href="register.php" name="submit" type="submit" value="Sign Up" >Sign up</a>
                        
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


   




<?php include("includes/layouts/footer.php"); ?>
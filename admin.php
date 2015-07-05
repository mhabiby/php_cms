
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
<?php include("includes/layouts/header.php"); ?>
<!-- body starts -->
<div class="container">
	<div class="row">
  <!--navigation bar-->
  			<div class="col-md-3" id="navigation">
              	
				<div class="well"> 
             <div class="list-group">
  <a  class="list-group-item active">Manage</a>
  <a href="manage_content.php" class="list-group-item"><i class="fa fa-folder-open-o"></i>
Manage Content</a>
  <a href="manage_admins.php" class="list-group-item"><i class="fa fa-user"></i>
Manage users</a>
   <a href="logout.php" class="list-group-item"><i class="fa fa-lock"></i>
Log out</a>
</div>
 <p></p>
      <div class="list-group">
  <a  class="list-group-item active">View</a>
  <a href="manage_content.php" class="list-group-item"><i class="fa fa-area-chart"></i>
Sale</a>
  <a href="manage_admins.php" class="list-group-item"><i class="fa fa-history"></i>
History</a>
   <a href="logout.php" class="list-group-item"><i class="fa fa-calendar"></i>
Tasks</a>
</div>

  				</div>

      		</div>  
          <!--page conent-->
          <div id="page">
      		<div class="col-md-9">
              	
      
              	
              	
      		</div> 
          </div><!--page ends-->
  	</div>
</div>

<?php include("includes/layouts/footer.php"); ?>

<?php
//include db connection
include_once 'includes/db_connection.php';
if(!$user->is_loggedin())
{
  $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$query = "SELECT * FROM users WHERE user_id = user_id";
$result = mysqli_query($connection, $query);
$userRow= mysqli_fetch_assoc($result);
?>



<!--include links-->
<?php include("includes/layouts/header.php"); ?>
<!--include header content-->
<?php include("includes/nav_bar.php"); ?>

<!-- body starts -->
<div class="container">
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
  <h4> This year data</h4>

              <div id="myfirstchart" class="row">
              


              </div>	
              <hr>
           <h4> This year data</h4>

              <div id="line-example" class="row">
              


              </div> 
               <p>&nbsp;</p> 
                <p>&nbsp;</p> 

                <!--modal for user profile-->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                <!--moda ends-->
              
              <!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">My Profile</h3>
    </div>
    <div class="modal-body">
      
            <!-- content goes here -->
             <div class="container-fluid">
              <div class="row">
            <div class="col-md-4">
              <!--profile picture-->
              <div class="img">
              <img src="images/profile_picture.png" class="img-responsive "><br>
               <a href="#">edit image</a>
               <hr>
            </div>
            </div>
            <div class="col-md-4 col-md-offset-4"><a href="#">> more</a></div>
          </div>

             <div class="row">
            <div class="col-sm-9">
              <p> First Name: </p>
              <input class="form-control" id="disabledInput" type="text" placeholder="Mohammed" disabled>
              <p> last Name: </p>
                <input class="form-control" id="disabledInput" type="text" placeholder="habiby" disabled>
                <p> Email: </p>
                  <input class="form-control" id="disabledInput" type="text" placeholder="mhabiby@medcorp.com" disabled>
              </div>
            </div>

             </div>
             

    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
        </div>
        <div class="btn-group btn-delete hidden" role="group">
          <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
        </div>
      </div>
    </div>
  </div>
  </div>
      		</div> <!--col-md-9--ends-->
          </div><!--page ends-->
  	</div>
</div>

<?php include("includes/layouts/footer.php"); ?>
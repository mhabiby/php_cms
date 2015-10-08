
<?php require_once("includes/db_connection.php"); ?>
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
  <h4> Data files</h4>

       <div class="container" style="margin-top:30px;">    
    <div class="row dream">
        <div class="col-md-4 dream">
       <ul id="tree1">
                <li><a href="#">2015 Sales Reports </a>

                    <ul>
                        <li>Company Maintenance</li>
                        <li>Employees
                            <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Employee Maint.</li>
                            </ul>
                        </li>
                        <li>Human Resources</li>
                    </ul>
                </li>
                <li>2014 Sales reports
                    <ul>
                        <li>Company Maintenance</li>
                        <li>Employees
                            <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Employee Maint.</li>
                            </ul>
                        </li>
                        <li>Human Resources</li>
                    </ul>
                </li>
            </ul>
      
        </div>

        <div class="col-md-4">
           <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
   
    <li><a href="#">Download file</a></li>
    <li><a href="#">Upload file</a></li>
    
  </ul>
</div> 
        </div>
    </div>
  </div><!--container-->
              


              </div> 
               <p>&nbsp;</p> 
                <p>&nbsp;</p> 
              	
      		</div> <!--col-md-9--ends-->
          </div><!--page ends-->
  	</div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>  

 <style>

 .dream{
  border:2xp solid blue;
 }
 </style>
 <!--script for the tree view-->
 <script>
 $.fn.extend({
    treed: function (o) {
      
      var openedClass = 'fa fa-minus-circle';
      var closedClass = 'fa fa-plus-circle';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});
 </script>
<?php include("includes/layouts/footer.php"); ?>
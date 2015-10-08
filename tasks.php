
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
  <h4> To do list</h4>

           
    <div class="row">
        <div class="col-md-4">
            <div class="todolist not-done">
             <h4>Todos</h4>
                <input type="text" class="form-control add-todo" placeholder="Add todo">
                <hr>
                    <button id="checkAll" class="btn btn-success">Mark all as done</button>
                    
                    <hr>
                    <ul id="sortable" class="list-unstyled">
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" />Creat the Monthy Invoice</label>
                        </div>
                    </li>
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" />Update the database</label>
                        </div>
                    </li>
                    <li class="ui-state-default">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" />Upload new usres</label>
                        </div>
                    </li>
                </ul>
                <div class="todo-footer">
                    <strong><span class="count-todos"></span></strong> Items Left
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="todolist">
             <h4>Already Done</h4>
                <ul id="done-items" class="list-unstyled">
                    <li>Backup the server <button class="remove-item btn btn-default btn-xs pull-right"><span class="glyphicon fa fa-times"></span></button></li>
                    <li>update the UI <button class="remove-item btn btn-default btn-xs pull-right"><span class="glyphicon fa fa-times"></span></button></li>
                    
                    
                </ul>
            </div>
        </div>
    </div>

              


              </div> 
               <p>&nbsp;</p> 
                <p>&nbsp;</p> 
              	
      		</div> <!--col-md-9--ends-->
          </div><!--page ends-->
  	</div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>  

  <script>
  $("#sortable").sortable();
$("#sortable").disableSelection();

countTodos();

// all done btn
$("#checkAll").click(function(){
    AllDone();
});

//create todo
$('.add-todo').on('keypress',function (e) {
      e.preventDefault
      if (e.which == 13) {
           if($(this).val() != ''){
           var todo = $(this).val();
            createTodo(todo); 
            countTodos();
           }else{
               // some validation
           }
      }
});
// mark task as done
$('.todolist').on('change','#sortable li input[type="checkbox"]',function(){
    if($(this).prop('checked')){
        var doneItem = $(this).parent().parent().find('label').text();
        $(this).parent().parent().parent().addClass('remove');
        done(doneItem);
        countTodos();
    }
});

//delete done task from "already done"
$('.todolist').on('click','.remove-item',function(){
    removeItem(this);
});

// count tasks
function countTodos(){
    var count = $("#sortable li").length;
    $('.count-todos').html(count);
}

//create task
function createTodo(text){
    var markup = '<li class="ui-state-default"><div class="checkbox"><label><input type="checkbox" value="" />'+ text +'</label></div></li>';
    $('#sortable').append(markup);
    $('.add-todo').val('');
}

//mark task as done
function done(doneItem){
    var done = doneItem;
    var markup = '<li>'+ done +'<button class="btn btn-default btn-xs pull-right  remove-item"><span class="glyphicon fa fa-times"></span></button></li>';
    $('#done-items').append(markup);
    $('.remove').remove();
}

//mark all tasks as done
function AllDone(){
    var myArray = [];

    $('#sortable li').each( function() {
         myArray.push($(this).text());   
    });
    
    // add to done
    for (i = 0; i < myArray.length; i++) {
        $('#done-items').append('<li>' + myArray[i] + '<button class="btn btn-default btn-xs pull-right  remove-item"><span class="glyphicon fa fa-times"></span></button></li>');
    }
    
    // myArray
    $('#sortable li').remove();
    countTodos();
}

//remove done task from list
function removeItem(element){
    $(element).parent().remove();
}
  </script>
  
<?php include("includes/layouts/footer.php"); ?>
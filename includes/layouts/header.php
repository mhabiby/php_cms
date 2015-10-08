

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin Page</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome-->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--jquery css-->
  
 
   <!--morris js -->
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="morrisjs/morris.min.js"></script>
     
     <!--metis menu-->
     <link rel="stylesheet" href="metisMenu/dist/metisMenu.min.css">
     <script src="metisMenu/dist//metisMenu.min.js"></script>
    <!--datatables plug ins-->
    <!--
   <link rel="stylesheet" type="text/css" href="datatables/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="datatables/DataTables/examples/resources/syntax/shCore.css">
  <link rel="stylesheet" type="text/css" href="datatables/DataTables/examples/resources/demo.css">


  <script type="text/javascript" language="javascript" src="datatables/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="datatables/DataTables/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="datatables/DataTables/examples/resources/syntax/shCore.js"></script>
  <script type="text/javascript" language="javascript" src="datatables/DataTables/examples/resources/demo.js"></script>
  -->
  
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>  
  
  
 
 
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <!--jquery pufin -->

<!--jquery pufin ./ -->
		<link href="css/styles.css" rel="stylesheet">

    

    <script>


$(document).ready(function() {
  var lastIdx = null;
  var table = $('#example').DataTable();
  
  $('#example tbody')
    .on( 'mouseover', 'td', function () {
      var colIdx = table.cell(this).index().column;

      if ( colIdx !== lastIdx ) {
        $( table.cells().nodes() ).removeClass( 'highlight' );
        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
      }
    } )
    .on( 'mouseleave', function () {
      $( table.cells().nodes() ).removeClass( 'highlight' );
    } );
} );


  </script>
	</head>
	<body>

</div><!--header ends-->

<footer id="footer">
<div class="footer footer navbar-fixed-bottom">
<div class="row">
  <div class="col-md-9 col-md-push-3"></div>
  <div class="col-md-3 col-md-pull-9"><h4>Med Corp 2015 <?php echo date("Y"); ?></h4></div>
</div>
</div>
</footer>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="mertisMenu/metisMenu.min.js"></script>
    <!--jquery-->
   

	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
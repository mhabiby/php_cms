
<footer id="footer">
<div class="footer footer navbar-fixed-bottom">
<div class="row">
  <div class="col-md-12> 
  <div class="well" style="text-align:center;">
 <h4>Mohammed Habiby  <?php echo date("Y"); ?></h4>
 </div>
</div>
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
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <!--metisMenu-->
  <!--morris chart-->
  <script>
  new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2011', value: 20 },
    { year: '2012', value: 10 },
    { year: '2013', value: 5 },
    { year: '2014', value: 5 },
    { year: '2015', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
  </script>
  <script>
  Morris.Line({
  element: 'line-example',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
  </script>
  

  
	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin Page</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome-->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="mertisMenu/metisMenu.min.css" rel="stylesheet">
    <!--jquery css-->
    <link href="jquery/jquery-ui.css" rel="stylesheet">
   
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--header-->
<div id="header">
<header class="navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand"><i class="fa fa-home fa-2x"></i>
Med Corp <?php if ($layout_context == "admin") { echo "Admin"; } ?></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#"></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-inbox fa-2x"></i> Inbox
</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-calendar-o fa-2x"></i> Tasks

</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-cog fa-2x"></i> Setting
</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
</div><!--header ends-->
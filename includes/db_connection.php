<?php
include_once 'user-login.php';
include_once 'functions.php';
session_start();
// Create connection
$connection=mysqli_connect("127.0.0.1:3306","my_db");
 
// Check connection
if (mysqli_connect_errno($connection))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }

$user = new USER($connection);

<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();
}
 ?>
 <html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
	</head>

	<body>
<div id="wrap">
  <div id="top">
    <div class="rights"> </div>
    <div id="search"> </div>
    <div class="lefts">
      <h1>Welcome</h1>
     
    </div>
  </div>
  <div id="topmenu">
    <div class="rights"></div>
    <div class="lefts">
      <ul>
       	<li><a href="student_list.php">Add Student</a></li>
        <li><a href="student_display.php">Student List</a></li>
		<li><a href="table.php">Tables</a></li>
		<li><a href="school.php">School List</a></li>
        <li><a href="logoutadmin.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main">	


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<h1>Tables</h1>
<table><tr><td><a href="soict.php">School of Information and Communication Technology</a> </td></tr>
<tr><td><a href="soe.php">School of Engineering</a></td></tr>
<tr><td><a href="sobt.php">School of biotechnology</a></td></tr>
<tr><td><a href="som.php">School of Management</a></td></tr>
<tr><td><a href="soljg.php">School of Law, Justice and Governance</a></td></tr>
<tr><td><a href="sohss.php">School of Humanities and Social Sciences</a></td></tr>
<tr><td><a href="sovsap.php">School of Vocational Studies and Applied Sciences</a></td></tr>
<tr><td><a href="sobsc.php">School of Buddhist Studies and Civilization</a></td></tr>
  </div>
</body></html>
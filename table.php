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
  <table><tr><td><a href="student_info.php">Student Information</a> </td></tr>
  <tr><td><a href="student_documents.php">Students Qualification Doucuments</a></td></tr>
<tr><td><a href="student_hostel.php">Students Hostel Information</a></td></tr>
<tr><td><a href="student_fees.php">Students Fees Information</a></td></tr>
  </div>
</body></html>
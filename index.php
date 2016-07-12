<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();
}
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
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
		
		</a></div>
		<h1> </br>Welcome &nbsp;
		<?php
$username=$_SESSION['username'];
if(isset($username))
{ echo $username;}?>


</h1></header>

<!--<a href="student_list.php">Manage Students</a></br>
<a href="faculty_list.php">Manage Faculty</a></br>
<a href="subject_list.php">Manage Subjects</a>-->
 </div><!-- /sidy__content -->
    </div><!-- /sidy -->
  
</body>
</html>
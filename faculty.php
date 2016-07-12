<?php
//error_reporting(E_ALL ^ E_NOTICE);
 session_start();
// $userid=$_SESSION['userid'];
$employee_id=$_SESSION['employee_id'];
if (!isset($_SESSION["employee_id"])) {
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
        <li><a href="faculty.php">Home</a></li>
        <li><a href="logoutadmin.php">Logout</a></li>
        <!--<li><a href="#">Student Details</a></li>
        <li><a href="#">Fees</a></li>   -->     
      </ul>
    </div>
  </div> 
<div id="main">	


<?php
require_once 'connect.php';
if(isset($employee_id))
{ 
//echo "</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>";
echo "<font size='5'>Welcome <b>$employee_id</b></font>";
//echo " <a href='./update1.php' style='text-decoration:none;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='5' style='color:black;'>Update Events</font></a></br></br>";
$q="SELECT * FROM faculty_info WHERE employee_id='$employee_id'" or die("Error: ". mysql_error());
$r=mysql_query($q);
echo "</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>";
while($row=mysql_fetch_array($r))
{
$class=$row['name']; 
$section=$row['employee_id'];
$batch_from=$row['designation'];
$batch_to=$row['email_id'];
echo "<tr>";
echo "<td width='30%'>Name</td>";
echo "<td>".$row['name']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Employee ID</td>";
echo "<td>".$row['employee_id']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Designation</td>";
echo "<td>".$row['designation']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Email ID</td>";
echo "<td>".$row['email_id']."</td>";
echo "</tr>";	
}
echo "</tbody></table>";
$s=mysql_query("SELECT * FROM subject WHERE employee_id='$employee_id'"); //or die("Error: ".mysql_error());
echo "</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>";
echo "<tr>";
echo "<td>Subjects</td>";
echo "</tr>";
while($row1=mysql_fetch_array($s))
{
$id=$row1['id'];
echo "<tr>";
echo "<td><a href='faculty_subject_info.php?pid=$id'>".$row1['subject_code']."&nbsp;-&nbsp;".$row1['name']."</a></td>";
echo "<td><a href='faculty_update_attendence.php?pid=$id'> Update Attendence </a></td>";
echo "<td><a href='faculty_update_midsem.php?pid=$id'> Update Mid Semester Exams Marks </a></td>";
echo "<td><a href='faculty_update_endsem.php?pid=$id'> Update End Semester Exams Marks </a></td>";
echo "<td><a href='faculty_update_grade.php?pid=$id'> Update Grades </a></td>";
echo "</tr>";
}
echo "</tbody></table>"; 
}
else{
echo "<font size='5'>Please login to access this page. <a href='./login1.php'><font style='text-decoration:none; color:white;'>Login Here</a></font>";
}
?>   
</div>
</div>
</body>
</html>	
	
	
	
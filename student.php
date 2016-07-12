
<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$registration_no=$_SESSION['registration_no'];
if (!isset($_SESSION["registration_no"])) {
    header("location: officelogin.php"); 
    exit();
	}
?>

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
        <li><a href="#">Home</a></li>
        <li><?php echo $class.'-'.$section; ?><?php echo $name; ?><a href="logout1.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main">	

<?php
require_once 'connect.php';
//echo "</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>";
echo "<font size='5'>Welcome <b>$registration_no</b></font>";
//echo " <a href='./update1.php' style='text-decoration:none;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='5' style='color:black;'>Update Events</font></a></br></br>";
$q="SELECT * FROM student_info WHERE registration_no='$registration_no'" or die("Error: ". mysql_error());
$r=mysql_query($q);
echo "</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>";
while($row=mysql_fetch_array($r))
{
$class=$row['class']; 
$section=$row['section'];
$batch_from=$row['batch_from'];
$batch_to=$row['batch_to'];
echo "<tr>";
echo "<td width='30%'>Name</td>";
echo "<td>".$row['sfname']."&nbsp;".$row['smname']."&nbsp;".$row['slname']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Registration Number</td>";
echo "<td>".$row['registration_no']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Batch</td>";
echo "<td>".$row['batch_from']."-".$row['batch_to']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Programme</td>";
echo "<td>".$row['programme']."</td>";
echo "</tr>";	
echo "<tr>";
echo "<td>Class</td>";
echo "<td>".$row['class']."-".$row['section']."</td>";	
echo "</tr>";	
echo "<tr>";
echo "<td>Fees Status</td>";
echo "<td>".$row['feecat']."</td>";	
echo "</tr>";
}
echo "</tbody></table>";
$s=mysql_query("SELECT * FROM subject WHERE class='$class' AND section='$section'  AND batch_from='$batch_from' AND batch_to='$batch_to'"); //or die("Error: ".mysql_error());
echo "</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>";
echo "<tr>";
echo "<td>Subjects</td>";
echo "</tr>";
while($row1=mysql_fetch_array($s))
{    $sub_id=$row1['id'];
	$subject_code=$row1['subject_code'];
	$name=$row1['name'];
//echo "<td>&nbsp</td>";
echo "<tr>";
echo "<td><a href='student_subject_info.php?pid=$sub_id'>".$subject_code."&nbsp;-&nbsp;".$name."</a></td>";
echo "</tr>";
}
echo "</tbody></table>"; 
// else{
// echo "<font size='5'>Please login to access this page. <a href='./login1.php'><font style='text-decoration:none; color:white;'>Login Here</a></font>";
// }
?>   
</div>
</body>
</html>
	
	
	
	
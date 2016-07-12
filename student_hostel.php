<?php 
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
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body>

<div id="wrap">
  <div id="top">
    <div class="rights"> </div>
    <div id="search"> </div>
    <div class="lefts">
      <h1>Student Details</h1>
     
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


<div style="margin-left:-60px;">

<form method="POST" action="student_info.php" target="_balnk">
<button onclick="myFunction()">Print this page</button>
<?php if(empty($same_page)): ?>
   <input type="hidden" name="same-page" value="1"/>
   <input id="export-btn" type="submit" value="Export as Excel"/>
 </form>
<?php endif; ?>

<?php
	include "connect.php";
$r=mysql_query("SELECT * FROM student_hostel");?>
<table cellpadding='1' cellspacing='5' border='1'><tbody>
<tr>
<td><b>S.No.</b></td>
<td><b>Registration No.</b></td>
<td><b>Admission No.</td>
<td><b>Roll No.</td>
<td><b>Name</td>
<td><b>Status</td>
<td><b>Particular</td>
<td><b>As On</td>
<td><b>Result</td>
<td><b>Remarks</td>
<td><b>Hostel Name</td>
<td><b>Floor No.</td>
<td><b>Room No.</td>
<td><b>Bedding</td>
<td><b>Fee Structure</td>
<td><b>Registration Date</td>
<td><b>Expiry Date</td>
</tr>
<?php
$serial_no=1; 
$productCount = mysql_num_rows($r); // count the output amount
if ($productCount > 0) {
while($row2=mysql_fetch_array($r)){
$registration_no=$row2['registration_no'];
$admno=$row2['admno'];
$rollno=$row2['rollno'];	
$sname=$row2['sname'];
$status=$row2['status'];
$particular=$row2['particular'];
$as_on=$row2['as_on'];
$result=$row2['result'];
$remarks=$row2['remarks'];
$hname=$row2['hname'];
$fno=$row2['fno'];
$room=$row2['room'];
$bed=$row2['bed'];
$fee=$row2['fee'];
$regdate=$row2['regdate'];
$expdate=$row2['expdate'];
$same_page = $_POST['same-page'];
if(!empty($same_page) && $same_page == 1) {
  $filename = 'Sample Table';
  header('Content-type: application/vnd.xls');
  header('Content-Disposition: attachment; filename="'.$filename.'.xls"');
}?>
<tr>
<td><?php echo $serial_no; ?></td>
<td><?php echo $registration_no; ?></td>
<td><?php echo $admno; ?></td>
<td><?php echo $rollno; ?></td>
<td><?php echo $sname ; ?></td>
<td><?php echo $status ; ?></td>
<td><?php echo $particular ; ?></td>
<td><?php echo $as_on ; ?></td>
<td><?php echo $result ; ?></td>
<td><?php echo $remarks ; ?></td>
<td><?php echo $hname ; ?></td>
<td><?php echo $fno ; ?></td>
<td><?php echo $room ; ?></td>
<td><?php echo $bed ; ?></td>
<td><?php echo $fee ; ?></td>
<td><?php echo $regdate ; ?></td>
<td><?php echo $expdate ; ?></td>
</tr><?php  $serial_no=$serial_no+1;
}
}
?></tbody></table><?php exit();
 ?>
</div>
</body>
</html>


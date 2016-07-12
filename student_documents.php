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


<div style="margin-left:-130px;">

<form method="POST" action="student_info.php" target="_balnk">
<button onclick="myFunction()">Print this page</button>
<?php if(empty($same_page)): ?>
   <input type="hidden" name="same-page" value="1"/>
   <input id="export-btn" type="submit" value="Export as Excel"/>
 </form>
<?php endif; ?>

<?php
	include "connect.php";
$r=mysql_query("SELECT * FROM qualification_document");?>
<table cellpadding='1' cellspacing='5' border='1'><tbody>
<tr>
<td><b>S.No.</b></td>
<td><b>Registration No.</b></td>
<td><b>Admission No.</td>
<td><b>Roll No.</td>
<td><b>Name</td>
<td><b>Status</td>
<td><b>Father's Occupation</td>
<td><b>Designation</td>
<td><b>Job Type</td>
<td><b>Organisation Type</td>
<td><b>Annual Income</td>
<td><b>Mother's Occupation</td>
<td><b>Designation</td>
<td><b>Job Type</td>
<td><b>Organisation Type</td>
<td><b>Annual Income</td>
<td><b>Father's Mobile No.</td>
<td><b>Email ID</td>
<td><b>Mother's Mobile No.</td>
<td><b>Email ID</td>
<td><b>Guardian's Mobile No.</td>
<td><b>Email ID</td>
<td><b>Emergency Mobile No.</td>
<td><b>Email ID</td>
<td><b>Student's Mobile No.</td>
<td><b>Email ID</td>
<td><b>Local guardian Name</td>
<td><b>Address</td>
<td><b>Designation</td>
<td><b>Relation</td>
<td><b>Phone No.</td>
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
$focc=$row2['focc'];
$fdesig=$row2['fdesig'];
$fjob=$row2['fjob'];
$forg=$row2['forg'];
$fincome=$row2['fincome'];
$mocc=$row2['mocc'];
$mdesig=$row2['mdesig'];
$mjob=$row2['mjob'];
$morg=$row2['morg'];
$mincome=$row2['mincome'];
$fmob=$row2['fmob'];
$femail=$row2['femail'];
$mmob=$row2['mmob'];
$memail=$row2['memail'];
$gmob=$row2['gmob'];
$gemail=$row2['gemail'];
$emob=$row2['emob'];
$eemail=$row2['eemail'];
$smob=$row2['smob'];
$semail=$row2['semail'];
$lgname=$row2['lgname'];
$lgaddress=$row2['lgaddress'];
$relation=$row2['relation'];
$desig=$row2['desig'];
$lgph=$row2['lgph'];
$sname=$row2['sname'];
$status=$row2['status'];
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
<td><?php echo $focc ; ?></td>
<td><?php echo $fdesig ; ?></td>
<td><?php echo $fjob ; ?></td>
<td><?php echo $forg ; ?></td>
<td><?php echo $fincome ; ?></td>
<td><?php echo $mocc ; ?></td>
<td><?php echo $mdesig ; ?></td>
<td><?php echo $mjob ; ?></td>
<td><?php echo $morg ; ?></td>
<td><?php echo $mincome ; ?></td>
<td><?php echo $fmob ; ?></td>
<td><?php echo $femail ; ?></td>
<td><?php echo $mmob ; ?></td>
<td><?php echo $memail ; ?></td>
<td><?php echo $gmob ; ?></td>
<td><?php echo $gemail ; ?></td>
<td><?php echo $emob ; ?></td>
<td><?php echo $eemail ; ?></td>
<td><?php echo $smob ; ?></td>
<td><?php echo $semail ; ?></td>
<td><?php echo $lgname ; ?></td>
<td><?php echo $lgaddress ; ?></td>
<td><?php echo $desig ; ?></td>
<td><?php echo $relation ; ?></td>
<td><?php echo $lgph ; ?></td>
</tr><?php  $serial_no=$serial_no+1;
}
}
?></tbody></table><?php exit();
 ?>
</div>
</body>
</html>


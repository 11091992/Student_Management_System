<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$registration_no=$_SESSION['registration_no'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
  </head>
  <body>
  	<div id="main"> 
              <?php
if($registration_no && $userid)
{
session_destroy();
echo "<b>You have been logged out.</b></br></br>";
}
else
echo "<font size='5'>You are not logged in.</font></br></br>";
?>
</div>
</body>
</html>
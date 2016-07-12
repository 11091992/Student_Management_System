<html>
 <head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
<title>Search</title>
</head>
<body>
<form action="search.php" enctype="multiple/form-data" name="myForm" id="myform" method="post">
<table>
<tr>
<td>
Search By School</td><td> <select name="school" id="school">
<option value="soict">SOICT </option>
<option value="som">SOM</option>
<option value="sobt">SOBT </option>
<option value="soe">SOE</option>
<option value="sohss">SOHSS</option>
<option value="sovsas">SOVSAS</option>
<option value="soljg">SOLJG </option>
<option value="sobsc">SOBSC</option>
</select></td></tr>
<tr><td>
Search By Allotted Category</td><td><select name="subcat1" id="subcat1">
<option value="ph">Physically Handicapped</option>
<option value="dd">DefencePersonel </option>
<option value="ff">FreedomFighter </option>
<option value="km">KashmiriMigrant</option>
<option value="f">WomenCandidate</option>
<option value="gb">WardOfGBUEmployee</option>
 </td></tr>
 <tr>
<td><input type="submit" value="Search" name="search"></td>
</tr>
 </table></form></body></html>
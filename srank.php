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
Search By Rank</td><td><input type="text" name="rank"></td></tr>
<tr>
<td><input type="submit" value="Search" name="search"></td>
</tr>
</table></form></body></html>
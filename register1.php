<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="services";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
$usn=$_POST['l_id'];
$name=$_POST['res'];
$sem=$_POST['pay'];
$age=$_POST['phno'];
$addr=$_POST['distict'];

$q="SELECT l_id FROM services WHERE l_id='$usn'";
$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>L ID already exists</h2></center>";
}
else
{
$query="INSERT INTO services VALUES('$usn','$name','$sem','$age','$addr','$dob')";
mysqli_query($conn,$query) or die(mysqli_error($conn));
echo"<center><h2 style='color:green'>Details Saved!</h2></center>";
}
}
Mysqli_close($conn);
?>
<html>
<head>
<body style="background-color:#E5E5E5">
<title>registration form</title>
</head>
<h1 ALIGN="CENTER">Registration form</h2>
<form action=""method="post">
<table border="0" align="center">
<tbody>
<tr>
<td><label for="id">L ID:</label></td>
<td><input id="id" maxlength="50" name="usn" type="text"/></td>
</tr>
<tr>
<td><label for="name">MACHINERY:</label></td>
<td><input id="name" maxlength="50" name="name" type="text" /></td>
</tr>
<tr>
<td><label for="sem">PAY:</label></td>
<td><input id="sem" maxlength="50" name="sem" type="number_format" /></td>
</tr>
<tr>
<td><label for="age">PHONE NO:</label></td>
<td><input id="age" maxlength="50" name="age" type="number_format" /></td>
</tr>
<tr>
<td><label for="addr">DISTRICT:</label></td>
<td><input id="addr" maxlength="50" name="addr" type="text" /></td>
</tr>

<tr>
<td align="right"><input name="Submit" type="Submit" value="Add"/>&nbsp;
<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>
<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="stock";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM stock ";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['sid'];
	$name=$_POST['f_id'];
    $sem=$_POST['item_name'];
    $s=$_POST['shelf_life'];
	$qy=$_POST['quantity'];
    $price=$_POST['price'];
	$query="INSERT INTO stock VALUES('$usn','$name','$sem','$s','$qy','$price')";
	mysqli_query($conn,$query)or die(mysqli_error($conn));
	echo"<center><h2 style='color:green'>Details saved!</h2></center>";
}
Mysqli_close($conn);
?>
<html>
<head>
</head>
<body style ="background-color:#E5E5E5;background-image: url(\image\thMO8ZRC5A.jpg);">
<form action="" method="POST">
<table style="border:0;align:center">
<tbody>
<tr>
<td><label for="id">STOCK ID:</label></td>
<td><input id="item_id" maxlength="50" name="sid" type="text"></td>
</tr>
<tr>
<td><label for="name">FARMER ID:</label></td>
<td><input id="type"maxlength="50" name="f_id" type="texT"/></td>
</tr>
<tr>
<td><label for="sem">ITEM NAME:</label></td>
<td><input id="name" maxlength="50" name="item_name" type="number_format"/></td>
</tr>
<tr>
<td><label for="sem">SHELF LIFE</label></td>
<td><input id="name" maxlength="50" name="shelf_life" type="number_format"/></td>
</tr>
<tr>
<td><label for="sem">QUALITY:</label></td>
<td><input id="name" maxlength="50" name="quantity" type="number_format"/></td>
</tr>
<tr>
<td><label for="sem">PRICE:</label></td>
<td><input id="name" maxlength="50" name="price" type="number_format"/></td>
</tr>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>







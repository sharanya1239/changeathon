<?php
session_start();
$host="localhost";
$username="";
$password="";
$dbname= "test";
$tblname= "login";
$con=mysqli_connect($host,$username,$password,$dbname)or die("cannot connect");
$select_db=mysqli_select_db ($con,$dbname)or die ("cannot select db");
if(isset($_POST['myusername']) && isset($_POST['mypassword']))
{
	$usrnm=$_POST['myusername'];
	$pswd=$_POST['mypassword'];
	$ab="SELECT * FROM login WHERE username='$usrnm' AND password='$pswd'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt==true)
	{
		header('Location:menupage.php');
	}
	else
	{
		echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
	}
}
ob_end_flush();
?>

<html>

<head>
    <style> 


        body{
                background-image: url("62.jpg");
                height:100%;
                background-size:cover ;
                background-color: #F3EBF6;
        font-family: 'Ubuntu', sans-serif;
            }
      input[type=submit] {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    div {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    p{
        padding-top: 40rpx;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    form{
        padding-top: 40px;
    }
    input[type=password]{
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    
    border-radius: 20px;    outline: none;
    box-sizing: border-box;
    border: 2px solid grey;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    input[type=text]{
    width: 76%;
    color:black;
    font-weight: 700;ser
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    
    border-radius: 20px;
    
    box-sizing: border-box;
    border: 2px solid grey;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    
    
     </style> 
 

  
<title>Login Page</title>
</head>

<body>
  <div >
    <p  align="center">Log in</p>
    <form name="form1" method="post" action="#">
      <input type="text" name="myusername" align="center" placeholder="Username">
      <input  type="password" name="mypassword" align="center" placeholder="Password">
      <input type="submit"  align="center" >
     
     
     <a href="register2.php">register here</a> </div >
</body>

</html>
<?php
session_start();
$email =$_POST['email'];
$password  = $_POST['password'];

mysql_connect("localhost","root","");
mysql_select_db("excellence");

$result = mysql_query("select * from test where email='$email' && password='$password' ")or die(mysql_error());
$val= mysql_query("select * from tests where is_approved='true'")or die(mysql_error());




if(mysql_fetch_array($result)>0){

if(mysql_fetch_array($val)>0){

$_SESSION['email']= $email;
  header("location:home.php");

}


else{

  echo "no result";
}

}
else{

	header("location:login.php")
}


?>

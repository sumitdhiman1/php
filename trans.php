<?php
$name=$_POST['name']
$password=$_POST['password']
$Email=$_POST['Email']
$mobile=$_POST['mobile']
mysql_connect("localhost","root","");
mysql_select_db("MyProject");
mysql_query("insert into student values('','$name','$password','$Email','$mobile')");



?>
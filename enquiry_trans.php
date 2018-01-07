<?php
 $name = $_POST['username'];
 $mobile = $_POST['mobile'];
 $sas = $_POST['sas'];
 $college = $_POST['college'];
 $tskills = $_POST['skills'];
 $date = $_POST['date'];

 mysql_connect("localhost","root","");
 mysql_select_db("excellence");
mysql_query("INSERT into enquiry values('','$name',' $mobile','$sas','$college','$tskills','$date')") or die(mysql_error());













?>

<?php
 $name = $_POST['username'];
 $fname = $_POST['father'];
 $college = $_POST['college'];
 $cell1 = $_POST['mobile'];
 $cell2 = $_POST['mobile2'];
 $payment = $_POST['payment'];
 $mop = $_POST['mop'];
 $course = $_POST['course'];
 $bdue = $_POST['balance'];
 $date = $_POST['date'];
 mysql_connect("localhost","root","");
 mysql_select_db("excellence");
mysql_query("INSERT into registration values('','$name',' $fname','$college','$cell1','$cell2','$payment','$mop','$course','$bdue','$date')") or die(mysql_error());

header("location:home.php?msg='Your Account is created'");












?>

<?php
session_start();
$id = $_SESSION['id'];
$bal = $_SESSION['balance'];
$paidfee = $_POST['t1'];
$leftbal = $bal-$paidfee;
mysql_connect("localhost","root","");
mysql_select_db("excellence");



mysql_query("UPDATE  registration SET  bdue ='$leftbal' where id='$id'" ) or die(mysql_error());
header("location:updated.php");













 ?>

<?php
echo $id=$_POST['t5'];
echo $Name= $_POST['t1'];
echo $Password=$_POST['t2'];
echo $Email=$_POST['t3'];
echo $Mobile=$_POST['t4'];
mysql_connect("localhost","root","");
mysql_select_db("exellence");
mysql_query("UPDATE  student SET  Name='$Name',`Password` =  '$Password',Email='$Email',Mobile='$Mobile' WHERE  `id` =$id") or die(mysql_error());

header("location:form.php?msg='Record has been updated'");

?>

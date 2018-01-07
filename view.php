<?php
 mysql_connect("localhost","root","");
	mysql_select_db("myproject5");
	
	$s="select * from admin";
	$resource=(mysql_query($s));
	$row=mysql_fetch_row($resource);
	echo "id:" .$row[0]."<br>";
	echo "fname:" .$row[1]."<br>";
	echo "lname:" .$row[2]."<br>";

	?>
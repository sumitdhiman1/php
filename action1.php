<?php
if(isset($_REQUEST['action']) && $_REQUEST['action']=='edit')
{
	$id= $_REQUEST['id'];
	
?>
<form name="f" method="post" action="edit.php">
<?php	
	mysql_connect("localhost","root","");
mysql_select_db("myproject");
$result=mysql_query("select * from student where id=$id");

while($row=mysql_fetch_array($result)){
	
	
	{
echo"Name<input type='hidden' name='t5' value=".$row['id']."> <br>";
echo"Name<input type='text' name='t1' value=".$row['Name']."> <br>";
echo"Email<input type='text' name='t2' value=".$row['Email']."> <br>";
echo"Password<input type='text' name='t3' value=".$row['Password']."> <br>";
echo"Mobile<input type='text' name='t4' value=".$row['Mobile']."> <br>";
		
		
		
		
		
	}
	?>
	<input type="submit" value="update"/>
	</form>
	<?php
	
}
}
else if(isset($_REQUEST['action']) && $_REQUEST['action']=='view')
{
	echo"<table border='1px' width='500px' height='300px'>
	<tr>
	  <th>ID></th>
	  <th>Name</th>
	  <th>Email</th>
	  <th>Password</th>
	  <th>Mobile</th>
	  </tr>";
	mysql_connect("localhost","root","");
mysql_select_db("myproject");
	
$resource=mysql_query("select * from student");
while($row=mysql_fetch_array($resource)){


echo"<tr>
     <td>".$row['id']."</td>
     <td>".$row['Name']."</td>
     <td>".$row['Email']."</td>
     <td>".$row['Password']."</td>
     <td>".$row['Mobile']."</td>
	 </tr>";
}
echo"</table>";
}
else if(isset($_REQUEST['action']) && $_REQUEST['action']=='delete')
{
mysql_connect("localhost","root","");
mysql_select_db("myproject");
$id=$_REQUEST['id'];
mysql_query(" delete from student where id='$id'");
$result=mysql_query("select * from student where id='$id'");
if( mysql_num_rows($result)>0)
{
mysql_query("delete from student where id='$id'");
}
else
{
echo("result doesnot exist");
}
header("location:form.php");

}
?>


	
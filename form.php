<?php
if(isset($_REQUEST['msg']) && $_REQUEST['msg']!=''){
	
	
	echo $_REQUEST['msg'];
}

{
	
	
	
}
	
	?>
<table border="1px" height="400px" width="400px">
      <tr>
         <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Mobile</td>
        <td colspan="3">Action</td>
      </tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("myproject");
$result=mysql_query("select * from student");

while($row=mysql_fetch_array($result)){
	
	
	
	


?>
      <tr>
         <td><?php echo $row['id'];   ?></td>
         <td><?php echo $row['Name'];   ?></td>
         <td><?php echo $row['Password'];   ?></td>
         <td><?php echo $row['Email'];   ?></td>
         <td><?php echo $row['Mobile'];   ?></td>
         <td><a href="action1.php?action=edit&id=<?php echo $row['id'];   ?>">EDIT</a></td>
         <td><a href="action1.php?action=view&id=<?php echo $row['id'];   ?>">VIEW</a></td>
         <td><a href="action1.php?action=delete&id=<?php echo $row['id'];   ?>">DELETE</a></td>
     </tr>
<?php } ?>
  </table>
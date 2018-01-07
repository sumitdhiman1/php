  <?php
include 'db.php';


$results =mysql_query("select * from user where  =2")or die(mysql_error());
		
while($row = mysql_fetch_array($results)){
$imgname = $row['dp'];

   echo  $profilepic =   "<img class='ph'  src=images/".$row['dp'] . " height='150px'   width='150px'>";
	echo $username = $row['name'];
  echo $mobile = $row['mobile'];
  echo $address = $row['address'];


}
		

   ?>


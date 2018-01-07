<?php
$errors   = array();
echo $filename = $_FILES['image']['name'];
echo $filesize = $_FILES['image']['size'];
$filetype = $_FILES['image']['type'];
$source   = $_FILES['image']['tmp_name'];
$ext      = array('jpeg','png','jpg');
$extension= array(strtolower(end (explode('.',$filename))));
if(in_array($ext,$extension)===false)
{
$error[]="file type not supporting";
}
if($filesize > 2019272)
{
$error[]="file size exceeded";
}
if(empty($errors)==true)
{
	if(move_uploaded_file($source,"images/".$filename)== true){
		echo "success";
	}
	else{
		
		echo "failure";
	    }
}
else
{
	foreach($error as $value)
	{
		echo $value."</br>";
	}
}

?>


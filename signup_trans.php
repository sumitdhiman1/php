<?php
echo $name = $_POST['username'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];
echo $Cpassword = $_POST['Cpassword'];
echo $id = $_POST['id'];
echo $gender = $_POST['gender'];
echo $doj = $_POST['doj'];
echo $proof = $_FILES['proof']['name'];
echo $profile = $_FILES['profile']['name'];
echo $select = $_POST['select'];
echo $select2 = $_POST['select2'];
echo $mobile = $_POST['mobile'];
echo $mobile2 = $_POST['mobile2'];
echo $address = $_POST['address'];
$is_approved ="false";

if($profile =="")
{

	$profile="default.jpg";
}
//for file uploading
$filesize = $_FILES['profile']['size'];
$filetype = $_FILES['profile']['type'];
$source   = $_FILES['profile']['tmp_name'];
$ext      = array('jpeg','png','jpg');

//for idproof uploading
$filesizeproof = $_FILES['proof']['size'];
$filetypeproof = $_FILES['proof']['type'];
$sourceproof   = $_FILES['proof']['tmp_name'];



mysql_connect("localhost","root","");
mysql_select_db("excellence");
mysql_query("INSERT into user values('','$name',' $email','$password','$Cpassword','$id','$gender','$doj','$proof','$profile','$select','$select2','$mobile','$mobile2','$address','$is_approved')") or die(mysql_error());
mysql_query("insert into test values('$email','$password')")or die(mysql_error());


$extension= array(strtolower(end (explode('.',$profile))));
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
	if(move_uploaded_file($source,"images/".$profile)== true){
		echo "success";
	}
	else{

		echo "failure";
	    }
}


$extension= array(strtolower(end (explode('.',$proof))));
if(in_array($ext,$extension)===false)
{
$error[]="file type not supporting";
}
if($filesizeproof > 2019272)
{
$error[]="file size exceeded";
}
if(empty($errors)==true)
{
	if(move_uploaded_file($sourceproof,"proof/".$proof)== true){
		echo "success";
	}
	else{

		echo "failure";
	    }
}



header("location:login.php?msg='Your Account will be aproved soon'");









?>

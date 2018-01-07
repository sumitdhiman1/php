<!DOCTYPE HTML>
<html>
 <head>
   <link href="assets/css/style1.css" rel="stylesheet" >

 </head>
 <body>
   <div class="wrapper">
    <form method="POST" action="login.php" onsubmit="fun()" name="vform">
      <div>
        <input type="text" name="username" class="text" placeholder="Username">
        <div id="name-error" class="val-error"></div>
      </div>
      <div>
        <input type="email" name="email" class="email" placeholder="Email">
        <div id="name-error" class="val-error"></div>
      </div>
      <div>
        <input type="password" name="password" class=password placeholder="password">

      </div>
      <div>
        <input type="password" name="password confirmation" class="password confirmation" placeholder="password confirmation">
        <div id="name-error" class="val-error"></div>
      </div>
      <div>
        <input type="submit" name="sumit" class="btn" placeholder="username">

      </div>
    </form>
   </div>
 </body>
</html>
<script>
var username= document.vform.username.value;
var email= document.vform.email.value;
var password= document.vform. password.value;
var password confirmation= document.vform. password confirmation.value;
var name_error=document.getElementById('name-error');
 var email_error=document.getElementById('email_error');
  var password_error=document.getElementById(' password_error');

  username.addEventListener("blur",nameVerify,true);
     emial.addEventListener("blur",emailVerify,true);
        password.addEventListener("blur",passwordVerify,true);
function fun() {
  if(username==""){
    username.style.border="1px solid red";
    name_error.text="username is required";
    username.focus();
    return false;
  }
  if(email==""){
    email.style.border="1px solid red";
    name_error.text="email is required";
    email.focus();
    return false;
  }
  if(password==""){
    password.style.border="1px solid red";
    name_error.text="password is required";
    password.focus();
    return false;
  }
}
function nameVerify(){
  if (username.value!="") {
    username.style.border="1px solid grey";
    username_error.innerHTML="";
    return true;
  }
}
function emaildVerify(){
  if (email.value!="") {
    email.style.border="1px solid grey";
    email_error.innerHTML="";
    return true;
  }
}
function passwordVerify(){
  if (password.value!="") {
    password.style.border="1px solid grey";
    password_error.innerHTML="";
    return true;
  }
}






</script>

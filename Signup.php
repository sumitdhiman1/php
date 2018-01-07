<!DOCTYPE html>

<html>

  <head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" >
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" >
    <link href="assets/css/font-awesome.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
   <script>
   function fun(){
   var a=document.s.name.value;
   var b=document.s.Email.value;
   var c=document.s.password.value;
   var d=document.s.mobile.value;
   var num=/^[0-9]+$/;
   var alfa=/^[a-z,A-Z]+$/;
   if (a=="" && b=="" && c=="" && d==""){
     alert("All the entries are blank");
     return false;
   }
    if(a==""){
      alert("name is blank");
              }
   if(b==""){
        alert("password is blank");
                }
   if(c==""){
         alert("Email is blank");
                 }
   if(d==""){
           alert("mobile is blank");
                   }
   if(a.match(num)){
             alert("Name in alphabets");
                             }
   if(c.match(alfa)){
     alert("password in numbers");
   }
 }
   </script>

  </head>
  <body>
    <div class="sign">
      <section id="up">




  <a href="#">  <button type="button" class="btn btn-info">  <i class="fa fa-facebook-square" aria-hidden="true"></i>Connect with Facebook</button></a>
    <a href="#"><button type="button" class="btn btn-primary">  <i class="fa fa-twitter" aria-hidden="true"></i>Connect with Twiter</button></a>
  <p>Or Sign Up With</p>
   <form name="s" action="upload.php"enctype="multipart/form-data" onsubmit="fun()"/>
   <br><input type="text" name="name" placeholder="Name"  /></br>
   <br><input type="text" name="Email" placeholder="Email"/></br>
   <br><input type="password" name="password" placeholder="password"/></br>
   <br><input type="password" name="confirm password" placeholder="Confirm password"/></br>
   <br><i class="glyphicon glyphicon-earphone"><input type="text" name="mobile" placeholder="Mobile"/></i></br>
   <br><input type="file" name="image" placeholder="upload file"/>_</br>

<p class="pp">
by creating an account,you agree to our  <a href="#">terms and conditions</a>
  </p>
  <input type="submit" value="submit" />



   </form>
     </section>
 </div>
  </body>

</html>

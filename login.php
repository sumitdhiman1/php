<!DOCTYPE html>
<html>
 <title>Login</title>
 <head>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
   <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" >
   <link href="assets/css/font-awesome.min.css" rel="stylesheet" >
   <link href="assets/css/font-awesome.css" rel="stylesheet" ><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
  <style>

h1{
  text-align: center;
  background: #1B2631;
  color: white;
  margin: 0 0 20px 0;
  padding: 10px 0 10px 0;
  font-size: 30px;
}
#in input{
  width: 350px;
}
#in h2{
  font-size: 18px;
  text-align: right;

}
#in h3{
  padding: 27px 0 0 0;
  font-size: 19px;
  text-align: right;
}
#in p{
  float: right;
  text-align: right;
}
#logo {
  background: red;
}
#logo p{
  font-size: 15px;
    float: right;
    margin: 45px 100px 0 0;
      font-family: 'droid serif',serif;
}
#logo img{
  width: 250px;
  height: 100px;
}
.logg{
  background: #1B2631;
  color: white;
  font-size: 22px;
}
.nod{
  float: right;
  font-size: 18px;
  margin:10px 0 0 0;
  font-family: 'droid serif',serif;
}
button{
  float: right;
  padding: 0 20px 0 20px;

}
p{
  float: right;
  margin: 20px 115px 400px 0;
}
.form-control{
  font-size: 16px;
}
.foot{
  text-align: center;
  padding : 30px 0 30px 0;
  color: white;
  margin: 0 0 0 0;
}
.ft{
  background: #1B2631;
}
.social{
float: right;
padding : 20px 20px 20px 0;
font-size: 25px;
color: white;
}
.links h6{
display: inline-block;
padding : 20px 0 20px 5px;
font-size: 16px;
color: white;
}
.val{

  color: red;
  border-radius: 2px;

}
.add{
  color: green;
  margin: 0 0 0 170px;
  padding: 0px;
}

.btn-info{
  margin: 20px 0 0 0;
}
</style>
<script>
function fun(){
var email= document.form.email.value;
var password= document.form.password.value;
flag=true;
if(email=="" && password==""){

  document.getElementById('c2').innerHTML="Entries are required";
flag=false;

}
else if(email==""){

document.getElementById('c1').innerHTML="email is Blank";
flag=false;
}
else if(password==""){
  document.getElementById('c2').innerHTML="password is Blank";
flag=false;
}


return flag;
}



</script>
 </head>
 <!-- header starts -->
 <body>
   <div class="container-fluid">
     <div class="row">
       <section id="logo">
         <div class="col-md-12">
          <div class="col-md-6">
            <img class="lg"src="assets/img/lg.jpg" />
          </div>
          <div class="col-md-6">
             <p>
               Not a member as yet? <a href="insert.php">Register Now</a>
             </p>
          </div>
        </div>
      </section>
    </div>


<!-- header ends -->







     <div class="row">
       <section id="log">
         <div class="col-md-12">
           <div class="col-md-6 ">
             <div id="myCarousel" class="carousel slide" data-ride="carousel" width="100%">
   <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner">
     <div class="item active">
       <img src="assets/img/new.jpg" alt="Los Angeles">
     </div>

     <div class="item ">
       <img src="assets/img/new1.jpg" alt="Los Angeles">
     </div>

     <div class="item">
       <img src="assets/img/c.jpg" alt="Los Angeles">
     </div>
   </div>

   <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
</div>


<!-- Login stars -->

<div class="col-md-6">
  <section id="in">
    <h1>Log In</h1>
    <form method="post" name="form" onsubmit="return fun()" action="login_trans.php">
    <br /><div class="row">
      <div class="col-md-3">
        <h5 class="nod">Email:</h5>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="email" class="form-control"  name="email" placeholder="Enter your email"><span class="val" id="c1"></span>
        </div>
      </div>
    </div><br />


    <div class="row">
      <div class="col-md-3">
        <h5 class="nod">password:</h5>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="password" class="form-control"  name="password" placeholder="Enter your password"><span class="val" id="c2"></span>
        </div>
      </div>
    </div>
    <?php

  if(isset($_REQUEST['msg']) && $_REQUEST['msg'] != ""){
    echo "<span class='add' >".$_REQUEST['msg']."</span>";
  }
  ?>


    <div class="row">
      <div class="col-md-3">
        <h5 class="nod"></h5>
      </div>
      <div class="col-md-7">
        <button  type="submit" name="submit" class="btn btn-info" value="Log In">Log In</button>
      </div>
    </div>
    </form>


  </section>
</div>
<div class="col-md-6">
  <p>
    <a href="#">Forgot Password?</a>
  </p>
</div>


</div>
       </section>
     </div>
     </div>

     <!--Footer starts-->
     <div class="col-md-12 ft">
      <div class="row" >
       <footer>
        <div class="col-md-4">
         <div class="links">
          <a href="#"><h6 style="display:inline-block">About Us </h6></a>
          <a href="#"><h6 style="display:inline-block">Contact Us </h6></a>
          <a href="#"><h6 style="display:inline-block">Terms & conditions </h6>
         </div>
        </div>
        <div class="col-md-4">
         <p class="foot">
          All rights reserved © 2017 Excellence technology India Ltd.
         </p>
      </div>
      <div class="col-md-4 ">
       <div class="social">
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
        <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
      </div>
     </div>
    </footer>
   </div>
  </div>
  <!--footer ends-->



 </body>

</html>

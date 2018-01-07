<html>
 <head>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
   <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" >
   <link href="assets/css/font-awesome.min.css" rel="stylesheet" >
   <link href="assets/css/font-awesome.css" rel="stylesheet" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="assets/css/style.css" rel="stylesheet" >

   <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


  <script>
   function fun(){
	 var username =  document.form.username.value;
	 var email    =  document.form.email.value;
   var password =  document.form.password.value;
   var Cpassword = document.form.Cpassword.value;
   var id       =  document.form.id.value;
   var gender   =  document.form.gender.value;
   var doj      =  document.form.doj.value;
   var proof    = document.form.proof.value;
   var profile  = document.form.profile.value;
   var desg     = document.form.select.value;
   var dept     = document.form.select2.value;
   var mobile   = document.form.mobile.value;
   var mobile2  = document.form.mobile2.value;
   var address  = document.form.address.value;
   flag=true;

	 if(username=="" && email==""){
		document.getElementById('c14').innerHTML="Entries are required";
	 flag=false;
	 }
	else if(username==""){
	 document.getElementById('c1').innerHTML="Name is Blank";
	flag=false;
	}
  else if(email==""){
	 document.getElementById('c2').innerHTML="Email is Blank";
	flag=false;
	}
	else if(password==""){
	 document.getElementById('c3').innerHTML="password is Blank";
	flag=false;
	}
  else if(Cpassword==""){
	 document.getElementById('c4').innerHTML="Confirm password is Blank";
	flag=false;
	}
  else if(id==""){
	 document.getElementById('c5').innerHTML=" Id is Blank";
	flag=false;
	}
  else if(gender==""){
	 document.getElementById('c6').innerHTML="please select a gender";
	flag=false;
	}
  else if(doj==""){
	 document.getElementById('c7').innerHTML="enter date of joining ";
	flag=false;
	}
  else if(proof==""){
	 document.getElementById('c8').innerHTML="Enter your id proof";
	flag=false;
	}
  else if(profile==""){
	 document.getElementById('c9').innerHTML="Enter your profile";
	flag=false;
	}

  else if(mobile==""){
	 document.getElementById('c12').innerHTML="mobile is Blank";
	flag=false;
	}
  else if(mobile2==""){
	 document.getElementById('c13').innerHTML="alternate mobile is Blank";
	flag=false;
	}
  else if(address==""){
	 document.getElementById('c14').innerHTML="address is Blank";
	flag=false;
	}
	return flag;
  }
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    };
    date_input.datepicker(options);
  })



  </script>
  <style>
  .nod{
    float: right;
    font-size: 20px;
    margin:10px 0 0 0;
    font-family: 'droid serif',serif;
  }
  .facb{
    width: 25px;
    height: 25px;
    margin: 0 10px 0 0;
  }
  .gog{
    width: 25px;
    height: 25px;
    margin: 0 10px 0 0;
  }
  .txxt{
    font-size: 10px;
    color: grey;

    font-family: 'droid serif',serif;
    margin: 8px 0 0 30px;
  }
  .facebook{
    margin: 0 0 0 30px;
  }
  .txt{
    margin: 10px 0 10px 55px;
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
.btn-info{
  margin: 0 0 130px 0;
}

  </style>
 </head>
  <body>
    <div class="container-fluid">

      <!--Header starts-->

      <div class="row">
        <section id="logo">
          <div class="col-md-12">
            <div class="col-md-6 col-xs-12">
              <img class="lg"src="assets/img/lg.jpg" />
            </div>
           <div class="col-md-6 col-xs-12">
             <h2>Already Registered? <a href="login.php">Login </a>here</h2>
           </div>
         </div>
       </section>
      </div>


<!--Header ends-->



<!--Form starts-->

  <div class="row">
    <section id="login">
      <h1> Sign Up</h1>
    </section>
  </div>

<div class="col-md-12">

<div class="col-md-8">
  <form method="post" name="form" onsubmit="return fun()" action="signup_trans.php" enctype="multipart/form-data">



  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Name:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Enter your full name"><span class="vall" id="c1"></span>
      </div>
    </div>


  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Email:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="email" class="form-control"  name="email" placeholder="Enter your email"><span class="vall" id="c2"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Password:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="password" class="form-control"  name="password" placeholder="Enter password"><span class="vall" id="c3"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Confirm password:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="password" class="form-control"  name="Cpassword" placeholder="Confirm password"><span class="vall" id="c4"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Enter your id:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" name="id" placeholder="Enter your id"><span class="vall" id="c5"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Gender:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input style="width:20px" type="radio" name="gender" value="male" checked> Male
          <input style="width:20px" type="radio" name="gender" value="female"> Female<br /><span class="vall" id="c6"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Date of joining:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control"  name="doj" placeholder="MM/DD/YYYY"><span class="vall" id="c7"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Id Proof:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="file" name="proof" placeholder="Id_proof"><span class="vall" id="c8"></span>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Profile Picture:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="file" name="profile" placeholder="upload your profile picture"><span class="vall" id="c9"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Designation:</h5>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="select"><span class="vall" id="c10"></span>
        <option>PHP</option>
        <option>.NET</option>
        <option>JAVA</option>
        <option>ANDROID</option>
     </select><br />
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Department:</h5>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="select2"><span class="vall" id="c11"></span>
        <option>Ece</option>
        <option>Mec</option>
        <option>Cse</option>
        <option>Civil</option>
      </select><br />
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Mobile:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control"  name="mobile" placeholder="Enter your mobile"><span class="vall" id="c12"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Alternate mobile:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control"  name="mobile2" placeholder="Enter your alternate mobile"><span class="vall" id="c13"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h5 class="nod">Address:</h5>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="address" class="form-control"  name="address" placeholder="Enter your Address "><span class="vall" id="c4"></span>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <h5 class="nod"></h5>
    </div>
    <div class="col-md-6">


    <div class="checkbox">
  <label><input type="checkbox" value="">I agreed to the <a href="#"> Terms and Conditions</a> governing the use of <a href="#">Excellence.com.</a>
</label>
</div>
  </div>
  </div>





  <div class="row">
    <div class="col-md-6">
      <h5 class="nod"></h5>
    </div>
    <div class="col-md-6">
      <button style="float:right" type="submit" name="submit" class="btn btn-info">Sign Up</button>
    </div>
  </div>
</form>
</div>

  <div class="col-md-4">
    <p class="txt">
      Fill my details from
    </p>
    <div class="row">
     <a href="#"><button class="facebook">  <img class="facb"src="assets/img/f.png"  /> Facebook</button></a>
     <a href="#"><button class="twitter">  <img class="gog" src="assets/img/gg.png" />Google</button></a>
    </div>
    <div class="row">
     <div class="col-md-7">
      <p class="txxt">
        We will not post anything without your permission.
      </p>
     </div>
    </div>
  </div>



</div>

<!--Form ends-->


</div>
<!--footer starts-->

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
<!--Footer ends-->

</body>

</html>

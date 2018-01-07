<?php
session_start();
if(empty($_SESSION['email']))
{
header("location:login.php");

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
  <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" >
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" >
  <link href="assets/css/font-awesome.css" rel="stylesheet" >

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="assets/css/style1.css" rel="stylesheet" >

   <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
   <script>
   function fun(){
   var name= document.form.username.value;
   var father = document.form.father.value;
    var college= document.form.college.value;
     var mobile= document.form.mobile.value;
      var mobile2= document.form.mobile2.value;
       var payment= document.form.payment.value;
        var mop= document.form.mop.value;
         var course= document.form.course.value;
          var balance= document.form.balance.value;
           var date= document.form.date.value;
   flag=true;
   if(name=="" && father==""){

     document.getElementById('c10').innerHTML="Entries are required";
   flag=false;

   }
   else if(name==""){

   document.getElementById('c1').innerHTML="username is Blank";
   flag=false;
   }
   else if(father==""){
     document.getElementById('c2').innerHTML="fathers name is Blank";
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
.sidenav {
  height: 78%;
}
.row.content {
height: 1000px;
}
.image{
width: 100%;
margin: 50px 0 0 0;
}
.nodd {
  float: right;
  font-size: 17px;
  margin:10px 0 0 0;
  font-family: 'droid serif',serif;
}
.name{
  color: white;
  text-align: center;
  margin: 0 0 0 30px;
  font-size: 22px;
  font-family: 'droid serif',serif;

}
.email{
  color: white;
  text-align: center;
  margin: 0 0 0 30px;
  font-size: 16px;


}
.mobile{
  color: white;
  text-align: center;
  margin: 0 0 0 30px;
  font-size: 16px;
}
.address{
  color: white;
  text-align: center;
  margin: 0 0 0 30px;
  font-size: 16px;
}



</style>
</head>



<body>
  <?php
include 'db.php';

$email = $_SESSION['email'];
$results =mysql_query("select * from user where email='$email' ")or die(mysql_error());
		if(mysql_num_rows($results)>0){
while($row = mysql_fetch_array($results)){
$imgname = $row['dp'];

    $profilepic =   "<img class='ph'  src=images/".$row['dp'] . " height='150px'   width='150px'>";
	$username = $row['name'];
	$email = $row['email'];
  $mobile = $row['mobile'];
  $address = $row['address'];


}
		}

   ?>


   <!--Navbar starts-->

  <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <section id="logo">
        <img class="lg" src="assets/img/lg.jpg" />
      </section>
     </div>

     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-centre">
       <li ><a href="active" data-toggle="modal" data-target="#basicModa5">New Registration </a></li>
       <li><a href="#" data-toggle="modal" data-target="#basicModa2">Fees</a> </li>
       <li><a href="#" data-toggle="modal" data-target="#basicModa3">New Enquiry</a> </li>
       <li><a href="#" data-toggle="modal" data-target="#basicModa4"> View Records</a></li>

      </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

     </ul>
     </div>
   </div>
 </nav>


<!--Navbar ends-->




<!-- registration modal starts-->




     <div class="modal fade" id="basicModa5" tabindex="-1" role="dialog" aria-labelledby="basicModa5" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" id="myModalLabe5">Enter your detail</h4>
           </div>

           <div class="modal-body">
          <form method="post" name="form" onsubmit="return fun()" action="home_trans.php">
            <div class="row">
              <div class="col-md-4">
                <h5 class="nod">Name:</h5>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                  <input type="text" class="form-control"  name="username" placeholder="Enter your full name"><span class="vall" id="c1"></span>
                </div>
              </div>
            </div>

            <div class="row">
             <div class="col-md-4">
               <h5 class="nod">Fathers name:</h5>
             </div>
             <div class="col-md-7">
              <div class="form-group">
                <input type="text" class="form-control" name="father" placeholder="Enter your Father name"><span class="vall" id="c2"></span>
              </div>
             </div>
            </div>

            <div class="row">
             <div class="col-md-4">
              <h5 class="nod">College:</h5>
             </div>
             <div class="col-md-7">
              <div class="form-group">
               <input type="text" class="form-control" name="college" placeholder="Enter your college"><span class="vall" id="c3"></span>
              </div>
            </div>
           </div>

           <div class="row">
            <div class="col-md-4">
              <h5 class="nod">Cell 1:</h5>
            </div>
            <div class="col-md-7">
              <div class="form-group">
               <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile"><span class="vall" id="c4"></span>
             </div>
            </div>
           </div>

          <div class="row">
            <div class="col-md-4">
              <h5 class="nod">Cell 2:</h5>
            </div>
            <div class="col-md-7">
              <div class="form-group">
               <input type="text" class="form-control" name="mobile2" placeholder="Enter your second mobile"><span class="vall" id="c5"></span>
              </div>
             </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <h5 class="nod">Payment:</h5>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                 <input type="text" class="form-control" name="payment" placeholder="Enter payment"><span class="vall" id="c6"></span>
               </div>
              </div>
            </div>

           <div class="row">
             <div class="col-md-4">
                <h5 class="nod">Mode of payment:</h5>
             </div>
            <div class="col-md-7">
               <div class="form-group">
                 <input type="text" class="form-control" name="mop" placeholder="Enter mode of payment"><span class="vall" id="c7"></span>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5 class="nod">Course:</h5>
            </div>
            <div class="col-md-7">
              <div class="form-group">
               <input type="text" class="form-control" name="course" placeholder="Enter your course"><span class="vall" id="c8"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5 class="nod">Balance Due:</h5>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <input type="text" class="form-control" name="balance" placeholder="remaining fees "><span class="vall" id="c9"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5 class="nod">Date:</h5>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <input type="text" class="form-control" name="date" placeholder="MM/DD/YYY"><span class="vall" id="c10"></span>
               </div>
            </div>
          </div>

    </div>

                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary" name="submit">
                       Submit
                     </button>
                 </div>
                 </form>
             </div>
         </div>
     </div>

<!-- registration modal ends-->




<!-- fee modal starts-->

     <div class="modal fade" id="basicModa2" tabindex="-1" role="dialog" aria-labelledby="basicModa2" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" id="myModalLabe2">Enter your ID</h4>
           </div>

           <div class="modal-body">
             <div class="row">
               <section id="fom">
                 <div class="col-md-12">
                  <div class="row">
                   <div class="col-md-4">
                    <h5 class="nod">Student Id:</h5>
                   </div>

                   <div class="col-md-8">
                    <form method="post" name="form" onsubmit="return fun()" action="a.php">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="t1" placeholder="Enter your id">
                      </div>
                    </div>
                   </div>
                  </div>
                 </section>
               </div>
             </div>

           <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="Submit" class="btn btn-primary">Submit</button>
					  </form>
          </div>
        </div>
      </div>
     </div>

<!-- fee modal ends-->




<!-- enquiry modal starts-->


          <div class="modal fade" id="basicModa3" tabindex="-1" role="dialog" aria-labelledby="basicModa3" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabe3">Enquiry Form</h4>
                </div>

                <div class="modal-body">
                  <form method="post" name="form" onsubmit="return fun()" action="enquiry_trans.php">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="nodd">Name:</h5>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="username" placeholder="Enter your name">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="nodd">Mobile No:</h5>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="mobile" class="form-control"  name="mobile" placeholder="Enter your mobile" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="nodd">Semester & Stream:</h5>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="sas" placeholder="Enter your Semester and stream">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="nodd">College:</h5>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="college" placeholder="Enter your college">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="nodd">Technical Skills:</h5>
                    </div>
                    <div class="col-md-7">
                      <select class="form-control" id="sel1" name="skills">
  <option>PHP</option>
  <option>.NET</option>
  <option>JAVA</option>
  <option>ANDROID</option>
  <option>NETWORKING</option>
  <option>AUTO-CAD</option>
  <option>HR/FINANCE MARKETING</option>
  <option>C/C++</option>
  <option>SOLID WORKS</option>
  <option>S.E.O</option>
  <option>EMBEDDED SYSTEM</option>
  <option>ROBOTICS</option>
  <option>VLSI-VHDL</option>
  <option>I-PHONE</option>
  <option>AUTOMATION</option>
  <option>CATIA/PRO-E</option>
  <option>DIGITAL MARKETING</option>
  <option>ORACLE</option>
  <option>REVIT/STAAD PRO/3DS MAX</option>
  <option>BIDDING</option>
</select><br />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="nodd">Date:</h5>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control"  placeholder="MM/DD/YYY" name="date">
                      </div>
                    </div>
                  </div>


                  </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-dfault" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit">
                            Submit
                          </button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>

        <!-- enquiry modal ends-->







<!-- record modal starts-->

          <div class="modal fade" id="basicModa4" tabindex="-1" role="dialog" aria-labelledby="basicModa4" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabe4">View Records</h4>
                </div>

                <div class="modal-body">
                  <form method="post" name="form" onsubmit="return fun()" action="single.php">
                  <br /><div class="row">
                    <div class="col-md-4">
                      <h5 class="nod">View single record:</h5>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="record" placeholder="Enter your Id">
                      </div>
                    </div>
                  </div><br />
                    <a href="viewrecords.php"><p >
                      View all records
                    </p></a>
                  </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-dfault" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit">
                            Submit
                          </button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>

      <!-- record modal ends-->



  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav " style="background:#1B2631">

      <ul class="nav nav-pills nav-stacked">
        <li>
<?php echo $profilepic ;
echo"<br><br><span class='name'>".$username."</span><br>";
echo"<br><span class='email' >".$email."</span><br>";
echo"<br><span class='mobile' >".$mobile."</span><br>";
echo"<br><span class='address' >".$address."</span>";


if($imgname =='default.jpg'){

	echo"<a href='' > Update Profile</a>";
}



?>

        </li>

      </ul>

    </div>
    <div class="col-md-10">
      <img class="image" src="assets/img/new1.jpg"  />
    </div>


  </div>
</div>

<!-- footer starts-->

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


  <!-- footer ends-->





</body>
</html>

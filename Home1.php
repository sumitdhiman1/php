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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .navbar-inverse .navbar-nav>li>a{
  font-size: 16px;
  }
  fa fa-book{
    padding: 0 50px 0 0;
  }
  .navbar-inverse .navbar-nav>li>a:hover{
    color: grey;
  }

  li:hover{
    color: grey;
  }



  .navbar-inverse{
    background:#1B2631;
    border:none;
  }
  .navbar-inverse .navbar-nav>li>a {
       color: #fff;

  }
  .navbar-inverse .navbar-nav>.active>a{
    background: rgba(0, 0, 0, 0.5);
  }
  h6{
    color: white;
    font-size: 16px;
    padding: 5px 0 0 0;
  }

 .navbar-header img{
   width: 200px;
   height: 50px;

 }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */


    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
    h6{
      color: black;padding: 10px 0 0 0;

      float: right;
    }
    input{
      width: 400px;
    }
    h2{
     padding: 40px 0 0 0;
     font-size: 20px;
     text-align: center;

    }
    .nav-pills > li > a {
      color: white;
      text-align: center;
      font-size: 16px;
      background: #1B2631;

    }

    }
  </style>
</head>
<body>
  <?php
include 'db.php';

echo $email = $_SESSION['email'];
$results =mysql_query("select * from test where email = '$email'")or die(mysql_error());
while($row = mysql_fetch_assoc($results)){

  print_r($row);

}
   ?>

  <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
<img class="small" src="assets/img/lg.jpg" />
     </div>

     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-centre">
       <li ><a href="active" data-toggle="modal" data-target="#basicModal">New Registration </a></li>
       <li><a href="#" data-toggle="modal" data-target="#basicModal">Fees</a> </li>
       <li><a href="#" data-toggle="modal" data-target="#basicModa3">Fee Update</a> </li>
       <li><a href="#" data-toggle="modal" data-target="#basicModal">Fee View</a></li>

      </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

     </ul>
     </div>
   </div>
 </nav>


  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">

      <ul class="nav nav-pills nav-stacked">
        <li>
          <img src=""
        </li>
        <li  style="color:"><a href="#section1">New Registration</a></li>
        <li><a href="#section1">Fee</a></li>
        <li><a href="#section3">Fees Update</a></li>
        <li><a href="col-sm-9">Fees View</a></li>
      </ul>

    </div>


    <div class="col-md-10" >
      <div class="row">
        <div class="col-md-8" style="background-color: #f2f4f5">
          <h2>Enter your Detail</h2>
       </div>

    </div>
      <div class="col-md-3">
        <section id="lab">
        <div class="row">
          <h6>Name:</h6>
        </div>
        <div class="row">
          <h6>Fathers name:</h6>
        </div>
        <div class="row">
          <h6>College:</h6>
        </div>
        <div class="row">
          <h6>Cell 1:</h6>
        </div>
        <div class="row">
          <h6>Cell 2:</h6>
        </div>
        <div class="row">
          <h6>Payment:</h6>
        </div>
        <div class="row">
          <h6>Mode of payment:</h6>
        </div>
        <div class="row">
          <h6>Course:</h6>
        </div>
        <div class="row">
          <h6>Balance due:</h6>
        </div>
          </section>
    </div>



        <div class="col-md-5">
          <form method="post" name="form" onsubmit="return fun()" action="">
          <br >  <input type="text" name="username" placeholder="Enter your full name"><span id="c1">  </span></br>
          <br >  <input type="text" name="father" placeholder="Enter your Father name"><span id="c2">  </span></br>
          <br >  <input type="text" name="college" placeholder="Enter your college"><span id="c3">  </span></br>
          <br >  <input type="text" name="mobile" placeholder="Enter your mobile"><span id="c4">  </span></br>
          <br >  <input type="text" name="mobile2" placeholder="Enter your second mobile"><span id="c5">  </span></br>
          <br >  <input type="text" name="payment" placeholder="Enter payment"><span id="c6">  </span></br>
          <br > <input type="text" name="mop" placeholder="Enter mode of payment"><span id="c7">  </span></br>
          <br >  <input type="text" name="course" placeholder="Enter your course"><span id="c7">  </span></br>
          <br >  <input type="text" name="balance" placeholder="remaining fees "><span id="c7">  </span></br>
          <br >  <input type="submit" name="submit" value="Submit" style="background-color: #f2f4f5" ><span id="c7">  </span></br>

          </form>
        </div>

    </div>
  </div>
</div>



</body>
</html>

<!DOCTYPE html>
<html>
 <title></title>
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
 img{
   width: 100%;
 }
 #basicModal h4{

   color: white;
   background: #1B2631;
   font-size: 25px;
   text-align: center;
 }
.navbar-header img{
  width: 200px;
  height: 50px;

}
#fom h6{
color: black;
float: right;
  padding: 0px;
  font-size: 17px;

}
#fom input{
  width: 300px;

  font-size: 15px;
  margin: 10px 0 0 0;
}


 </style>
 </head>
   <body>
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
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        </ul>
        </div>
      </div>
    </nav>



    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Enter your detail</h4>
          </div>

          <div class="modal-body">
            <div class="row">
              <section id="fom">
                <div class="col-md-12">
                  <div class="col-md-4">
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
                </div>



                    <div class="col-md-8">
                      <form method="post" name="form" onsubmit="return fun()" action="">
                        <input type="text" name="username" placeholder="Enter your full name"><span id="c1">  </span></br>
                        <input type="text" name="father" placeholder="Enter your Father name"><span id="c2">  </span></br>
                        <input type="text" name="college" placeholder="Enter your college"><span id="c3">  </span></br>
                        <input type="text" name="mobile" placeholder="Enter your mobile"><span id="c4">  </span></br>
                        <input type="text" name="mobile2" placeholder="Enter your second mobile"><span id="c5">  </span></br>
                        <input type="text" name="payment" placeholder="Enter payment"><span id="c6">  </span></br>
                        <input type="text" name="mop" placeholder="Enter mode of payment"><span id="c7">  </span></br>
                        <input type="text" name="course" placeholder="Enter your course"><span id="c7">  </span></br>
                        <input type="text" name="balance" placeholder="remaining fees "><span id="c7">  </span></br>

                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">
                      Submit
                    </button>
                </div>
            </div>
        </div>
    </div>






<!-- modal3 -->
<div class="modal fade" id="basicModa3" tabindex="-1" role="dialog" aria-labelledby="basicModa3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabe3">Fee Update</h4>
      </div>

      <div class="modal-body">
        <div class="row">
          <section id="fom">
            <div class="col-md-12">
              <div class="col-md-4">
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
                  <h2>zsdvcghngbn</h2>
                </div>
                <div class="row">
                  <h6>Course:</h6>
                </div>
                <div class="row">
                  <h6>Balance due:</h6>
                </div>
            </div>



                <div class="col-md-8">
                  <form method="post" name="form" onsubmit="return fun()" action="">
                    <input type="text" name="username" placeholder="Enter your full name"><span id="c1">  </span></br>
                    <input type="text" name="father" placeholder="Enter your Father name"><span id="c2">  </span></br>
                    <input type="text" name="college" placeholder="Enter your college"><span id="c3">  </span></br>
                    <input type="text" name="mobile" placeholder="Enter your mobile"><span id="c4">  </span></br>
                    <input type="text" name="mobile2" placeholder="Enter your second mobile"><span id="c5">  </span></br>
                    <input type="text" name="payment" placeholder="Enter payment"><span id="c6">  </span></br>
                    <input type="text" name="mop" placeholder="Enter mode of payment"><span id="c7">  </span></br>
                    <input type="text" name="course" placeholder="Enter your course"><span id="c7">  </span></br>
                    <input type="text" name="balance" placeholder="remaining fees "><span id="c7">  </span></br>

                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                  Submit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- modal3 end -->



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
<img src="assets/img/b.jpg" alt="Los Angeles">
</div>

<div class="item ">
<img src="assets/img/a.jpg" alt="Los Angeles">
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

   </body>
</html>

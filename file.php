<form action="upload.php" method="post" enctype="multipart/form-data">
uploadfile<input type="file" name="image"/>_
<input type="submit" value="upload">






    <div class="col-md-10"  >
      <div class="row">
        <div class="col-md-8" style="background-color: #f2f4f5">
          <h2>Enter your Detail</h2>
       </div>

    </div>


    <div class="col-md-8 center">

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
          <form method="post" name="form" onsubmit="return fun()" action="home_trans.php">
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

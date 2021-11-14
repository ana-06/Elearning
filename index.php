
<?php
include('./maininclude/header.php');
?>

<!-- Start of Video Background -->
<!-- container-fluid is used so that the video covers the entire view-port -->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/banvid.mp4">
    </video>    
     <div class="vid-overlay"></div>
    
  </div>
  <div class="vid-content">
    <h1 class = "my-content"> SLCK PRESENTS </h1>
    <small class="my-content">The Best E-Learning Platform</small><br>
    <a href="#" class = "btn btn-danger ">Get Started</a>
  </div>

</div>

<!-- End of Video Background -->

<!-- Start of Text Banner -->
<div class = "container-fluid bg-danger txt-banner">
  <div class = "row bottom-banner">
    <div class = "col-sm">
      <h5><i class="fas fa-user-check mr-3"></i> Certified </h5>
    </div>
    <div class = "col-sm">
      <h5><i class="fas fa-book-reader mr-3"></i> Free Online Courses </h5>
    </div>
    <div class = "col-sm">
      <h5><i class="fas fa-award mr-3"></i> Skill Development </h5>
    </div>
    <div class = "col-sm">
      <h5><i class="fas fa-chalkboard-teacher mr-3"></i> Expert Instructors </h5>
    </div>
  </div>
</div>
<!-- End of Text Banner -->


<!-- Start of Courses -->
<div class="container mt-5">
  <h1 class="text-center">Enroll To These Popular Courses </h1>
  <!-- Start of 1st course -->
  <div class = "card-deck mt-4">
    <!-- in href a link is provided which directs it to the desired page -->
    <a href="#" class ="btn" style="text align: left; padding: 0px; margin: 0px; "> 
      <div class="card">
        <img src="image/C-Programming-Course.jpg" class="card-img-top" alt="C-Programming" width="200" height="300" />
        <div class = "card-body">
          <h5 class="card-title"> C-Programming For Beginners </h5>
          <p class="card-text">This specialization develops strong programming fundamentals for learners who want to solve complex problems by writing computer programs. Through the course, you will learn to develop algorithms in a systematic way and read and write the C code to implement them</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 3500  </del></small><span
          class="font-weight-bolder">  Free <span></p> <a
          class="btn btn-primary text-white font-weight-bolder " href="#" style="float:right"> Enroll </a>
        </div>
      </div>
    </a>
  </div>
  <!-- End of First course -->
  
  <!-- Start of 2nd Course -->
  <div class = "card-deck mt-4">
    <a href="#" class ="btn" style="text align: left; padding: 0px; margin: 0px; ">
      <div class="card">
        <img src="image/Python-programming.jpg" class="card-img-top" alt="Python Programming" width="200" height="300" />
        <div class = "card-body">
          <h5 class="card-title"> Python For Everybody </h5>
          <p class="card-text">This Specialization builds on the success of the Python for Everybody course and will introduce fundamental programming concepts including data structures, networked application program interfaces, and databases, using the Python programming language</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 4000 </del></small><span 
          class="font-weight-bolder"> Free <span></p> <a
          class="btn btn-primary text-white font-weight-bolder" href="#" style = "float:right"> Enroll </a>
        </div>
      </div>
     </a>
  </div>
  <!-- End of 2nd course -->
  <div class="text-center m-2">
    <a class="btn btn-dark btn-sm" href="#">View All Courses</a>
  </div>
</div>  
<!-- End of popular course -->

<!-- Start of Contact Us -->
<div class="container mt-4" id="Contact"> <!-- Start of Contact us contaniner -->
  <h2 class = "text-center mb-4">Contact Us</h2> <!-- Contact is heading -->
  <!-- Start Contact us Row -->
  <div class="row">
    <!-- Start of 1st column of Contact Us -->
    <div class="col-md-8">
      <form action="" method="post">
        <input type="text" class="form-control" name="name" placeholder="Full Name"> <br>
        <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
        <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
        <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
        <p>Priority</p>
        <select name="priority" size="1">
        <option value="Low">Low</option>
        <option value="Normal">Normal</option>
        <option value="High">High</option>
        <option value="Emergency">Emergency</option>
        </select>
        <br><br>
        <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>

      </form>
    </div>
    <!-- Start of Contact us info 1st column -->
    <div class="col-md-4 stripe text-white text-center">
    
    <h4>SLCK E-LEARNING PLATFORM</h4>
    <P>SLCK,
       Shavige Malleshwara Hills, <br>
       Kumarswamy Layout,<br>
       Bangalore - 560078 <br>
       www.elearning.com <br>
    </P>
    </div>
  
  <!-- End of Contact us info 2nd column -->
  </div>
</div>

<?php
include('./maininclude/footer.php');
?>

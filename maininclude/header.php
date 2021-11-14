<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- This gives the browser instructions on how to control the page's dimensions and scaling. -->
    <meta name ="viewport" content = "width = device-width,intial-scale=1.0">
    <!-- Bootstrap file CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome file CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Irish+Grover&display=swap" rel="stylesheet">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>E-Learning Management</title>
    
</head>
<body>

  <!-- Start of navigation bar pl tag is used for padding(not working)  -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary pl-4 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SLCK </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">  <!-- here custom-nav is the new and 2nd class(created for hover effect) -->
          <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
          <li class="nav-item custom-nav-item"><a href="quiz.php" class="nav-link">Quiz</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
          <!-- modal code written below is linked here(to get popup when clicked on login or signup) -->
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>





      </ul>

    </div>
</nav> 
<!-- End of navigation bar -->

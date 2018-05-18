<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TULA OVERSEAS-GALLERY</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.js"></script>
  <link rel="stylesheet" href="bleedbytes.css">
     <link href="favicon.ico" type="image" rel="icon">
     
</head>

<body class="container-fluid">
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark info-color-dark">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="index.php" id="logo"><img src="tula.jpg" alt="tulalogo" width="60px" height="60px"></a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto" id="navtext">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
              <span class="sr-only">(current)</span>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="medicine.php">Medicine</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">MBBS</a>
              <a class="dropdown-item" href="#">MBA</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admission</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
        <!-- Links -->

      </div>
      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
  </header>
  <main class="container">
      <div class="sidenav">
  <a href="enquiry.php">Enquiry</a>
</div>
    
    <hr>
    <!-- photos -->
<!-- Grid row -->
<div class="row">

    <div class="col-lg-4 col-md-12">
<div class="card card-cascade wider">
    <a href="../gallery/aimst.php">  
       <h4 class="card-title text-center"><strong>AMIST University Gallery</strong></h4>
        <img src="images/AIMST.jpg" height="300px" width="100%" alt="Responsive image">
        </a>
        </div>
    </div>
    
   
    <div class="col-lg-4 col-md-12">
<div class="card card-cascade wider">
       <a href="../gallery/csmu.php/">
        <h4 class="card-title text-center"><strong>CSMU University Gallery</strong></h4>
        <img src="images/csmu.jpg" height="300px" width="100%" alt="Responsive image">
        </div>
        </a>
    </div>
     
      
    <div class="col-lg-4 col-md-12">
<div class="card card-cascade wider">
       <a href="../gallery/odessa.php/">
        <h4 class="card-title text-center"><strong>Odessa University Gallery</strong></h4>
        <img src="images/odessa.jpg" height="300px" width="100%" alt="Responsive image">
        </div>
        </a>
      </div>
      
      </div>
     <!-- Grid column -->
     <br><br>
<div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12">
<div class="card card-cascade wider">
       <a href="../gallery/tsmu.php/">
        <h4 class="card-title text-center"><strong>TSMU University Gallery</strong></h4>
        <img src="images/tsmu1.jpg" height="300px" width="100%" alt="Responsive image">
        </a>
        </div>
    </div>
    

    
    <div class="col-lg-4 col-md-12">
<div class="card card-cascade wider">
       <a href="../gallery/uzzhhord.php/">
        <h4 class="card-title text-center"><strong>UZHHOROD University Gallery</strong></h4>
        <img src="images/uzzhord1.jpg" height="300px" width="100%" alt="Responsive image">
        </a>
        </div>

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->
    
    
   
   
    
    <!-- photos -->
   
  </main>





  <section id="footer">

 <?php
      include("footer.php");
      ?>

  </section>




  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

</body>

</html>

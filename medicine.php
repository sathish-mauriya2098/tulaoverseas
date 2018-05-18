<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MEDICINE</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
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
                    <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
            <li class="nav-item active">
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
          <li class="nav-item">
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
   <section id="med">
       <div class="row">
          <div class="col-sm-6">
    <div class="">
      <div class="card-body">
        <h5 class="card-title">MEDICINE</h5>
        <p class="card-text">Medicine is the science and practice of the diagnosis, treatment, and prevention of disease. Medicine encompasses a variety of health care practices evolved to maintain and restore health by the prevention and treatment of illness. Contemporary medicine applies biomedical sciences, biomedical research, genetics, and medical technology to diagnose, treat, and prevent injury and disease, typically through pharmaceuticals or surgery, but also through therapies as diverse as psychotherapy, external splints and traction, medical devices, biologics, and ionizing radiation, amongst others.<br><br><br><br></p>
      </div>
    </div>
  </div>
           <div class="col-sm-6">
    <div class="">
      <div class="card-body">
        <img src="images/medical1.jpg" class="img-responsive" width="100%">
      </div>
    </div>
  </div>
           </div>
       <hr>
       <div class="row country">
  <div class="col-sm-4">
    <div class="card" style="background-image:url(images/malaysia.jpg);background-size:cover;color:white;">
      <div class="card-body" >
        <h1>MALASIYA</h1>
        <a href="malaysia/malaysiauniversity.php" class="btn btn-primary">VIEW UNIVERSITIES</a>
      </div>
    </div>
  </div>
           <div class="col-sm-4">
    <div class="card" style="background-image:url(images/russia1.jpg);background-size:cover;color:white;">
      <div class="card-body">
        <h1>RUSSIA</h1>
        <a href="russia/russiauniversity.php" class="btn btn-primary">VIEW UNIVERSITIES</a>
      </div>
    </div>
  </div>
           <div class="col-sm-4">
    <div class="card" style="background-image:url(images/ukraine.jpg);background-size:cover;color:white;">
      <div class="card-body">
        <h1>UKRAINE</h1>
        <a href="ukraine/ukraineuniversity.php" class="btn btn-primary">VIEW UNIVERSITIES</a>
      </div>
    </div>
  </div>
       </div>
       <hr>
       </section> 
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

    <html>
<head>
    <title>CONTACT | TULA OVERSEAS ></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <title>TULA OVERSEAS-CONTACT US</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bleedbytes.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body container-fluid>

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
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
        <!-- Links -->

      </div>
      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
  </header>


<main>
    
    <div class="container-fluid row panel panel-default">
<div class="col-lg-6 col-md-6 panel-body" id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2247479890207!2d80.22836691399681!3d13.086783015883118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA1JzEyLjQiTiA4MMKwMTMnNTAuMCJF!5e0!3m2!1sen!2sin!4v1523546009726"
    width="640" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="col-lg-1-12 col-md-6 blue" id="contact">

  <!-- Default form contact -->
  <form action="contact.php" method="post">
      <p class="animated tada infinite h4 text-center mb-4">Write to us</p>

      <!-- Default input name -->
      <label for="defaultFormContactNameEx" id="concol">Your name</label>
      <input type="text" id="defaultFormContactNameEx" class="form-control" name="name">

      <br>

      <!-- Default input email -->
      <label for="defaultFormContactEmailEx" id="concol">Your email</label>
      <input type="email" id="defaultFormContactEmailEx" class="form-control" name="email">

      <br>

      <!-- Default input subject -->
      <label for="defaultFormContactSubjectEx" id="concol">Subject</label>
      <input type="text" id="defaultFormContactSubjectEx" class="form-control" name="subject">

      <br>

      <!-- Default textarea message -->
      <label for="defaultFormContactMessageEx" id="concol">Your message</label>
      <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3" name="message"></textarea>

      <div class="text-center mt-4">
          <button class="btn btn-outline-white" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
      </div>
  </form>
  <!-- Default form contact -->
  <?php
$headers = "From:tulaoverseas@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$msg="
<b>Name  :</b>$name<br>
<b>Email :</b>$email<br>
<b>Subject :</b>$subject<br>
<b>Message :</b>$message<br>";
mail("tulaoverseas@gmail.com","TULA Enquiry",$msg,$headers);
    
    ?>


</div>

</div>
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

<script type="text/javascript">
// Input Lock
$('textarea').blur(function () {
$('#hire textarea').each(function () {
    $this = $(this);
    if ( this.value != '' ) {
      $this.addClass('focused');
      $('textarea + label + span').css({'opacity': 1});
    }
    else {
      $this.removeClass('focused');
      $('textarea + label + span').css({'opacity': 0});
    }
});
});

$('#hire .field:first-child input').blur(function () {
$('#hire .field:first-child input').each(function () {
    $this = $(this);
    if ( this.value != '' ) {
      $this.addClass('focused');
      $('.field:first-child input + label + span').css({'opacity': 1});
    }
    else {
      $this.removeClass('focused');
      $('.field:first-child input + label + span').css({'opacity': 0});
    }
});
});

$('#hire .field:nth-child(2) input').blur(function () {
$('#hire .field:nth-child(2) input').each(function () {
    $this = $(this);
    if ( this.value != '' ) {
      $this.addClass('focused');
      $('.field:nth-child(2) input + label + span').css({'opacity': 1});
    }
    else {
      $this.removeClass('focused');
      $('.field:nth-child(2) input + label + span').css({'opacity': 0});
    }
});
});
</script>
</body>

</html>

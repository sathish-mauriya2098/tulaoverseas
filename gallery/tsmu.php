<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TSMU | Gallery</title>
  <link rel="shortcut icon" href="http://tulaedu.in/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="gallery-grid.css">

</head>

<body>


<main>
  <div class="container gallery-container">

    <h1>TSMU University Gallery</h1>

    <!--<p class="page-description text-center">Fluid Layout With Overlay Effect</p>-->

    <div class="tz-gallery">

      <div class="row">

        <div class="col-sm-12 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/download%20(2).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/download%20(2).jpg" alt="Bridge">
                </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/download%20(3).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/download%20(3).jpg" alt="Park">
                </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/download%20(4).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/download%20(4).jpg" alt="Tunnel">
                </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/download.jpg">
                    <img src="http://tulaedu.in/tsmu_photos/download.jpg" alt="Traffic">
                </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images%20(1).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/images%20(1).jpg" alt="Coast">
                </a>
        </div>
        <div class="col-sm-6 col-md-4">
          
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images%20(2).jpg">
			  <img src="http://tulaedu.in/tsmu_photos/images%20(2).jpg" alt="Rails">
                </a>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-12 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images%20(3).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/images%20(3).jpg" alt="Rails">
                </a>
        </div>

        <div class="col-sm-12 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images%20(4).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/images%20(4).jpg" alt="Rails">
                </a>
        </div>

        <div class="col-sm-12 col-md-4">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images%20(5).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/images%20(5).jpg" alt="Rails">
                </a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-6">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images%20(6).jpg">
                    <img src="http://tulaedu.in/tsmu_photos/images%20(6).jpg" alt="Coast">
                </a>
        </div>

        <div class="col-sm-6 col-md-6">
          <a class="lightbox" href="http://tulaedu.in/tsmu_photos/images.jpg">
                    <img src="http://tulaedu.in/tsmu_photos/images.jpg" alt="Coast">
                </a>
        </div>
      </div>
    </div>

  </div>
</main>

<section id="footer">

 <?php
     include("footer.php");
     ?>
 </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>
</body>

</html>

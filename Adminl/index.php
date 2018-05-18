<html>
<head>
    <title>ADMIN LOGIN</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="favicon.ico" type="image" rel="icon">
    <style>
        body{
            background-image: url(sy.jpg);
            background-attachment: fixed;
            background-size: 100% auto;
            border: 2px solid black;
        }
      
        *{
    font-family: 'Ubuntu', sans-serif;
 }
    
    h2 {
        display: block !important;
        font-size: 1.5em !important;
        -webkit-margin-before: 0.83em !important;
        -webkit-margin-after: 0.83em !important;
        -webkit-margin-start: 0px !important;
        -webkit-margin-end: 0px !important;
        font-weight: bold !important;
        color: #18a7e9 !important;
    }
       
    </style>
    
</head>
    <body>
      
         <h2 class="center yellow-text">Administrator Login</h2>
        <div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form action="Adminpswdcheck.php" method="post">
      <div class="card-content">
        <h2 class=" card-title center">Sign In</h2>
          <center><img src="administrator.png" class="img-respnosive" height="150px"></center>
        <div class="row">
          <div class="input-field col s12">
              <i class="fa fa-user prefix grey-text"></i>
            <label for="email">Username</label>
            <input type="text" class="validate" name="usrnam" id="email" />
          </div>
          <div class="input-field col s12">
              <i class="fa fa-lock prefix grey-text"></i>
            <label for="password">Password </label>
            <input type="password" class="validate" name="psw" id="password" />
          </div>
        </div>
      </div>
     
         <div class="center">
        <input type="submit" class="btn blue" value="LOGIN">
                                </div>
    </form>
  </div>
</div>
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
    <script>
            $(document).ready(function(){
           $('select').select();
         });
    </script>
    </body>
</html>
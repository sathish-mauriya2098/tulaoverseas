<html>
<head>
    <title>ENQUIRY</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="favicon.ico" type="image" rel="icon">
    <style>
    *{
    font-family: 'Ubuntu', sans-serif;
 }
 .input-field input[type=text]:focus + label {
      color: #18a7e9 !important;
    }
    .input-field input:focus {
      border-bottom: 1px solid #18a7e9 !important;
      box-shadow: 0 1px 0 0 #18a7e9 !important;
    }
    .dropdown-content li>a, .dropdown-content li>span {
        
        color: #2e8aa0 !important;
        
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
        <div>
        <nav>
                <div class="nav-wrapper white">
                    <a href="#" class="brand-logo left"><img src="tula.jpg" alt="tulalogo" width="50px" height="50px"></a>
                    <ul id="nav-mobile" class="right">
                    <li><a href="index.php" class=" black-text"><i class="material-icons left">home</i>Home</a></li>

                    </ul>
                </div>
         </nav>
    </div>
        <div class="container">
            <div class="card hoverable">
                <div class="card-content">
                    <h2 class=" card-title center">Enquiry Form</h2>
                    <div class="row">
                        <form class="col s12" action="Enqudb.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="name" required>
                                </div>
                                <div class="input-field col s12">
                                    <label for="Mobile">Mobile no</label>
                                    <input type="text" name="mobile" required>
                                </div>
                                <div class="input-field col s12">
                                    <label for="course">Course looking for</label>
                                    <input type="text" name="course" required>
                                </div>
                                <div class="input-field col s12">
                                    <label for="country">Country looking for</label>
                                    <input type="text" name="country" required>
                                </div>
                                <div class="input-field col s12">
                                    <label for="email">Email Id</label>
                                    <input type="email" name="mail" required>
                                </div>
                                <div class="input-field col s12">
                                    <h6 class=" blue-text lighten-4">Viable time to call</h6>
                                    <select name="time">
                                        <option>--Morning--</option>
                                        <option>9:30AM-10:30AM</option>
                                        <option>10:30AM-11:30AM</option>
                                        <option>11:30AM-12:30PM</option>
                                        <option>--Afternoon--</option>
                                        <option>2:00PM-3:00PM</option>
                                        <option>3:00PM-4:00PM</option>
                                        <option>4:00PM-5:00PM</option>
                                        <option>5:00PM-6:00PM</option>
                                    </select>
                                </div>
                               <!-- <div class="input-field col s6">
                                    <h6 class=" blue-text lighten-4"></h6><br>
                                    <select name="afternoon">
                                        <option>Afternoon</option>
                                        <option>2:00PM-3:00PM</option>
                                        <option>3:00PM-4:00PM</option>
                                        <option>4:00PM-5:00PM</option>
                                        <option>5:00PM-6:00PM</option>
                                    </select>
                                </div>-->
                                
                            </div>
                            <div class="center">
                                    <input type="submit" class="btn blue" value="SUBMIT">
                                </div>
                        </form>
                    </div>
                </div>
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
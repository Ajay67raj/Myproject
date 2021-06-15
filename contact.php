<?php 

$db = mysqli_connect('localhost','root','','contact_us');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASBS Online Tiffin Services System</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/hover.css" />
  <link href="css/hover-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="icons-1.4.0/font/bootstrap-icons.css">



    <script src="custome.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <section>
    <div class="container-fluid bg">
      <div class="hr">
        <div class="row">
          <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <i class="bi bi-telephone s">+91 7219 - 446 - 042</i>
            <a href="#"><i class="bi bi-envelope s1">info.asbs@gmail.com</i></a>
          </div>
          <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 s2">
            <a class="btn btn-outline-danger" href="selectplan.html" role="button"><i class="bi bi-credit-card-2-front">Select
                Plan</i></a>
            <a class="btn btn-outline-danger" href="todaysmenu.html" role="button"><i class="bi bi-calendar3">Today's Menu</i></a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">ASBS Tiffin Servics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.html">Admin</a>
        </li><br><br>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php">Registration</a>
        </li>

      </ul>
    </div>
  </nav>



  <section>
          <div class="contact"> 
              <h2>Contact Us</h2>            
        </div>
    </section>


    <section>
        <div class="container-fluid">
            <div class="info">
               <div class="row">
                   <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12" style="background-color: #f8f8f8;">
                    <h3>Contact Adress</h3>
                    <i class="bi bi-house-door">   :-  Om Apperment,Near Karvand Naka, Shirpur 425405 </i><br><br>
                    <i class="bi bi-telephone-inbound-fill"> :- 7219446042, 8177882326</i><br><br>
                    <i class="bi bi-envelope-open">  :-  infoasbs@gmail.com</i><br><br>
                    <i class="bi bi-alarm"> :-  Open 24*7</i>
                   </div>
                   <div class="col-lg-7 col-sm-7 col-md-12 col-xs-12" align="center">
                    <h1> Any Message for us </h1>

                   <form  action="contact.php" method="POST">
                     <label for="fname">First Name</label>
                     <input type="text" name="firstname" placeholder="Your name..">
                    
                     <label for="fname">Last Name</label>
                     <input type="text" name="lastname" placeholder="Your  lastname..">

                     <label for="cont">Contact No</label>
                     <input type="text" name="cont" placeholder="Your Contact No..">
                    
                    <label for="subject">Your Massage</label>
                    <textarea id="subject" name="subject" placeholder="Write Here..." style="height:200px;"></textarea>
                    
                    <input type="submit" value="submit" name="submit"> 
                    <a class="btn btn-outline-success" href="#" role="button">Reset</a> 
                </form>
                  </div>
               </div>
            </div>
        </div>        
    </section>

    <br><br>

    <section>
        <div class="footer" align="center">
            <caption>All Copyright By ASBS @ 2021</caption>
        </div>
        </div>
    </section>


    <?php 

if(isset($_POST['submit'])) {


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cont = $_POST['cont'];
$subject = $_POST['subject'];

echo"<script>alert('$firstname, $lastname, $cont, $subject')</script>";


$insert = "insert into feedback value('$firstname','$lastname','$cont','$subject')";

$run = mysqli_query($db,$insert);

}


?>
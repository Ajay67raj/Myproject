<?php 

$db = mysqli_connect('localhost','root','','contact_us');


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <script language="javascript">

    function test()
    {
      a=document.reg.firstname.value;
      if(a=="")
      {
        alert("field should not be blank");
        
      }
      
    }
    </script>
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
            <a class="btn btn-outline-danger" href="selectplan.php" role="button"><i class="bi bi-credit-card-2-front">Select
                Plan</i></a>
            <a class="btn btn-outline-danger" href="todaysmenu.php" role="button"><i class="bi bi-calendar3">Today's Menu</i></a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">ASBS Tiffin Servics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
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
        <div class="container-fluid">
            <div class="info">
               <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <form  action="registration.php" method="POST" name="reg">
                  <h3>Registration Form</h3>

                  <h2> Your First Name is Your Username </h2>
                     <label for="fname">First Name</label>
                     <input type="text" name="firstname" placeholder="Your name.." onblur="test()">
                    
                     <label for="fname">Last Name</label>
                     <input type="text" name="lastname" placeholder="Your  lastname..">
                    
                     <label for="pass"> Password</label>                     
                     <input type="password" style="width : 100%;
                     padding: 12px;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     box-sizing: border-box;
                     margin-top: 6px;
                     margin-bottom: 16px;
                     resize: vertical;"
                      name="pass" placeholder="Your Password ..">
                                      
                     <label for="pass">Confirm Password</label>
                     <input type="password" style="width : 100%;
                     padding: 12px;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     box-sizing: border-box;
                     margin-top: 6px;
                     margin-bottom: 16px;
                     resize: vertical;"
                      name="cpass" placeholder="Retype Password ..">
                     
                     <label class="gender"> 
                         <input type="radio" name="gender" value="m" checked>
                          <span> Male </span> 
                            </label>
                     <label class="radio inline"> 
                          <input type="radio" name="gender" value="f">
                            <span>Female </span> 
                           </label><br><br>
                      </div>

                      <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">  <br><br>                         

                     <label for="email">Your Email</label>
                     <input type="text" name="email" placeholder="Enter Email.">

                     <label for="mob">Your Mobile No.</label>
                     <input type="text" name="mob" placeholder="Enter Contact No.">


                     <input type="submit" value="submit" name="submit"> 
                    
                     
                     </div>

                     <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12"></div>
                </form>
</div></div></div></div>




    <div class="footer" align="center">
      <caption>All Copyright By ASBS @ 2021</caption>
    </div>
    </div>
  </section>

  

  <?php 

if(isset($_POST['submit'])) {


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mob = $_POST['mob'];
echo"<script>alert('$firstname','$lastname', $pass, $cpass, '$gender', '$email', $mob);</script>";


$insert = "insert into register value('$firstname','$lastname', $pass, $cpass, '$gender', '$email', $mob)";

$run = mysqli_query($db,$insert);

}


?>


</body>
</html>
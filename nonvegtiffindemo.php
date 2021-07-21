



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
            <a class="btn btn-outline-danger" href="selectplan.php" role="button"><i class="bi bi-credit-card-2-front">Select
                Plan</i></a>
            <a class="btn btn-outline-danger" href="todaysmenu.php" role="button"><i class="bi bi-calendar3">Today's
                Menu</i></a>
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
    Hi User ..
                <?php 
                SESSION_start();
                echo $_SESSION['cname'];
                ?>

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
          <a class="nav-link" href="logout.php">Logout </a>
        </li>

      </ul>
    </div>
  </nav>

    <div class="container-fluid">
      <div class="colum">
        <div class="row">
        <?php
        $con=mysql_connect("localhost","root","");
        $db=mysql_selectdb("contact_us");
             $qq="select * from add_tiffin where tcategory='Nonveg'";
            $q1=mysql_query($qq,$con);
     while($rows=mysql_fetch_array($q1))
     { 
    $pid=$rows[0];
    ?>
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 b">
          
            <h3>Small Veg Tiffin</h3>
            <ul>
            <img src="http://localhost/assist/upload/<?php echo $rows[6];?>" height="200" width="300"> </img>

              <li><h2> Product ID<?php echo $rows[0];?> </h2>
                  <hr>
                </i></li>

                <li><i class="bi bi-tropical-storm"><?php echo $rows[2];?> (1)
                  <hr>
                </i></li>
              <li><i class="bi bi-tropical-storm"></i>Chapati (4)
                <hr>
              <li>
              <li style="color: red;"><i class="bi bi-tropical-storm"></i>Bhakri (2) Only On Friday
                <hr>
              </li>
              <li><i class="bi bi-tropical-storm"></i>Dal
                <hr>
              </li>
              <li><i class="bi bi-tropical-storm"></i>Pickle (Complimentary)
                <hr>
              </li>
            </ul>
            <div style="clear: both;"></div>
            <h2>5 Meals Trial : Rs. 617/-(Including DC)</h2>
            <h2>6 Meals : Rs. 741/-(Including DC)</h2>
            <h2>20 Meals : Rs. 2468/-(Including DC)</h2>
            <h2>24 Meals : Rs. 2964/-(Including DC)</h2>

             <h3>Order Time <?php echo $rows[4];?></h3>
             <?php echo "<a href='order.php?pidd=$pid'>Order Now</a>";?>
          </div>
          <?php
     }
     ?>

          
    </div>
      </div>
    </div>
  </section>

  <section>
    <div class="footer" align="center">
      <caption>All Copyright By ASBS @ 2021</caption>
    </div>
    </div>
  </section>

  </body>
  </html>
<?php 

//$db = mysqli_connect('localhost','root','','contact_us');

$con=mysql_connect("localhost","root","");
$db=mysql_selectdb("contact_us");


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
  <link rel="stylesheet" href="css/style1.css">



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
    Welcome Admin ..
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

  <section>
      <div class="upage">
          <h2><u>Welcome Admin </u></h2>
      </div>
  </section>


<div class="container-fluid">
    <div class="heding-form">
    <h3> Add Tiffin </h3>
  <form method="POST" enctype="multipart/form-data">
      <div class="input-text">
      
      <label> Tiifin Name</label> <br>
      <input type="text" placeholder="Decscription" name="tname">  <br>

      <label>Category</label><br>
      <select name="tcategory"> 
      <option value="Veg">Veg
      <option value="Nonveg">Nonveg
      </select>
      <br>
      
      <label>Quality</label><br>
      <input type="text" placeholder="choose" name="tqty"><br>
      
      <label>Order timeTime</label><br>
      <input type="time" placeholder="12:00" name="otime"><br>

      <label>Price</label> <br>
      <input type="text" placeholder="Enter Tiffin Price" name="tprice"> <br>
      <br>

      <label>Tiffin Image</label> <br>
      <input type="file" name="pimg"> <br>
      <br>

     

      <button type="submit" name="Add">Add Tiffin</button> 

    </form>
  </div>
 </div>
 
 <br>
 
 <div class="footer" align="center">
    <caption>All Copyright By ASBS @ 2021</caption>
  </div>
  </div>
</section>


<?php 

if(isset($_POST['Add'])) 
{




  $qq="select max(id) from add_tiffin order by id desc limit 1";
  $q1=mysql_query($qq,$con);
     while($rows=mysql_fetch_array($q1))
     { 
    $pid=$rows[0];
    echo "<script language='javascript'>alert ($pid);</script>";
    $pid=$pid+1;
     }
$tname = $_POST['tname'];
$tcategory = $_POST['tcategory'];
$tqty = $_POST['tqty'];
$otime = $_POST['otime'];
$tprice = $_POST['tprice'];

$path="upload/";
				$path2= $path.basename($_FILES["pimg"]['name']);
				$k1=$_FILES['pimg']['tmp_name'];
				$ext = strtolower(pathinfo($path2,PATHINFO_EXTENSION));
				$fsize=$_FILES["pimg"]['size'];
				$name=$pid;
			if((($ext=="jpg")||($ext=="jpeg"))&&($fsize<1200000))//500KB
			{										 
				if(move_uploaded_file($k1,$path.$name.".".$ext))
					{
						$k2=$name.".".$ext;
						echo "The File".$k2."uploaded Successfully";
				

            echo"<script>alert('$tname', '$tcategory', '$tqty', '$otime', '$tprice','$k2');</script>";


            $q=mysql_query("insert into add_tiffin(tname,tcategory,tqty,otime,tprice,timg)values('$tname', '$tcategory', '$tqty', '$otime', '$tprice','$k2')");

          
              if($q)
						  {
							  echo "<script language='javascript'>alert ('product added');</script>";
						  }
						  else
						  {
							  echo "<script language='javascript'>alert ('some prob');</script>";
						  }

          }
          else
					{
						echo "The File ".$k2."not uploaded Successfully";
					}
      }
      else
			{
				
				echo "Please check File format or File sizejksdjkdsjkds".$ext.$fsize.$path2;
			}	
  }

?>


</body>

</html>
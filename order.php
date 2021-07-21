<?php
$con=mysql_connect('localhost','root','');
$db=mysql_selectdb('contact_us');
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
                        <a class="btn btn-outline-danger" href="selectplan.php" role="button"><i
                                class="bi bi-credit-card-2-front">Select
                                Plan</i></a>
                        <a class="btn btn-outline-danger" href="todaysmenu.php" role="button"><i
                                class="bi bi-calendar3">Today's
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
        Hi User...
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
        <div class="heding-form">
            <h3>Tiffin Booking From</h3>

            <form name="f33" method="post" action="order.php">
                <table border="0">
                    <tr>
                        <td width="800">



                            <?php
  $a=$_GET['pidd'];
  $s=$_SESSION['cname'];
        $qq="select mob from register where firstname='$s'";
         $q1=mysql_query($qq,$con);
        while($rows=mysql_fetch_array($q1))
     { 
      $mob=$rows[0];
    ?>

                            <div class="input-text">


                                <label>Custmore Name</label><br>
                                <input type="text" placeholder="Your Full Name" name="cname" value="<?php echo $s;?>">
                                <br>
                                <label>Contact Number</label><br>
                                <input type="text" placeholder="Mobile Number" name="cmob"
                                    value="<?php echo $mob;?>"><br>

                                <label>Tiffin ID</label><br>
                                <input type="text" name="tid" value="<?php echo $a;?>"><br>

                                <?php
        
        $qq="select tprice,timg from add_tiffin where id='$a'";
         $q1=mysql_query($qq,$con);
        while($rows=mysql_fetch_array($q1))
        { 
      $tprice=$rows[0];
      
      $i=$rows[1];
       ?>

                                <label>Tiifin Price</label><br>
                                <input type="text" name="tprice" value="<?php echo $tprice;?>" id="tprice"><br>



                                <input type="checkbox" Name="yes" onclick="demo(this)" />
                                Do you want Extra items

                                <script language="javascript">
                                function demo(yes) {
                                    var dvPassport = document.getElementById("d1");
                                    dvPassport.style.display = yes.checked ? "block" : "none";
                                }
                                </script>








                                <label>Tiffin Image</label><br>
                                <input type="text" value="<?php echo $i;?>"><br>

                                <img src="http://localhost/assist/upload/<?php echo $rows[1];?>" height="200"
                                    width="300"> </img> <br>
                                <?php } ?>



                                <label>Adress</label><br>
                                <input type="text" name="cadress" placeholder="Your Adress"><br><br>

                                <input type="submit" value="submit" name="submit"> <br>


                                <?php } ?>

                        </td>
                        <td>
                            <div id="d1" style="display:none">

                                Chapati<input name=chapati type=number min=1 max=100>


                                </script>
                                <br>
                                Sabji<input name=sabji type=number min=1 max=100>


                                Total<input name=total type=text onclick="test()">
                                <script language="javascript">
                                function test() {
                                    a = document.f33.chapati.value;
                                    b = document.f33.sabji.value;

                                    j = document.f33.tprice.value;
                                    k = parseInt(j);
                                    a = a * 5;
                                    b = b * 100
                                    c = a + b + k;
                                    document.f33.total.value = c;

                                }
                                </script>

                            </div>
                        </td>
                    </tr>







            </form>
        </div>
    </div>
    </div>


    <?php 

if(isset($_POST['submit'])) {

$conn= mysql_connect('localhost','root','');

$db = mysql_selectdb('contact_us');

if($db)
{
  echo "database selected";
}
else
{
  echo "data not selected";
}


$bid = $_POST['bid'];
$cname = $_POST['cname'];
$cmob = $_POST['cmob'];
//$tname = $_POST['tname'];tid
$tid = $_POST['tid'];
//$odate = getdate();
$time_now=mktime(date('h')+5,date('i')+30,date('s'));
$dat = date('H:i:s', $time_now);

$cadress=$_POST['cadress'];


$q=mysql_query("insert into booking (cname,cmob,tid,odate,otime,cadress) values('$cname',$cmob,$tid,now(),'$dat','$cadress')");


if($q)
{
    echo "done";
}else
{

    echo "not";
}

}


?>
    <tr>
        <td colspan="2">Thank you</td>
    </tr>
    </table>


    <?php

if(isset($_POST['submit'])) {

    $conn= mysql_connect('localhost','root','');
    
    $db = mysql_selectdb('contact_us');
    
    if($db)
    {
      echo "database selected";
    }
    else
    {
      echo "data not selected";
    }
    
    
    $bid = $_POST['bid'];
    $chapati=$_POST['chapati'];
    $sabji=$_POST['sabji'];
    $total=$_POST['total'];

    $qq=mysql_query("insert into extra (chapati,sabji,total) values($chapati,$sabji,$total)");

    if($qq)
   {
  echo "insert Sucessful";
  }
   else
  {
    echo "not";
  }
}
?>



<section>
        <div class="footer" align="center">
            <caption>All Copyright By ASBS @ 2021</caption>
        </div>
    </section>
</body>

</html>
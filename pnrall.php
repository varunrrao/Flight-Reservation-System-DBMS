<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
 
 }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
		<link type="text/css" rel="stylesheet" href="css/style.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

       
        <title></title>
        
        
        
    </head>
    <body  style="background-image:url('./images/inbg.jpg');" >
	<img class="logo" src="images/nitte-airlines-logo.png"/> 
		<h1 id="title">
			Nitte Airlines
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
        <form id="index" action="pnrall.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        
                  </div>
                 </div>    
            
                <div  id="divtop">
<center>
                    
                        <br> <br><br>
                            <div id="dmain"  > 
                               <center><img src="./images/nitte-airlines-logo.png" width="500px" height="240px" style="margin-top: 10px"></align-center>
                                <br>
                                    <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 20px; margin-bottom: 15px;" placeholder="Enter your PNR Number"><br>
                                   
                                    <input type="submit" id="u_sub" name="u_sub" value="Check" class="toggle btn btn-primary" style="width:100px; margin-left: 20px; cursor: pointer;"><br>
                                   
                             </div>
                     </div>
                    </div>
               
            </div>  
            </div>
        </form>  
       </body>
</html>

<?php 
session_start();

	include("connection1.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jai Thindal Tiles</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--animated css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!--END animated css-->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <!--css-->
     <link rel="stylesheet" href="adminmain.css">
</head>
<body>
<!-- Navbar -->
<div class="navbody">
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <!-- Logo -->
        <a class="navbar-brand navbar-logo" href="index.html"><img  class="imagelog" src="img/logo.jpeg"width="28px" height="28px" style="padding-bottom: 4px;"><span style="padding-left: 12px;">Jai Thindal Tiles</span></a>
        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i style="margin-right: 10px;" class="fas fa-bars text-white"></i>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!-- For Styling -->
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <!-- Nav Links -->
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i style="margin-right: 10px;" class="fas fa-home"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">
                        <i style="margin-right: 10px;" class="fas fa-list-alt"></i>Products
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="catalogue.html">
                        <i style="margin-right: 10px;" class="fas fa-book-open"></i>Catalogue
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedbackcl.php">
                        <i style="margin-right: 10px;" class="fas fa-comment-alt"></i>Feedback
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="enquirycl.php">
                        <i style="margin-right: 10px;" class="fas fa-book-reader"></i>Enquiry
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Adduser.php">
                        <i style="margin-right: 10px;" class="fas fa-user-plus"></i>Add User
                    </a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
            <a class="navbar-brand dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fa fa-user-circle" aria-hidden="true"></i> Welcome, <?php echo $user_data['user_name']; ?>
            </a>
            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
        </ul>

    </nav>
</div>
<!-- Navbar End -->

</header>
<section class="container">  

                 
  <h1 class="text-center">Enquiry</h1>
<div class="table-responsive">

<?php
        $connection =mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"jaithindaltiles");

        $query = "SELECT * FROM enquiry";
        $query_run = mysqli_query($connection,$query);
?>
<table class="table table-striped table-hover ">


        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category</th>
            <th scope="col">Eamil</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Location</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <?php
        if($query_run)
        {
          foreach($query_run as $row)
          {
            
        ?>
        
                  <tbody>
                    <tr>
                      <td><?php echo $row['id'];       ?></td>
                      <td><?php echo $row['pname'];    ?></td>
                      <td><?php echo $row['category'];    ?></td>
                      <td><?php echo $row['email'];    ?></td>
                      <td><?php echo $row['name'];  ?></td>
                      <td><?php echo $row['phone'];   ?></td>
                      <td><?php echo $row['location'];   ?></td>
                      <td><?php echo $row['que'];   ?></td>
                    </tr>
                  </tbody>
            <?php
            }
          }
            else
            {
              $errors= "Record Not Found";
              echo '<div class="alert alert-danger">'.$errors.'</div>';
            }
            ?>  
        
</table>
</div>
</section>
 <!-- Footer -->
 <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <img src="img/logo.jpeg"width="100px" height="100px">
                <br>
                <h3 style="padding-top: 10px;">Jai Thindal Tiles</h3>
            </div>
            <div class="footer-col">
                <h4>Brands</h4>
                <div class="footer-col">
                <ul class="uli">
                    <li><a href="kagmain.html">KAG</a></li>
                    <li><a href="tectonmain.html">Tecton</a></li>
                </ul>
            </div>
            <h4 style="padding-top: 10px;">Follow us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/KAG-Exclusive-Showroom-and-Distributor-Jai-Thindal-Tiles-Erode-114417073280281/"><i class="fab fa-facebook-f"></i></a>
                    <a href="mailto:jaithindaltiles@gmail.com"><i class="fa fa-envelope"></i></a>
                    <a href="https://youtu.be/tDavRMYWviQ"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Access</h4>
                <ul class="uli">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="catalogue.html">Catalogue</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="feedback.php">Get in Touch</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Products</h4>
                <ul class="uli">
                    <li><a href="sanitarywaremain.html">Sanitaryware</a></li>
                    <li><a href="fittingsmain.html">CP Fittings</a></li>
                    <li><a href="kitchenmain.html">Kitchen Sink</a></li>
                    <li><a href="flushmain.html">Flush Tank</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <p>&copy; <script language="javascript" type="text/javascript">
          var today = new Date()
          var year = today.getFullYear()
          document.write(year)
           </script> JAI THINDAL TILES ALL RIGHTS RESERVED. Designed and developed by students</p>
      </div>
</footer>

  <a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
<script src="js/main.js"></script>
<!-- Footer End -->
			<!--script js-->
			<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
          <script src="js/script.js"></script>
          <script type="text/javascript">
          setTimeout(() =>{
              window.location.reload(true);
          },10000);
          </script>
</body>
</html>
<?php include 'connection.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jai Thindal Tiles</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpeg">

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <!-- style.css -->
    
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>

    <!-- Text Animation -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
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
                <li class="nav-item ">
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
                    <a class="nav-link" href="contact.html">
                        <i style="margin-right: 10px;" class="fas fa-map-marked-alt"></i>Contact
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="feedback.php">
                        <i style="margin-right: 10px;" class="fas fa-handshake"></i>Get in Touch
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">
                        <i style="margin-right: 10px;" class="fas fa-user-plus"></i>Admin
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Navbar End -->


<section class="feed">
    <div class="form d-block mr-auto ml-auto">
        <div class="tab-header">
          <div class="active">Feedback</div>
          <div>Enquiry</div>
        </div>
        <div class="tab-content">
          <div class="tab-body active">

            <form action="connect.php" method="POST"> 
            <div class="form-element">
              <input type="email" placeholder="Email" name="email" id="email" autocomplete="OFF">
            </div>
            <div class="form-element">
              <input type="text" placeholder="Name" name="name" id="name" autocomplete="OFF">
            </div>
            <div class="form-element">
              <input type="tel" placeholder="Phone Number" name="phone" id="phone" autocomplete="OFF">
            </div>
            <div class="form-element">
                <input type="text" placeholder="Your Location" name="location" id="location" autocomplete="OFF">
              </div>
            <div class="form-element">
                <textarea rows="3" cols="50" placeholder="Enter Your Feedback" name="feed" id="feed" autocomplete="OFF"></textarea>
            </div>
            <div class="form-element">
            <input type="submit" class="button" name="submit" id="submit" value="Submit">
            </div>
            </form>
          </div>
          
          <div class="tab-body">
          <form action="connect1.php" method="POST"> 
            <div class="form-element">
                <input type="text" placeholder="Product Name" name="pname" id="pname" autocomplete="OFF">
              </div>
              <div class="form-element">
                <input type="text" placeholder="Product Category" name="category" id="category" autocomplete="OFF">
              </div>
              <div class="form-element">
                <input type="email" placeholder="Email" name="email1" id="email1" autocomplete="OFF">
              </div>
            <div class="form-element">
              <input type="text" placeholder="Name" name="name1" id="name1" autocomplete="OFF">
            </div>
            <div class="form-element">
              <input type="tel" placeholder="Phone Number" name="phone1" id="phone1" autocomplete="OFF">
            </div>
            <div class="form-element">
                <input type="text" placeholder="Your Location" name="location1" id="location1" autocomplete="OFF">
              </div>
            <div class="form-element">
                <textarea rows="3" cols="50" placeholder="Enter your Query" name="que" id="que" autocomplete="OFF"></textarea>
            </div>
            <div class="form-element">
            <input type="submit" class="button" name="submit1" id="submit1" value="Submit">
            </div>
            </form>
          </div>
        </div>
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
<!-- Scripts -->
<!-- jquery -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- Custom Script   -->
<script src="js/script.js"></script>
<script src="js/script1.js"></script>
<script src="js/product.js"></script>
<script src="js/all.js"></script>
</script>
<script type="text/javascript">
    
let tabPanes = document.getElementsByClassName("tab-header")[0].getElementsByTagName("div");
 
 for(let i=0;i<tabPanes.length;i++){
   tabPanes[i].addEventListener("click",function(){
     document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
     tabPanes[i].classList.add("active");
     
     document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
     document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");
   });
 }
</script> 
<!--sweet Alter-->
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>   

<?php
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
              ?>
              <script>
                Swal.fire({
                position: 'center',
                icon: "<?php echo $_SESSION["status_code"];?>",
                title: "<?php echo $_SESSION["status"];?>",
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate_animated animate_fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate_animated animate_fadeOutUp'
                  }
              });
                </script>
                <?php
                unset($_SESSION['status']);
            }
            ?>
 
</body>
</html>


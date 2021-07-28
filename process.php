<?php

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $feed = $_POST['feed'];

        if(empty($email) || empty($name) || empty($phone) || empty($location) || empty($feed))
        {
            header('location:feedback.php?error');
        }
        else
        {
            $to = "rithiksadhasivam001@gmail.com";

            if(mail($to,$email,$name,$phone,$feed))
            {
                header("location:feedback.php?success");
            }
        }
    }
    else
    {
        header("location:feedback.php");
    }

?>


///////////
<hr>
            <?php 
               $feed = "";
               if(isset($_GET['error']))
               {
                 $feed = "Please Fill in the Blanks";
                 echo '<div class="alert alert-danger">'.$feed.'</div>';
               }

               if(isset($_GET['success']))
               {
                 $feed = "Your Message Has Been Sent";
                 echo '<div class="alert alert-success">'.$feed.'</div>';
               }
            ?>
<?php include 'connection.php';?>
<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $feed = $_POST['feed'];

    $query = "INSERT INTO feedback (email,name,phone,location,feed) VALUES ('$email','$name','$phone','$location','$feed')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
         
        $_SESSION['status']="Your Feedback submitted";
        $_SESSION['status_code'] ="success";
        header('Location: feedback.php');
    }
    else{
        $_SESSION['status']="Feedback Is Not Submitted";
        $_SESSION['status_code'] ="error";
        header('Location: feedback.php');

    }
}


?>
<?php include 'connection.php';?>
<?php

if(isset($_POST['submit1'])){
    $pname = $_POST['pname'];
    $category = $_POST['category'];
    $email = $_POST['email1'];
    $name = $_POST['name1'];
    $phone = $_POST['phone1'];
    $location = $_POST['location1'];
    $que = $_POST['que'];

    $query = "INSERT INTO enquiry (pname,category,email,name,phone,location,que) VALUES ('$pname','$category','$email','$name','$phone','$location','$que')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
         
        $_SESSION['status']="Your Query submitted";
        $_SESSION['status_code'] ="success";
        header('Location: feedback.php');
    }
    else{
        $_SESSION['status']="Qurey Is Not Submitted";
        $_SESSION['status_code'] ="error";
        header('Location: feedback.php');

    }
}


?>
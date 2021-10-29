<?php
    include("config.php");
    if(isset($_POST['send'])){    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = mysqli_query($conn,"INSERT INTO charity (name,email,message) VALUES ('$name','$email','$message')") ;

        if ($sql) {
            header('location: Charity.php');
        } else {
            echo "Something was wrong";
        }
    }
?>
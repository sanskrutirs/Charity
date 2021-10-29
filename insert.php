<?php
    include 'config.php';
    if(isset($_POST['next'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];

        $sql = mysqli_query($conn, "INSERT INTO payment (name,number,email) VALUES ('$name','$number','$email')");

        if ($sql) {
            header('location: https://rzp.io/l/Zziyq0EIW');
        }else{
            echo "failed" ;
        }

    }
            
?>
<?php
$dbhost='localhost:3307';
$dbname='donate_db';
$dbusername='root';
$dbpass='';

$conn=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if($conn){
   
}else{
    echo "Not connected";
}
?>
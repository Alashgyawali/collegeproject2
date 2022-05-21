<?php
session_start();
if(isset($_SESSION['client-userid'])){


    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="SELECT * FROM cart where userid='".$_SESSION['client-userid']."'";
    $result=mysqli_query($conn,$query);
    echo $result->num_rows;
}
   
?>
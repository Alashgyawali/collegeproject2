<?php
session_start();
if(isset($_SESSION['client-userid'])){


    // $conn=mysqli_connect("localhost","root","","ecommers");
    include './database.php';
    $query="SELECT * FROM cart where userid='".$_SESSION['client-userid']."'";
    // echo $query;
    $result=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($result);

  echo $rows;
    // echo "hello";
}
   
?>
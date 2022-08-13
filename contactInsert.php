<?php
    include './database.php';
   if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    //  email validate
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid Email')</script>";
        echo "<script>window.open('./contact.php','_self')</script>";
    }
    $message=$_POST['message'];
    $query="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('message sent successfully')</script>";
        ?>
        <script>
            window.location.href="./contact.php";
        </script>
        <?php
       
    }
    else{
        echo "<script>alert('message not sent')</script>";
        ?>
        <script>
            window.location.href="./contact.php";
        </script>
        <?php

    }
 }
?>
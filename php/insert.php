<?php
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $checkbox=$_POST['checkbox'];
    include '../database.php';
    $query="INSERT INTO client(clientname,email,password,cpassword,checkbox) VALUES('$name','$email','$password','$cpassword','$checkbox')";
    if($password==$cpassword){
        $run=mysqli_query($conn,$query);
        if($run){

            ?>
            <script>
                alert("Account Created Successfully");
                window.open('./login.php','_self');
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Account create failed");
                window.open('./signup.php','_self');
            </script>
            <?php

        }
        

    }else{
            ?>
            <script>
                alert("Password and Confirm Password is not Matched");
                window.open('./signup.php','_self');
            </script>
            <?php
        
    }

}else{
    echo "click the button ";
}
?>
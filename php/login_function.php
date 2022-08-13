<?php
if(isset($_POST['submit'])){
    include '../database.php';
    $username=$_POST['email'];
    //  hash verify password
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $query="SELECT * FROM client WHERE email='$username'";
    $run=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($run);
    if($rows>0){
        $row=mysqli_fetch_array($run);
        $db_password=$row['password'];
        $db_username=$row['email'];
        if(password_verify($_POST['password'],$db_password)){
            session_start();
            $_SESSION['client-userid']=$row['id'];
            $_SESSION['client-clientname']=$row['clientname'];
            $_SESSION['client-username']=$row['email'];
            $_SESSION['client-password']=$row['password'];
            $_SESSION['client-checkbox']=$row['checkbox'];
            $_SESSION['client-cpassword']=$row['cpassword'];
            echo "<script>window.open('../index.php','_self')</script>";
           
        }
        else{
            ?>
            <script>
                alert('Password Does Not Match');
                window.open('./login.php','_self');
            </script>
            <?php
        }
    }
    else{
        ?>
        <script>
            alert('User Does Not Exists');
            window.open('./login.php','_self');
        </script>
        <?php
    }

    // $password=$_POST['password'];
    // $query="SELECT * FROM client WHERE email='$username' AND password='$password' ";
    // $run=mysqli_query($conn,$query);
    // $rows=mysqli_num_rows($run);
    // if($rows>0){
    //     $data=mysqli_fetch_array($run);
    //     // echo $data['username']."/".$data['password'];
    //     session_start();   
    //     $_SESSION['client-username'] = $data['email'];  
    //     $_SESSION['client-password'] = $data['password'];  
    //     $_SESSION['client-clientname'] = $data['clientname'];  
    //     $_SESSION['quantity'] = $data['qty'];
        
    //     $_SESSION['client-userid'] = $data['id'];
        
    //     header('Location:../index.php');
    // }else{
    //     ?>
    //     <script>
    //         alert('User Not Found');
    //         window.open('./login.php','_self');
    //     </script>
    //     <?php
    // }
}  
?>
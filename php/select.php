<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","ecommers");
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $run=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($run);
    if($rows>0){
        $data=mysqli_fetch_array($run);
        // echo $data['username']."/".$data['password'];
        session_start();
        $_SESSION['username'] = $data['email'];  
        $_SESSION['password'] = $data['password'];  
        $_SESSION['adminname'] = $data['adminname']; 
        $_SESSION['userid'] = $data['id'];
        
        header('Location:./admin.php');
    }else{
        ?>
        <script>
            alert('User Not Found');
            window.open('./admin.php','_self');
        </script>
        <?php
    }
}  
?>
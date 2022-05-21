<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","ecommers");
    $username=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM client WHERE email='$username' AND password='$password' ";
    $run=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($run);
    if($rows>0){
        $data=mysqli_fetch_array($run);
        // echo $data['username']."/".$data['password'];
        session_start();

        
        $_SESSION['client-username'] = $data['email'];  
        $_SESSION['client-password'] = $data['password'];  
        $_SESSION['client-clientname'] = $data['clientname'];  
        $_SESSION['quantity'] = $data['qty'];
        
        $_SESSION['client-userid'] = $data['id'];
        
        header('Location:../index.php');
    }else{
        ?>
        <script>
            alert('User Not Found');
            window.open('../index.php','_self');
        </script>
        <?php
    }
}  
?>
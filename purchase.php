<?php
if(isset($_POST['btn']) && isset($_GET['id'])){
        session_start();

        $id = $_GET['id'];
        $qty=$_POST['quantity'];
        if($qty<=0 ){
            ?>
            <script>
                alert("Quantity must be greater than 0");
                window.open("./cart.php","_self");
            </script>
            <?php
        }
        $con = mysqli_connect("localhost", "root", "", "ecommers");
        $userid = $_SESSION['client-userid'];
       
        $username= $_SESSION['client-clientname']; 
        $query = "INSERT INTO orders VALUES(NULL,'$username','$userid','$id','$qty',NOW())";
        $run = mysqli_query($con, $query);
        $query1="DELETE FROM cart WHERE userid='$userid' AND productid='$id'";
        $run1=mysqli_query($con,$query1);
        if($run && $run1) {
            echo "<script>alert('Product Purchased SuccessFully ')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
            // echo "<script>window.open('index.php','_self')</script>";
        }
        
        
        else {
            echo "<script>alert('Product not added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    
        
        
    }
?>


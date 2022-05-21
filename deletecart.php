<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

    
    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="DELETE FROM cart WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "<script>alert(' Deleted from cart Successfully')</script>";
        ?>
        <script>
            window.open('./cart.php','_self');
        </script>
        <?php
    } else {
        echo "<script>alert('Product Not Deleted')</script>";
    }
    
     
      
}

    

?>
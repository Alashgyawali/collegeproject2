<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="DELETE FROM orders WHERE id='$id'";
    // $result=mysqli_query($conn,$query1);
    // $row=mysqli_fetch_array($result);
    $run=mysqli_query($conn,$query);
    if($run){
      
        echo "<script>alert('Product Delivered Successfully')</script>";
        ?>
        <script>
            window.open('./php/admin.php?orderDone','_self');
        </script>
        <?php
    } else {
        echo "<script>alert('Product Not Deleted')</script>";
    }
  
  
}
?>
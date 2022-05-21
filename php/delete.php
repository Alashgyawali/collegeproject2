<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="DELETE FROM product WHERE id='$id'";
    $query1="SELECT * FROM product WHERE id='$id'";
    $result=mysqli_query($conn,$query1);
    $row=mysqli_fetch_array($result);
   unlink("../dynamicImage/".$row['productImage']);

    $run=mysqli_query($conn,$query);
    if($run){
      
        echo "<script>alert('Product Deleted Successfully')</script>";
        ?>
        <script>
            window.open('./admin.php?deletesuccess','_self');
        </script>
        <?php
    } else {
        echo "<script>alert('Product Not Deleted')</script>";
    }
}

?>
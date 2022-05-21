<?php
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","ecommers");
   
    // $query1="SELECT * FROM product WHERE id='$id'";
    $query="SELECT id,productName,productPrice,productImage,productDescription FROM product WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($run);
    // $productId=$row['productid'];
    $productName=$row['productName'];
    $productPrice=$row['productPrice'];
    $productImage=$row['productImage'];
    $clientId= $_SESSION['client-userid'] ;
    $productDescription=$row['productDescription'];
    $productId=$row['id'];
    $query1="INSERT INTO cart(userid,productid,productname,productprice,productimage,productdescription) VALUES($clientId,'$productId','$productName','$productPrice','$productImage','$productDescription')";
    $run1=mysqli_query($conn,$query1);
    if($run1){
        // echo "<script>alert('Product Added to Cart Successfully')</script>";
       
        ?>
        <script>
            window.open('./index.php','_self');
        </script>
        <?php
    } else {
        echo "<script>alert('Product Not Added to Cart')</script>";
    }

    
    
    // $run=mysqli_query($conn,$query);
    // if($run){
    //     echo "<script>alert('Product Added to Cart')</script>";
    //     ?>
    //     <script>
    //         window.open('./index.php','_self');
    //     </script>
    //     <?php
    // } else {
    //     echo "<script>alert('Product Not Added to Cart')</script>";
    // }


}
?>
<?php
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    // echo $id;
    // $conn=mysqli_connect("localhost","root","","ecommers");
    include './database.php';
   
    $query2="SELECT * FROM cart WHERE productid='$id' AND userid='".$_SESSION['client-userid']."'";
    $run2=mysqli_query($conn,$query2);
    $run2rows = mysqli_num_rows($run2);
    if($run2rows > 0) {
        $query3 = "UPDATE cart SET qty=qty+1 WHERE productid='$id' AND userid='".$_SESSION['client-userid']."'";
        $run3 = mysqli_query($conn, $query3);
        if($run3){
            // echo "<script>alert('Product Added to Cart Successfully')</script>";
            
           
            ?>
            <script>
                window.open('./index.php','_self');
            </script>
            <?php
        } else {
            echo "<script>alert('Product Not Added to Cart')</script>";
        }
    }else{
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
        $productqty=1;
        $query1="INSERT INTO cart(userid,productid,qty,productname,productprice,productimage,productdescription) VALUES('$clientId','$productId','$productqty','$productName','$productPrice','$productImage','$productDescription')";
        $run1=mysqli_query($conn,$query1);
        if($run1){
            echo "<script>alert('Product Added to Cart Successfully')</script>";
           
            ?>
            <script>
                window.open('./index.php','_self');
            </script>
            <?php
        } else {
            echo "<script>alert('Product Not Added to Cart')</script>";
        }
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
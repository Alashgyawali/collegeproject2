
<?php
if(isset($_POST['update']) && isset($_GET['id'])){
    $newImage=$_FILES['newImage'];
    $id=$_GET['id'];
    $newName=$_POST['newName'];
    $newPrice=$_POST['newPrice'];
    $newDescription=$_POST['newDescription'];

    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="UPDATE product SET productName='$newName', productPrice='$newPrice', productDescription='$newDescription' productImage='$newImage'  WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "<script>alert('Product Updated Successfully')</script>";
        ?>
        <script>
            window.open('./admin.php?updatesuccess','_self');
        </script>
        <?php
    } else {
        echo "<script>alert('Product Not Updated')</script>";
    }
}
  
?>

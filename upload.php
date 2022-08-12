<?php
if(isset($_POST['btn'])){
    $file = $_FILES['file'];
    $productName=$_POST['productName'];
    $productPrice=$_POST['productPrice'];
    $productDescription=$_POST['productDescription'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 5000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'dynamicImage/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                // $conn=mysqli_connect("localhost","root","","ecommers");
                include './database.php';
                $query="INSERT INTO product(productName, productPrice,productImage, productDescription) VALUES ('$productName','$productPrice','$fileNameNew','$productDescription')";
                $run=mysqli_query($conn,$query);
                if($run){
                    echo "<script>alert('Product Added Successfully')</script>";
                    header("Location:./php/admin.php?uploadsuccess"); 
                } else {
                    echo "<script>alert('Product Not Added')</script>";
                }

            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }

    ?>
    <span>at software Engineering Classs</span>
    <?php
    
   


}

?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="SELECT * FROM product WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    $data=mysqli_fetch_array($run);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="./update_function.php?id=<?php echo $id ?>" method="POST">
           <span>NewName</span> <input type="text" value="<?php echo $data['productName']  ?>" name="newName"><br><br>
              <span>NewPrice</span> <input type="text" value="<?php echo $data['productPrice']  ?>" name="newPrice"><br><br>
                <span>NewImage</span> <input type="file" name="newImage"><br><br>
                    <span>NewDescription</span> <textarea name="newDescription" id="" cols="30" rows="10"
                    style="max-height: 50px; max-width: 100%; min-width:100px; overflow: hidden;"><?php echo $data['productDescription']  ?></textarea><br><br>
                   
                  <button name="update">update</button>
        </form>
    
</body>
</html>
<?php
?>
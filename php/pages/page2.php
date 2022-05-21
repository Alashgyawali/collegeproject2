

<div class="page2" style="display: none;">
  <span>2</span>
  <div class="formandcontent" style="display: flex; justify-content: space-around;">

    <form action="../../../collegeProject/upload.php" method="post" enctype="multipart/form-data">
  
      <div class="container" style=" width:300px; min-height: 50vh; background-color:#c7c14a; padding: 20px
         30px; border-radius: 10px; ">
        <span style="font-size: 2rem; font-weight: 500;">Add product</span>
        <br><br>
  
        productName: <input required type="text" name="productName"
          style="width: 100%; outline: none; border: none; padding: 12px; border-radius: 5px;"> <br><br>
        productPrice: <input required type="text" name="productPrice"
          style="width: 100%; outline: none; border: none; padding: 12px; border-radius: 5px;"><br><br>
        ProductImage: <input required type="file" name="file" style="
    background-color: indigo;
    color: white;
    padding: 0.5rem;
    font-family: sans-serif;
    border-radius: 0.3rem;
    cursor: pointer;
    margin-top: 1rem; width: 100%; outline: none; border: none; padding: 12px; border-radius: 5px;
  ">
        productDescription: <textarea name="productDescription" id="" cols="30" rows="10"
          style="max-height: 50px; max-width: 100%; min-width:100px; overflow: hidden;"></textarea>
  
        <input required type="submit" name="btn" value="Upload" style="
    background-color: indigo;
    color: white;
    padding: 0.5rem;
    font-family: sans-serif;
    border-radius: 0.3rem;
    cursor: pointer;
    margin-top: 1rem; 
    width: 100%; outline: none; border: none; padding: 12px; border-radius: 5px;
    background-color:rgb(255, 63, 64);
  ">
  
      </div>
    </form>
    <div class="lists">
        <table border="1" style="width: 900px; " > 
            <tr  style="font-size: 1.2rem; background-color: gray;" >
                <th style="background-color: gray;">ProductId</th>
                <th style="background-color: gray;">Product Name</th>
                <th style="background-color: gray;" >Product Price</th>
                <th style="background-color: gray;">Product Image</th>
                <th style="background-color: gray;">Product Description</th>
                <th style="background-color: gray;">Actions</th>
            </tr>
            <?php
            $conn=mysqli_connect("localhost","root","","ecommers");
            $query="SELECT * FROM product";
            $run=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($run)){
                ?>
            <tr style="background-color: #99943f;">
              <td><?php echo $data['id'];?></td>
              <td><?php echo $data['productName']; ?></td>
              <td><?php echo $data['productPrice']."$" ; ?></td>
              <td><img src="../../../collegeProject/dynamicImage/<?php echo $data['productImage']; ?>" alt="" style="width: 100px; height: 100px;"></td>
              <td><?php echo $data['productDescription']; ?></td>
                <td> <?php 
                
              ?>
              <button style="width: 100%; background-color: red;  padding: 5px 8px;">

              <?php
              echo "<a  href='../../../collegeProject/php/delete.php?id=".$data['id']."' style='color: #fff;  text-decoration: none;'>Delete</a>";
                
              ?>
            </button>
            <button style="width: 100%; background-color: #67EEA1; text-decoration: none; padding: 5px 8px;" >

              <?php
              echo "<a href='../../../collegeProject/php/update.php?id=".$data['id']."' style='color: #fff;  text-decoration: none;'>Update</a>";
              ?>
              </button>
          
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
  </div>


</div>
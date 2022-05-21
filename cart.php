<?php
?>
<!--  icons cout -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-color: #67EEA1;
        padding: 20px 30px;
    }
    td, th{
        border: 1px solid black;
    }
    button{
        width: 100%;
        padding: 8px 18px;
        
    }
    .delete{
        background-color: red;
        width:100%;
        color: #FDF7F0;
    }
    .buynow{
        background-color: #67EEA1;
         color: #FDF7F0;
    }
    .back{
        width: 250px;
       
        font-size: 28px;
        color: none;
        text-decoration: none;
        border-radius: 8px 10px;
        cursor: pointer;
        background-color: gold;
        padding: 6px 30px;

        width:150px !important;
    }
    .margin{
        padding: 10px 15px;
        margin:10px 0;
    }
    button{
        cursor: pointer;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    
   
</style>
<?php

session_start();
if(isset($_SESSION['client-userid'])){


    $conn=mysqli_connect("localhost","root","","ecommers");
    $query="SELECT * FROM cart where userid='".$_SESSION['client-userid']."'";
    $run=mysqli_query($conn,$query);
    // $rows=mysqli_num_rows($run);
    // $data=mysqli_fetch_array($run);
    if($run){
       ?>
        <div class="margin">
        <a class="back" href="./index.php"><i class="uil uil-angle-left-b"></i></a>

        </div>
                  
        
         
       <table style="border: 1px solid black;">
              <tr style="border: 1px solid black;">
                <th>Product id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th colspan=""> Product Description</th>
                <th colspan="2"> Actions</th>
              </tr>
              <?php
              while($data=mysqli_fetch_array($run)){
                ?>
               
                <tr >
                    <td><?php echo $data['productid']; ?></td>

                     <td><?php echo $data['productname']; ?></td>
                     <td><?php echo $data['productprice']; ?></td>
                        <td>
                            <img src="./dynamicImage/<?php echo $data['productimage'] ?>" width="100px" height="100px">
                        </td>
                     <td><?php echo $data['productdescription']; ?></td>
                        <td>
                            <a href="./deletecart.php?id=<?php echo $data['id'] ?>"><button class="delete">Delete</button></a>
                        </td>
                        
                        <br>
                        <td>
                            <a href="./buynow.php?id=<?php echo $data['productid']?>"><button class="buynow">Buynow</button></a>
                            
                        </td>
                       
                </tr>
                <?php
              }
              ?>
       </table>
       <?php
    }
}else{
    
    ?>
    <script>
        confirm("You need to login first cheater");
        window.open('./ecommers.php','_self');
    </script>
    <?php
}


?>
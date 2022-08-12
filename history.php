<?php
?>
<style>
table{
  width: 100%;
  border-collapse: collapse;
  text-align: center;
  border: 1px solid black;
}
table th{
    background-color: gray;
    border: 1px solid black;
}
table td{
    border: 1px solid black;
    background-color: green;

}
tr{
    background-color: green;
}




</style>
<table>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Product ID</th>
                <th>quantity</th>
                <th>Date</th>
                
                
            </tr>
<?php
        session_start();
        if( $_SESSION['client-userid']){
            $id= $_SESSION['client-userid'];
            // $conn=mysqli_connect("localhost","root","","ecommers");
            include './database.php';
            $query="SELECT * FROM orders WHERE userid='$id'";
            $run=mysqli_query($conn,$query);
            ?>
           
            <?php
            while($data=mysqli_fetch_array($run)){
        
 ?>
 
       
        <tr>
            <td><?php echo $data['userid']; ?></td>
            <td><?php echo  $data['name']; ?></td>
            <td><?php echo $data['productid']; ?></td>
            <td><?php echo $data['qty']; ?></td>
            <td><?php echo $data['time']; ?></td>
           
        </tr>

        <?php
    
}
}
else{
    echo "you are not logged in";
}
?>

</table>




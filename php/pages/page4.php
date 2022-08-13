<div class="page4" style="display: none;">
        <span>4</span>
        <table>
          <tr>
          <th>id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
        </tr>
        <?php
    include '../database.php';
    $query="SELECT * FROM `contact`";
    $result=mysqli_query($conn,$query);
    if($result){
        while($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['message']; ?></td>
          </tr>
          
          <?php
        }
      }
      ?>

</table>
</div>
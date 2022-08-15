
<div class="page6" style="display: none;">
        <span>6</span>
        <table>
          <tr>
            <th>id</th>
            <th>clientName</th>
            <th>Email</th>
            <th>Password</th>
            
          </tr>

          
          <?php
      include '../database.php';
      $query="SELECT * FROM client";
      $run=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($run)){
          $id=$row['id'];
          $clientName=$row['clientname'];
          $email=$row['email'];
          $password=$row['password'];
          ?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $clientName; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            
          </tr>
          <?php
      }
      ?>


</div>
</table>
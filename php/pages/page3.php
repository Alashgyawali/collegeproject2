<?php
?>
<div class="page3" style="display: none;">
        <!-- <span>3</span>
 <span>hellos</span> -->
 <?php
        $con = mysqli_connect("localhost", "root", "", "ecommers");
        $query = "SELECT * FROM orders";
        $run = mysqli_query($con, $query);
        ?>
        <style>
                .table{
                        display: flex;
                        justify-content: center;
                        flex-wrap: wrap;
                        width: 100%;
                        align-items: center;

                }
                table,tr{
                        
                        border: 1px solid black;
                        width: 100%;
                        border-collapse: collapse;
                        text-align: center;
                }
                tr:first-child{
                        background-color: gray !important;
                }
               table td{
                       background-color: #FDF7F0;
               }
               button{
                       width: 100%;
                       padding: 5px 8px;
                       color: #FDF7F0;
               background-color: #67EEA1;
               cursor: pointer;
               }
        </style>
        <div class="table">

                <table>
                        <tr>
                               
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>Product ID</th>
                                <th>quantity</th>
                                <th>Date</th>
                                <th>status</th>
                        </tr>

                        <?php
                        while($data = mysqli_fetch_array($run)) {
                            
                                ?>
                                <tr>
                                
                                <td><?php echo $data['userid']; ?></td>
                                <td><?php echo  $data['name']; ?></td>
                                <td><?php echo $data['productid']; ?></td>
                                <td><?php echo $data['qty']; ?></td>
                                <td><?php echo $data['time']; ?></td>
                                <td>
                                        <?php
                                echo "<a href='../../../collegeProject/deleteorder.php?id=".$data['id']."' style='color: red;'><button >Approve</button></a>";
                                        ?>

                                </td>
                                        
                               
                                <?php
                              
                              
                        }
                        ?>
                </table>
        </div>
    
 
 </div>


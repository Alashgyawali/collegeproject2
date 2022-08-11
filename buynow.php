<?php
?>
<style>
    .main{
        width: 800px;
        display: flex;
        justify-content: center;
    }

    form{
        /* background-color: red; */
        width: 500px !important;
        height: 80% !important;
        padding: 10px 20px;
        /* width: 26.5%; */
        margin-top: 10px;
        /* border: 2px solid black; */
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        /* overflow: hidden; */
    }
    table{
        border: 1px solid black !important;
    }
    table tr{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-top: 8px;
    }
    img{
        width: 50%;
    }
    .last{
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
   
   .last input{
       padding: 8px 12px;
       margin-top: 15px;
       width: 100%;
   }
   h1, h3 , p{
       font-size:15px;
   }
   button{
         width: 100%;
         padding: 8px 12px;
         margin-top: 15px;
         background-color: #67EEA1;
         color: #FDF7F0;
   }
   @media screen and (min-width:800px
   ){

    .main{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        /* background-color: red; */
        align-items: center;
    }
    .first{
        width: 100% !important;
        height: 80% !important;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    span{font-weight:600 ; font-size:1.2rem ;}
    .main form{
        width: 50%;
        height: 50%;
        display:flex;
        flex-direction: column;
    }
    .main form img{
        width: 300px;
        height: 300px;
    }


}


  
   
</style>
           
          <?php
          if(isset($_GET['id'])){
              $id=$_GET['id'];
              
              $conn=mysqli_connect("localhost","root","","ecommers");
              $query="SELECT * FROM product WHERE id='$id'";
              $run=mysqli_query($conn,$query);
              $data=mysqli_fetch_array($run);
              

                  ?>
                
                  <?php
                  ?>
                  <div class="main">

                      <form action="./purchase.php?id=<?php echo $data['id'] ?>" method="POST">
                      <div class="first">
    
                            <span>ProductID:</span>
                            <?php
                            echo $data['id'];
                            ?>
                            <br><br>
                            <span>productName</span>
                            <?php
                                echo $data['productName'];
                                ?>
                                <br><br>
                                <span>productPrice</span>
                                <?php
                                echo $data['productPrice'];
                                ?>
                                <br><br>
                                <span>productImage</span>
                                <?php
                                echo "<img src='./dynamicImage/".$data['productImage']."' alt=''>";
                                ?>
                                <br><br>
                                <span>productDescription</span>
                                <?php
                                echo $data['productDescription'];
                                ?>
                        </div>
    
                          
                      
                                <div class="last">
    
                                    <span>qty</span> <input type="number" name="quantity" min="1" max="5" onfocus="this.parentNode.children[2].value = new Date().toLocaleString()">
                                    <input type="text" hidden name="date"  value="">
                                    <button name="btn">Buynow</button>
                          </div>
                        </form>
                  </div>
                  
                 <?php


              

          }
          ?>
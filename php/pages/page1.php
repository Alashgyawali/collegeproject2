<?php
include '../database.php';
$query='SELECT * FROM `orders`';
$result=mysqli_query($conn,$query);
if($result){
    $row=mysqli_num_rows($result);
   
    

    }
  
  ?>


<div class="page1">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Order</div>
              <div class="number"> <?php echo $row; ?> </div>

            </div>
            <i class='bx bx-cart-alt cart'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Sales</div>
              <div class="number"><?php echo $row*2000 .'Rs';?></div>

            </div>
            <i class='bx bxs-cart-add cart two' ></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Profit</div>
              <div class="number">10$</div>

            </div>
            <i class='bx bx-cart cart three' ></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Return</div>
              <div class="number">0</div>

            </div>
            <i class='bx bxs-cart-download cart four' ></i>
          </div>
        </div>

        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Recent Sales</div>
            <div class="sales-details">
              <ul class="details">
                <li class="topic">Date</li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>

              </ul>
              <ul class="details">
              <li class="topic">Customer</li>
              <li><a href="#">kunal Shah</a></li>
              <li><a href="#">Alash Gyawali</a></li>
              <li><a href="#">Sagar Rajput</a></li>

            </ul>
            <ul class="details">
              <li class="topic">Sales</li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">delivered</a></li>

            </ul>
            <ul class="details">
              <li class="topic">Total</li>
              <li><a href="#">3000Rs</a></li>
              <li><a href="#">1500Rs</a></li>
              <li><a href="#">3000Rs</a></li>

            </ul>
            </div>
            <div class="button">
              <a href="#">See All</a>
            </div>
          </div>
          <div class="top-sales box">
            <div class="title">Top Seling Product</div>
            <ul class="top-sales-details">
            <li>
              <a href="#">
                <!--<img src="images/bag.jpg" alt="">-->
                <span class="product">VIRAT BAG </span>
              </a>
              <span class="price">3000Rs</span>
            <li>
              <a href="#">
                <!--<img src="images/addidas.jpg" alt="">-->
                <span class="product">BABY DRESS</span>
              </a>
              <span class="price">1500Rs</span>
            </li>
            <li>
              <a href="#">
              <!--<img src="images/shirt.jpg" alt="">-->
                <span class="product">TRACK SUIT</span>
              </a>
              <span class="price">3000Rs</span>
            </li>
            </ul>
          </div>
        </div>
      </div>
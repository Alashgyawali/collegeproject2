<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- linkCss -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/footerImport.css">
    <!-- link google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- linkFontAwsome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">


</head>

<body>
    <div class="main">
        <div class="wrapper">
            <div class="logoNav">
                <div class="logo">
                    <div class="photo">
                        <img src="./assets/image/football.jpg" alt="">
                    </div>
                </div>
                <div class="navi">
                    <ul class="menu">
                        <li><a href="ecommers.php">Home</a></li>
                        <!-- <li class="dropdown">
                            <a href="#">
                                Categories

                            </a>

                            <ul class="dropdownMenu">
                                <li><a href="#">Electronic</a></li>
                                <li><a href="#">Clothes</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>

                        </li> -->
                        <!-- <li class="dropdown"><a href="#">Brands</a>
                            <ul class="dropdownMenu">

                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Samsungs</a></li>
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Nike</a></li>

                            </ul>
                        </li> -->
                        <li class="dropdown"><a href="#">Gender</a>
                            <ul class="dropdownMenu">
                                <li><a href="#">Male</a></li>
                                <li><a href="#">Female</a></li>



                            </ul>
                        </li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li sty><a href="./php/login.php">login</a></li>

                    </ul>

                </div>
                <!-- <form action="./php/logoutclient.php" method="POST">

                    <div class="signIN" style="display: flex; width:100px; justify-content: space-around;">
                         <button name="btn">
                           
                            <li><a href="./php/login.php"><i class='bx bx-log-out'></i>Signout</a></li></button>
                           
    
                    </div>
                </form> -->


            </div>
            <form action="" method="get">

                <div class="search">
                    <div class="input">
                        <input type="search" placeholder="Enter a product Name" name="keywords">
    
                    </div>
                    <div class="iconSearch">
                        <i class="fas fa-search"></i>
                        <button>Search</button>
                    </div>
                </div>
            </form>
            <div class="newProduct">
                <span>Top Product</span>
            </div>


            <!--  dynamic -->
            <div class="cards">
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "ecommers");
                    if(isset($_GET['keywords'])) {
                        $keyword = $_GET['keywords'];
                        $query = "SELECT * FROM product WHERE productName='$keyword' OR id='$keyword' OR productPrice='$keyword' ";
                    }else {
                        $query = "SELECT * FROM product";
                    }
                    // $query="SELECT * FROM product";
                    $run=mysqli_query($conn,$query);
                    if($num=mysqli_num_rows($run)>0){
                        
                        while($row=mysqli_fetch_array($run)){
                 ?>
                <div class="card">
                    <div class="img">

                        <?php echo "<img src='./dynamicImage/".$row['productImage']."'>" ?>
                    </div>
                    <div class="description" name="shirt">
                        <div>
                            <div class="name">
                                <span name="productName"><?php echo $row['productName'] ?></span>
                            </div>
                            <div class="details">
                                <span><?php echo $row['productDescription'] ?></span>
                            </div>
                            <div class="price">
                                <span name="productPrice"><?php echo $row['productPrice']."Rs" ?></span>
                            </div>
                            <div class="ratings">
                                <span>Ratings:</span>
                                <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <div class="button">
                            <button >

                                <a name="btn" href="./loginFirst.php    "> add to cart</a>
                            </button>
                        </div>
                    </div>
                </div>
                <br><br>

                <?php
                        }
                    }else{
                        echo "<No result found on that address";
                        echo "<Hey guys Whats upp";
                        ?>
                <!-- <div class="hotDeals"> -->


                <div class="left">
                    <div class="img">

                        <img src="./assets/image/laptop.jpg" alt="">
                    </div>
                    <div class="description">
                        <div class="name">
                            <span>ONE PIECE</span>
                        </div>
                        <div class="details">
                            <span>Only you can purchase this.This dress is only suits on you.Hey beautiful Lady</span>
                        </div>
                        <div class="price">
                            <span>50$</span>
                        </div>
                        <div class="ratings">
                            <span>Ratings:</span>
                            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </div>
                        <div class="button">
                            <button >

                                <a name="btn" href="./loginFirst.php"> add to cart</a>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="right">
                    <div class="img">

                        <img src="./assets/image/mobile.jpg" alt="">
                    </div>
                    <div class="description">
                        <div class="name">
                            <span>ONE PIECE</span>
                        </div>
                        <div class="details">
                            <span>Only you can purchase this.This dress is only suits on you.Hey beautiful Lady</span>
                        </div>
                        <div class="price">
                            <span>50$</span>
                        </div>
                        <div class="ratings">
                            <span>Ratings:</span>
                            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </div>
                        <div class="button">
                            <button >

                                <a name="btn" href="./loginFirst.php"> add to cart</a>
                            </button>
                        </div>
                    </div>



                    <?php
                    }
                  

                    ?>
                </div>


            </div>

            <div class="hotDeals">


                <div class="left">
                    <div class="img">

                        <img src="./assets/image/laptop.jpg" alt="">
                    </div>
                    <div class="description">
                        <div class="name">
                            <span>ONE PIECE</span>
                        </div>
                        <div class="details">
                            <span>Only you can purchase this.This dress is only suits on you.Hey beautiful Lady</span>
                        </div>
                        <div class="price">
                            <span>50$</span>
                        </div>
                        <div class="ratings">
                            <span>Ratings:</span>
                            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </div>
                        <div class="button">
                            <button>Buy Now</button>
                        </div>
                    </div>

                </div>
                <div class="right">
                    <div class="img">

                        <img src="./assets/image/mobile.jpg" alt="">
                    </div>
                    <div class="description">
                        <div class="name">
                            <span>ONE PIECE</span>
                        </div>
                        <div class="details">
                            <span>Only you can purchase this.This dress is only suits on you.Hey beautiful Lady</span>
                        </div>
                        <div class="price">
                            <span>50$</span>
                        </div>
                        <div class="ratings">
                            <span>Ratings:</span>
                            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </div>
                        <div class="button">
                            <button>Buy Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fas fa-shopping-cart"></i>
          <span class="logo_name">EcommersNepal</span>
        </div>
        <div class="media-icons">
          <a href="https://www.facebook.com/alash.gyawali.1/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/alas_hgyawali"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/alash_gyawali/"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        
        
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Brands</li>
          <li><a href="#">Apple</a></li>
          <li><a href="#">Samsung</a></li>
          <li><a href="#">Addidas</a></li>
          <li><a href="#">Nike</a></li>
        </ul>
    
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">Ecommerce.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
</body>

</html>
<?php
?>
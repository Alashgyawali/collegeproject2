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
                        <li class="dropdown">
                            <a href="#">
                                Categories

                            </a>

                            <ul class="dropdownMenu">
                                <li><a href="#">Electronic</a></li>
                                <li><a href="#">Clothes</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>

                        </li>
                        <li class="dropdown"><a href="#">Brands</a>
                            <ul class="dropdownMenu">

                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Samsungs</a></li>
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Nike</a></li>

                            </ul>
                        </li>
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
            <!--static  -->
            <!-- <div class="cards">
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/menfashion.png" alt="" name="productImage">
                    </div>
                    <div class="description" name="shirt">
                        <div>
                            <div class="name">
                                <span  name="productName" >SHIRT</span>
                            </div>
                            <div class="details">
                                <span>This is the Branded Shirt Only Wealthy people can Affords</span>
                            </div>
                            <div class="price">
                                <span name="productPrice">50Rs</span>
                            </div>
                            <div class="ratings">
                                <span>Ratings:</span>
                                <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <div class="button">
                            <button name="btn">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/BagsVirat.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>VIRAT BAG</span>
                            </div>
                            <div class="details">
                                <span>This is the Branded Bag Only Wealthy people can Affords</span>
                            </div>
                            <div class="price">
                                <span>30Rs</span>
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
                
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/BlackTshirt.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>BLACK T-SHIRT</span>
                            </div>
                            <div class="details">
                                <span>This is the Branded BlackTshirt.Hello</span>
                            </div>
                            <div class="price">
                                <span>10</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/cosmeticItems.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>COSMETIC COMBO</span>
                            </div>
                            <div class="details">
                                <span>These are the branded cosmeticItems</span>
                            </div>
                            <div class="price">
                                <span>200$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/funnyTshirt.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>FUNNY T-SHIRT </span>
                            </div>
                            <div class="details">
                                <span>This is the Branded funnyTshirt.Hy Guys</span>
                            </div>
                            <div class="price">
                                <span>10$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/furnitures.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>Furnitures</span>
                            </div>
                            <div class="details">
                                <span>These are the Branded furnitures Items</span>
                            </div>
                            <div class="price">
                                <span>60$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/kurta.webp" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>KURTA</span>
                            </div>
                            <div class="details">
                                <span>Whoever wear this will be look exactly like an anzel</span>
                            </div>
                            <div class="price">
                                <span>80$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/laptop.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>LAPTOP</span>
                            </div>
                            <div class="details">
                                <span>To become a programmer you just have to buy this laptop</span>
                            </div>
                            <div class="price">
                                <span>900$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/miniDress.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>BABY DRESS</span>
                            </div>
                            <div class="details">
                                <span>Only a beautiful parents can gift this to their daughter.</span>
                            </div>
                            <div class="price">
                                <span>15$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/mobile.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>MOBILE</span>
                            </div>
                            <div class="details">
                                <span>Gift this to your old parents and let them feels a heaven</span>
                            </div>
                            <div class="price">
                                <span>150$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/pants.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>PANTS</span>
                            </div>
                            <div class="details">
                                <span>This is the pant which have already been worn by SalmanKhan</span>
                            </div>
                            <div class="price">
                                <span>20$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/pinkTshirt.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>PINK T-SHIRT</span>
                            </div>
                            <div class="details">
                                <span>Dear girls this is gonna be  your favourite and your bf's worst T-shirt</span>
                            </div>
                            <div class="price">
                                <span>8$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/shyblueShirts.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>SKY BLUE</span>
                            </div>
                            <div class="details">
                                <span>Hello,This is for a loyal boy.  you can't order this.This is only for me</span>
                            </div>
                            <div class="price">
                                <span>10$</span>
                            </div>
                            <div class="ratings">
                                <span>Ratings:</span>
                                <span><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </div>
                        <div class="button">
                            <button>Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/Tracksuit.jpg" alt="">
                    </div>
                    <div class="description">
                            <div class="name">
                                <span>TRACK SUIT</span>
                            </div>
                            <div class="details">
                                <span>Inorder to make your body as fit as mine all you have to do is,  just click on buy now</span>
                            </div>
                            <div class="price">
                                <span>30$</span>
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
                <div class="card">
                    <div class="img">
                        <img src="./assets/image/womenDress.jpg" alt="">
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
                
            </div> -->

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
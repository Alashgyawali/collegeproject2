<?php
session_start();
if (!isset($_SESSION['client-username']) || !isset($_SESSION['client-password'])) {
    header('Location:./php/login.php');
}
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- linkFontAwsome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <!-- link uniicon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
        .mobileMenu{
            /* display: none; */
        }
      html, body{
            overflow-x: hidden !important;
            /* background-color: red; */
        }
        .btn {
            background-color: #f5f5f5;
            border: 1px solid #f5f5f5;
            color: #000;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.5s;
            font-size: 20px;
        }

        .signIn {
            background-color: #f5f5f5;
            border: 1px solid #f5f5f5;
            color: #000;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.5s;
            margin-right: 50px;
        }

        .uil {
            color: #D2691E;
            font-size: 38px;
            margin-right: 10px;
        }

        .uil-hover {
            background-color: gold;
            color: gold !important;
        }

        /* copied */
        .mmenus .burger .line1,
        .mmenus .burger .line2,
        .mmenus .burger .line3 {
            width: 30px;
            height: 3px;
            background-color: black;
            margin: 5px 0;
            transition: all 0.3s ease-in-out;
        }

        .mmenus {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            height: 50px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #e5e5e5;
        }

        .mmenus .mlists {
            width: calc(100% - 150px);
        }

        .mmenus .burger {
            display: none;
            width: 50px;
        }

        .mwrapper {
            width: 100%;
            height: 100vh;
            padding: 4px 6px;
            margin: 2px 4px;
        }

        .mwrapper ul {
            display: flex;
            justify-content: space-around;
            list-style: none;
        }

        .mwrapper ul li {
            font-size: 22px;
        }

        .mwrapper ul {
            display: flex;
            justify-content: space-between;
        }

        .mmobile {
            display: none;
        }

       
    </style>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .header{
        position: relative;
    }
    .header .nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #FDF7F0;
        padding: 8px 30px;
        border-radius: 10px;
        /* margin-top: 10px; */
    }
      .nav .burger .line1, .nav .burger .line2, .nav .burger .line3 {
        width: 30px;
        height: 3px;
        background-color:black;
        margin: 5px 0;
        transition: all 0.3s ease-in-out;
    }
   .header img{
        width:60px;
        height:60px;
        border-radius: 50%;
    }
    /* .menu{
        width: 40%;
    }
    .menu ul{
        list-style: none;
        display: flex;
        justify-content: space-between;
    } */
    
    .burger{
        display: none;
    }
    @media screen and (min-width:900px){
        .mobileMenu{
            display: none;
        }
        
    }
    @media screen and (max-width: 900px){
        .header img{
        width:40px;
        height:40px;
        border-radius: 50%;
        object-fit: cover;
    }
        .burger{
            display: block;
        }
        .search{
            display: flex !important;
            justify-content: space-around !important;
            /* flex-direction:  !important; */
            padding:20px 0px !important;
            /* background-color: red; */
            width: 100% !important;

        }
        .search .input{
            width:80%;
        }
        .search .input input{
            width: 80%!important;
            height: 40px !important;
            border-radius: 5px !important;
            border: 1px solid #e5e5e5 !important; ;
            padding: 0 10px !important;
            font-size: 14px !important;
            margin-right: 10px !important;
        }
        .search .searchicon{
            width: 20px; !important;
            height: 30px !important;
            border-radius: 50% !important;
            background-color: #e5e5e5 !important;
            margin-right: 10px !important;
            cursor: pointer !important;
        }
        .menu{
            display: none;
        }
        .mobileMenu{
            position: absolute;
            right: 0;
            height: 100vh;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            transform: translateX(100%);
            width: 50%;
            z-index: 1000;

        }
        .mobileMenu.active{
            transform: translateX(0) !important;
        }
        .mobileMenu ul{
            background-color: #FDF7F0;
            list-style: none;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
            height:100%;
            width: 100%;
           
           
        }
        .search{
            padding: 20px;
            width: 100px;
        }
       .form button{
        background-color: #FDF7F0;
        border: 1px solid #FDF7F0;
        color: #000;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        transition: 0.5s;
        font-size: 10px !important;
       }

    }
    .form button{
        background-color: #FDF7F0;
        border: 1px solid #FDF7F0;
        color: #000;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        transition: 0.5s;
        font-size: 20px;
    }
    
        
    
</style>
</head>

<body>
    <div class="header">
        <div class="nav">
            <div class="logo">
            <img src="./assets/image/football.jpg" alt="">
            </div>
            <div class="navi">
            <ul class="menu">
                            <li><a href="./index.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#">
                                    dummy

                                </a>

                                <ul class="dropdownMenu">
                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy</a></li>
                                </ul>

                            </li>
                            <li class="dropdown"><a href="#">dummy</a>
                                <ul class="dropdownMenu">

                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy
                                        
                                    </a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">dummy
                            </a>
                                <ul class="dropdownMenu">
                                    <li><a href="#">dummy</a></li>
                                    <li><a href="#">dummy</a></li>



                                </ul>
                            </li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li > <a href="./cart.php?id=<?php echo $_SESSION['client-clientname'] ?>">
                            <i  id="notification" class="uil uil-shopping-cart-alt">

                                </i>
                                <span id="count" class="badge badge-danger"></span>


                        </a></li>

                        </ul>
            </div>
            <div class="profile">
            <div class="form">
                <form name="formFirst" action="./php/logoutclient.php" method="POST">
                    <div class="signIn">
                        <button class="btn" name="btn"><?php echo "Welcome!".$_SESSION['client-clientname'] ?>
                            <li><a href="./php/login.php"><i class='bx bx-log-out'></i>Signout</a></li>
                        </button>
                    </div>
                </form>
            </div>
            </div>
            <div class="burger" onclick="document.querySelector('.header .mobileMenu').classList.toggle('active')">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
        <div class="mobileMenu">
             <ul>
                <li><a href="./index.php">Home</a>
                <li><a href="./cart.php?id=<?php echo $_SESSION['client-clientname'] ?>"><i class="uil uil-shopping-cart-alt"></i></a></li>
                <li><a href="#">Gender</a>
                <li><a href="#">Brands</a>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
             </ul>
        </div>
    </div>
    <form action="index.php" method="get">
        
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



                <div class="cards">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "ecommers");
                    if (isset($_GET['keywords'])) {
                        $keyword = $_GET['keywords'];
                        $query = "SELECT * FROM product WHERE productName='$keyword' OR id='$keyword' OR productPrice='$keyword' ";
                    } else {
                        $query = "SELECT * FROM product";
                    }
                    // $query="SELECT * FROM product";
                    $run = mysqli_query($conn, $query);
                    if ($num = mysqli_num_rows($run) > 0) {

                        while ($row = mysqli_fetch_array($run)) {
                    ?>
                            <div class="card">
                                <div class="img">

                                    <?php echo "<img src='./dynamicImage/" . $row['productImage'] . "'>" ?>
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
                                            <span name="productPrice"><?php echo $row['productPrice'] . "Rs" ?></span>
                                        </div>
                                        <div class="ratings">
                                            <span>Ratings:</span>
                                            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="button">
                                        <button>

                                            <a name="btn" href='./addtocart.php?id=<?php echo $row['id'] ?>'> add to cart</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                        <?php
                        }
                    } else {
                        echo "<No result found on that address";
                        echo "<Hey guys Whats upp";
                        ?>
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
                                        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="button">
                                        <button>

                                            <a name="btn" href='./addtocart.php?id=<?php echo $row['id'] ?>'> add to cart</a>
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
                                        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="button">
                                        <button>

                                            <a name="btn" href='./addtocart.php?id=<?php echo $row['id'] ?>'> add to cart</a>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php
                    }


                    ?>
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
          <li><a href="./history.php">History</a></li>
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
     <script>
      
        
         function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
                document.getElementById("count").innerHTML = this.responseText;
            }
        xhttp.open("GET", "countnotification.php", true);
        xhttp.send();
        }
    // loadDoc();
    setInterval(loadDoc(), 1000);
    
     </script>

    
</body>
</html>

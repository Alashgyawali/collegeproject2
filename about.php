<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/footerImport.css">
        <!-- linkFontAwsome -->
        <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <!-- link uniicon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        /*  for nav  */
    @import url('./assets/css/index.css');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .container{
            padding: 20px 15px;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
        }
        .thoughtOne{
            width: 100%;
            /* height: 100%; */
            display: flex;
            /* flex-direction: column; */
            justify-content: space-around;
            align-items: center;

        }
        .thoughtTwo{
            width: 100%;
            /* height: 100%; */
            display: flex;
            /* flex-direction: column; */
            justify-content: space-around;
            flex-direction: row-reverse;
            align-items: center;

        }
        .thoughtTwo .image{
            /* border: 2px solid black; */
            width: 30%;
            /* height: 100%; */
            display: flex;
            /* flex-direction: column; */
            justify-content: space-around;
            align-items: center;
        }
        .thoughtOne .image{
            /* border: 2px solid black; */
            width: 70%;
            /* height: 100%; */
            display: flex;
            /* flex-direction: column; */
            justify-content: space-around;
            align-items: center;
        }   
        .thoughtOne .text, .thoughtTwo .text{
            padding: 30px;
            /* border: 2px solid black; */
            width: 65%;
            /* height: 100%; */
            display: flex;
            /* flex-direction: column; */
            justify-content: space-around;
            align-items: center;
        }
        .thoughtOne .text h1, .thoughtTwo .text h1{
            font-size: 20px;
            font-weight: 600;
            /* color: red; */
        }
        .thoughtOne .text, .thoughtTwo .text{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .thoughtOne .text span, .thoughtTwo .text span{
            margin-top: 20px;
            width: 60%;
        }

        .thoughtOne .image img, .thoughtTwo .image img{
            width: 100%;
            height: 300px;
            object-fit: contain;
        }

  
    </style>
</head>
<body>
<div class="logoNav">
                <div class="logo">
                    <div class="photo">
                        <img src="./assets/image/football.jpg" alt="">
                    </div>
                </div>
                <div class="navi">
                    <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <!-- <li sty><a href="./php/login.php">login</a></li> -->
                    </ul>
                </div>
            </div>
<div class="container">
    <div class="upperText">
        <span style="color:gray ; font-size: 29px;"> Stay Healthy</span> <p style="color: rgba(230, 173, 98, 0.888); font-size: 24px;">Shop More</p> 
    </div>
    <div class="thoughtOne">
        <div class="text">
            <h1>Our Missions: Selling Quality Product at a very reasonnable price</h1>
            <span> As we are reading in BCA 4th sem we just have begun to code. We have a project to do in this semester so me and my friend 
                have decided to create a ecommerce website from the very first day since we got to know about project </span>
        </div>
        <div class="image">
            <img src="./assets/image/football.jpg" alt="">
        </div>


    </div>
    <div class="thoughtTwo">
        <div class="text">
            <h1>Our Missions: Selling Quality Product at a very reasonnable price</h1>
            <span> As we are reading in BCA 4th sem we just have begun to code. We have a project to do in this semester so me and my friend 
                have decided to create a ecommerce website from the very first day since we got to know about project </span>
        </div>
        <div class="image">
            <img src="./assets/image/kunal.jpg" alt="">
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
    
</body>
</html>
<?php
?>
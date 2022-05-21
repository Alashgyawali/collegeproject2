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
    <!-- link google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- linkFontAwsome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <!-- link uniicon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
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


</head>

<body>
    <div class="res">

 

        <div class="main">
            <div class="wrapper">
                <div class="logoNav">
                    <div class="logo">
                        <div class="photo">
                            <img src="./assets/image/Layer 0.jpg" alt="">
                        </div>
                    </div>
                    <div class="navi">
                        <ul class="menu">
                            <li><a href="./index.php">Home</a></li>
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
                            <li><a href="./cart.php?id=<?php echo $_SESSION['client-clientname'] ?>"><i class="uil uil-shopping-cart-alt"></i></a></li>

                        </ul>

                    </div>
                    <div class="form">

                        <form name="formFirst" action="./php/logoutclient.php" method="POST">

                            <div class="signIn">

                                <button class="btn" name="btn"><?php echo "Welcome!" . $_SESSION['client-clientname'] ?>
                                    <li><a href="./php/login.php"><i class='bx bx-log-out'></i>Signout</a></li>
                                </button>
                            </div>

                        </form>
                    </div>


                </div>
                <form action="#" method="get" class="search">


                    <div class="input">
                        <input type="search" name="keywords" placeholder="Enter a product Name">

                    </div>
                    <div class="iconSearch">
                        <i class="fas fa-search"></i>
                        <button name="submit">Search</button>
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

            </div>
        </div>

        </form>
    </div>
    </div>
    <script>
        function toggles() {
            // let first= document.querySelector('.menus .lists').classList.toggle('active');

            let last = document.querySelector('.mmenus ul').classList.toggle('active');
            if (last) {
                document.querySelector('.mmenus ul').style.transform = 'translateX(0)';

            } else {
                document.querySelector('.mmenus ul').style.transform = 'translateX(-100%)';
            }



        }
        toggles();
    </script>
    <script src="./assets/js/buy.js"></script>
</body>

</html>
<?php
?>
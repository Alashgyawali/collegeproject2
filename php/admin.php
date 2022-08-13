<?php
session_start();

if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header("Location:./adminLogin.php");
}
  
  ?>
  <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../assets/css/adminLinks.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/admin.css">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
     <img src="../assets/image/football.jpg" alt="">
    </div>
      <ul class="nav-links">
        <li class="active">
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li class="product">
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li class="order_list">
          <a href="#" target="_self">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li class="analytics">
          <a href="#">
          <i class='bx bxs-message-rounded'></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <!-- <li class="stock">
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li> -->
        <li class="total_order">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <!-- <li class="team">
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li> -->
        <!-- <li class="message">
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li> -->
        <!-- <li class="favourite">
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favourites</span>
          </a>
        </li>
        <li class="setting">
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out" onclick="logout()">
          <a href="./logoutadmin.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">
          <!-- <script>
           let apple=$_SESSION['username']
          document.write(apple);
          </script> -->
          <?php  echo  "Welcome!".$_SESSION['adminname']?>
        </span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <?php 
        include "./pages/page1.php"; 
        include "./pages/page2.php";
        include "./pages/page3.php";
        include "./pages/page4.php";
        include "./pages/page5.php";
        include "./pages/page6.php";
        include "./pages/page7.php";
        include "./pages/page8.php";
        include "./pages/page9.php";
        include "./pages/page10.php";
      ?>
    </div>
    <script src="../assets/js/adminDashboard.js"></script>
    <script>
      function toggler() {
  console.log("hello");
  let menu = document.querySelector(".sidebar .nav-links").children;
  let panels = document.querySelector(".home-section .home-content").children;
  for(let i=0;i<menu.length-1;i++) {
    menu[i].addEventListener("click", e => {
      console.log(i);
      for(let j = 0;j < menu.length-1;j++) {
        if(i === j) {
          menu[j].classList = ["active"];
          panels[j].style.display = "";
        }else{
          menu[j].classList = [];
          panels[j].style.display = "none";
        }
        console.log(menu[i].classList);
      }
    })
  }
}
toggler();
function handleLinks(){
//   search params
let searchParams = new URLSearchParams(window.location.search);
let id = searchParams.get("page");
let links = document.querySelector(".sidebar .nav-links").children;
if(id>0 && id<=10){
  links[id-1].click();

}
}
handleLinks();
    </script>
  </section>
</body>
</html>

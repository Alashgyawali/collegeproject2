function sidebar() {
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
}
sidebar();
// function toggler() {
//   console.log("hello");
//   let menu = document.querySelector(".sidebar .nav-links").children;
//   let panels = document.querySelector(".home-section .home-content").children;
//   for(let i=0;i<menu.length-1;i++) {
//     menu[i].addEventListener("click", e => {
//       console.log(i);
//       for(let j = 0;j < menu.length-1;j++) {
//         if(i === j) {
//           menu[j].classList = ["active"];
//           panels[j].style.display = "";
//         }else{
//           menu[j].classList = [];
//           panels[j].style.display = "none";
//         }
//         console.log(menu[i].classList);
//       }
//     })
//   }
// }
// toggler();
// function handleLinks(){
// //   search params
// let searchParams = new URLSearchParams(window.location.search);
// let id = searchParams.get("page");
// let links = document.querySelector(".sidebar .nav-links").children;
// if(id>0 && id<=10){
//   links[id-1].click();

// }
// }
// handleLinks();
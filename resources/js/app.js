import './bootstrap';


const menu_btn = document.querySelector(".icon");
const mobile_menu = document.querySelector(".dropdown");

menu_btn.addEventListener("click", function (){
  mobile_menu.classList.toggle("active-dropdown");
});


const menu_btn1 = document.querySelector(".icon1");
const mobile_menu1 = document.querySelector(".dropdown1");

menu_btn1.addEventListener("click", function (){
  mobile_menu1.classList.toggle("active-dropdown1");
});

const menu_btn2 = document.querySelector(".icon2");
const mobile_menu2 = document.querySelector(".dropdown2");

menu_btn2.addEventListener("click", function (){
  mobile_menu2.classList.toggle("active-dropdown2");
});

const menu_btn3 = document.querySelector(".icon3");
const mobile_menu3 = document.querySelector(".dropdown3");

menu_btn3.addEventListener("click", function (){
  mobile_menu3.classList.toggle("active-dropdown3");
});
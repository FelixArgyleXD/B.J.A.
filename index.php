<?php require_once("config.php")
?>
<!DOCTYPE html>
<html lang="en">
<?
$balls="hi"
?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Delish sus</title>
</head>
<style>
html, body {
     height: 100%;
      margin:0;
     width: 100%;
     background-color: #D11C1C 
}
 #navbar {
     overflow: hidden;
     background-color: #DC5B11;
     position: fixed;
     top:0;
     left:0;
     right:0;
   
}
 #navbar a:hover {
     background-color: #BB4C0D 
}
 #navbar a {
     float: left;
     display: block;
     color: #f2f2f2;
     float: left;
     text-align: center;
     padding: 14px;
     text-decoration: none;
     font-family: 'gloock';
     text-shadow: 3px 3px 10px #6C1212;
     border-style: solid;
     border-width: 1px;
}
 .center {
     text-align:center 
}
 .content {
     padding: 16px;
}
 .sticky {
     position: fixed;
     top: 0;
     width: 100%;
}
 .sticky + .content {
     padding-top: 60px;
}
 .column {
     float: left;
     width: 33.333333%;
     height: 1000px;
}
 .row:after {
     content: "";
     display: table;
     clear: both;
}
 .row {
     text-align: center;
}
 .flex-container {
     background-color: #DC5B11;
     padding-top: 40px;
     flex-wrap: wrap;
     display: flex;
     justify-content: center;
}
 .FlexTitle{
     width:100%;
     background-color: #DC5B11;
     padding-top: 40px;
     flex-wrap: wrap;
     display: flex;
     justify-content: center;
     background-image: url("https://th.bing.com/th/id/R.92f278870f9b3e5b12e105acff5e8482?rik=SEVJaQu6kcaCkQ&riu=http%3a%2f%2fb.rgbimg.com%2fcache1r8B47%2fusers%2fm%2fmz%2fmzacha%2f600%2fnbIFPF8.jpg&ehk=422WLPpt%2boi7VjzvDaXwN57zKcVS0O1ZsBU%2bcozmxGo%3d&risl=&pid=ImgRaw&r=0");
}
 .FlexTitle h1{
  Text-align:center;
  background-color:#DC5B11;
  border-radius:10px;
  max-width: 500px;
  padding:20px;
  color:white;
  font-family: 'Dancing Script', cursive;
  font-size: 100px;
  text-decoration-line: underline;
  text-decoration-color: white;  
}
img {
  border-radius: 50%;
}
.dotted {
  border-style: dotted solid;
  border-width: thick;
  border-color: white;
  
}
.dashed {
  border-style: dashed;
  border-width: thick;
  border-color: white;
}
.dashedttl {
  border-style: dashed;
  border-width: thick;
  border-color: white;
}
h1 {
  font-family: gloock;
  color: white;
  text-shadow: 3px 3px 10px #6C1212;
}
h1 {
  display: inline-block;
  padding:15px;
}
</style>

<div id="navbar">
  <a href="index.php"><strong> Home</strong></a>
  <a href="about.php"><strong> About</strong></a>
  <a href="menu.php"><strong>Menu</strong></a>
  <a href="orders.php"><strong>Orders</strong></a>
</div>

<div class="flex-container">
  <div class="FlexTitle">
    <h1 class="dashedttl"> DelishSus </h1>
  </div>
</div>
<!--this is for the title of the page-->
<div class="row">
  <div class="column">
    <div class="center">
      <h1 class="dashed"> <strong> Order Now!</strong></h1>
      <h2>We are partnered with several food delivery services to bring our fun AmongUs themed food straight to you!
        Online order below! </h2>
      <a href="orders.html"><img class=center src="https://89c3d48c-5963-43b3-9d8c-7ca580fd96b2.id.repl.co/order.jpg" alt="Order Here!"></a>
      </body>
    </div>
  </div>
  <div class="column" style="background-color:#AB1919;">
    <h1 class="dashed"> <strong> About Us</strong></h1>
    <h2> DelishSus is a fine-dining experience paired with the hit game AmongUs. It's fun and delicious for the whole
      family! Click down below to learn our story!</h2>
    <a href="about.html"><img class=impostor src="https://89c3d48c-5963-43b3-9d8c-7ca580fd96b2.id.repl.co/impostor.png" alt="About us Page!"></a>
  </div>

  <div class="column">
    <h1 class="dashed"> <strong> Kid Friendly!</strong></h1>
    <h2> We have a playplace and a ball pit! If your kiddos are being bad, we can eject them!</h2>
    <a href="home.html"><img size=10% class=impostor2 src="https://89c3d48c-5963-43b3-9d8c-7ca580fd96b2.id.repl.co/playplace.jpg" alt="About us Page!"></a>
  </div>

</div>

<script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>







</html>
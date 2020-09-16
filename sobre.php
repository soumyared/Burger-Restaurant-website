<?php
require_once("config2.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>sobre</title>
<link rel="stylesheet" type="text/css" href="icon.css">
<link rel="stylesheet" type="text/css" href="ciudad.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrapper">
  <div class="sobre">
<div class="header1">
  <div class="topnav">
    <a href="#default" class="logo" style="margin-left:0px;margin-right:100px;margin-bottom:30px;margin-top:30px;color:black;">Logo</a>
    <a style="margin-left:50px;color:black;">INCIO</a>
    <a href=incio.php>INCIO</a>
    <a class="active" href="#sobrenostros">SOBRE NOSOTROS</a>
    <a href="menu.php">MENU</a>
    <a href="http://sxr6494.uta.cloud/blog1/">BLOG</a>
    <a href="contact.php">CONTACTO</a>
    <a href="register.php">REGISTRO</a>
    <a href="login.php">INCIAR SESION</a>
  </div>
  <div class="headercontent1">
  LAS MEJORES DE LA CIUDAD
  <h1 style="margin-top:5px;font-size:70px;">Sobre nuestras Hamburguesas</h1>
  </div>
</div
><div class="tri11">
  zbc
</div><div class="tri21">
  zbc
</div><div class="img1">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="row">
  <div class="column">
    <img src="./Menu_files/hamburguesa1.jpg" alt="Snow" style="width:100%;">
  </div>
  <div class="column">
    <img src="./Menu_files/hamburguesa2.jpg" alt="Forest" style="width:100%;">
  </div>
  </div>
  <div class="fine">
  <h2>Somos Ibra</h2>
  <p>Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.
Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, las mejores Hamburguesas..</p>
</div>
<div class="row">
  <div class="column">
   <p style="text-align:left;">Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la pizzería DomiPizza's, con una inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
  </div>
  <div class="column">
  <p style="text-align:left;">pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</p>
  </div>
  </div>
  <div class="btn-group">
  <button style="margin-left:250px;margin-top:10px;margin-bottom:40px;"><a href="menu.php" style="color:#fff;">VER EL MENÚ</a></button>
  <button><a onclick="login.php" style="color:#fff;">HOY PEDIR AHORA</a></button>
  <button><a href="review.php" style="color:#fff;">Write Review</a></button>
</div>
  <div class="content2">
  <img src="./Menu_files/Burguer.png" alt="logo" width="30" height="30">
  <h2 style="margin-top:-5px;">Lo que dicen los clientes</h2>
  </div>
<div class="car">
  <div class="slideshow-container">
    <?php
    $product_array = $db_handle->runQuery("SELECT * FROM Testimony ORDER BY id DESC");
    if (!empty($product_array)) {
      for($i=0;$i<count($product_array);$i){
    ?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <div class="row">
    <?php
    $product_array = $db_handle->runQuery("SELECT * FROM Testimony ORDER BY id DESC");
      for($j=0;$j<3;$j++){
    ?>
    <div class="column">
      <h4><?php echo $product_array[$i]["Title"]; ?></h4>
     <p style="text-align:left;"><?php echo $product_array[$i]["Review"]; ?></p>
     <img src="./Menu_files/img_avatar.png" alt="Avatar" style="width:50px;margin-top:20px;">
     <p><span style="color:#EF0031"><?php echo $product_array[$i]["Name"]; ?></span>,Cliente</p>
    </div>
    <?php
    $i=$i+1;
      }
    ?>
    </div>
  <div class="text"></div>
</div>
<?php
}
}
?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</div>
<div class="fine">
<h2>Nos esforzamos por brindar un buen servicio para su disfrute.</h2></div>

<div class="containera">
  <img src="./Menu_files/hamburguesa3.jpg" alt="Notebook" style="width:100%; height:500px">
  <div class="contenta">
    <div>
      <img src="./Menu_files/5.png" alt="logo" width="150" height="100" style="margin-top:60px;" >
    <p style="color:#32CD32	"><u>Habla a:</u></p>
    <p>Av. Intercomunal, sector la Mora, calle 8<p>
    <p style="color:#32CD32"><u>Telefono:</u><p>
    <p>+58 251 261 00 01<p>
    <p style="color:#32CD32"><u>Correo:</u></p>
    <p>yourmail@gmail.com</p>
  </div><br>
<div align="center" class="socialbtns">
<li><a href="#" class="fa fa-lg fa-pinterest"></a></li>
<li><a href="#" class="fa fa-lg fa-facebook"></a></li>
<li><a href="#" class="fa fa-lg fa-twitter"></a></li>
<li><a href="#" class="fa fa-lg fa-linkedin"></a></li>
<li><a href="#" class="fa fa-lg fa-vimeo"></a></li>
<li><a href="#" class="fa fa-lg fa-heart"></a></li>
</ul>
<br>
<ul style="margin-top:100px;"><li>Copyright © 2020 Todos los derechos reservados | Este sitlo esta hecho con </li><li><a href="#" class="fa fa-lg fa-heart"></a></li><li> por DiazApps</li></ul>
</div>
  </div>
</div>
<div class="tri111">
  zbc
</div>
</div>
</div>
</body>
</html>

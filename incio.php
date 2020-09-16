<?php
require_once("config2.php");
$db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Incio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="icon.css">
<link rel="stylesheet" type="text/css" href="ciudad.css">
</head>
<body>
<div class="wrapper">
<div class="incio">
<div class="header">
  <div class="topnav">
    <a href="#default" class="logo" style="margin-left:0px;margin-right:100px;margin-bottom:30px;margin-top:30px;color:black;">Logo</a>
    <a style="margin-left:50px;color:black;">INCIO</a>
    <a class="active" href=incio.php>INCIO</a>
    <a href="sobre.php">SOBRE NOSOTROS</a>
    <a href="menu.php">MENU</a>
    <a href="http://sxr6494.uta.cloud/blog1/">BLOG</a>
    <a href="contact.php">CONTACTO</a>
    <a href="register.php">REGISTRO</a>
    <a href="login.php">INCIAR SESION</a>
  </div>
  <div class="headercontent">
  LAS MEJORES DE LA CIUDAD
  <h1 style="margin-top:-10px;">Hamburguesas</h1>
  <a href="menu.php" class="button" style="margin-top:-20px;">VER MENÚ HOY</a>
  </div>
</div
><div class="tri1">
  zbc
</div><div class="tri2">
  zbc
</div><div class="img">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="content2">
<img src="./Menu_files/Burguer.png" alt="logo" width="30" height="30">
<h2 style="margin-top:-5px;">Nuestra historia</h2>
</div>
<div class="content1">
  <img src="./Menu_files/story1.png" alt="logo" width="175" height="250" style="float:left">
  <p class="para1" style="margin-right:10px;">Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.<br></p>
  <p class="para2">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.<br></p>
  <img src="./Menu_files/story2.png" alt="logo" width="175" height="250" style="float:right">
  </div>
   <div class="abc">

<div class="row">
  <div class="content3">
  <img src="./Menu_files/Burguer.png" alt="logo" width="30" height="30">
  <h2 style="margin-top:-5px;">Las más vendidos</h2>
  </div>



  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
  if (!empty($product_array)) {
    for($i=0;$i<4;$i++){
  ?>
    <div class="column">
      <img src=<?php echo $product_array[$i]["image"]; ?> alt="Snow" style="width:100%">
      <p><?php echo $product_array[$i]["name"]; ?></p>
      <p style="color:#EF0031;"><?php echo "$".$product_array[$i]["price"]; ?></p>
      <a href="login.php" class="button1" style="margin-top:8px;">Ordenar ahora</a>
    </div>
  <?php
    }
  }
  ?>

</div>
  <!---->
  <div class="row" style="margin-bottom:10px">
    <?php
    $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
    if (!empty($product_array)) {
      for($i=0;$i<4;$i++){
    ?>
    <div class="column">
      <img src=<?php echo $product_array[$i]["image"]; ?> alt="Snow" style="width:100%">
      <p><?php echo $product_array[$i]["name"]; ?></p>
      <p style="color:#EF0031;"><?php echo "$".$product_array[$i]["price"]; ?></p>
      <a href="login.php" class="button1" style="margin-top:8px;">Ordenar ahora</a>
    </div>
    <?php
      }
    }
    ?>
</div><br><br>
<div style="text-align:center;"> <a href="menu.php" class="button" style="margin-top:-20px;">VER MENÚ HOY</a></div>
<div class="content3" style="margin-top:50px;">
<img src="./Menu_files/Burguer.png" alt="logo" width="30" height="30">
<h2 style="margin-top:-5px;">Nuestro menú</h2>
</div>
<div class="list">
<ul>
  <li><a class="active" href="#home" style="margin-left:200px;">TODOS</a></li>
  <li><a href="#news">Pollo</a></li>
  <li><a href="#contact">Carne</a></li>
  <li><a href="#about">Mixita</a></li>
  <li><a href="#news">De Todito</a></li>
</ul>
</div>
<table>
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
  if (!empty($product_array)) {
    for($i=4;$i<13;$i++){
  ?>

  <tr>
    <td><img src=<?php echo $product_array[$i]["image"]; ?> style="width:20%;float:left;margin-right:10px;">
     <p><?php echo $product_array[$i]["name"];?></p></td>
  <td>
     <p style="margin-left:-50px;color:#EF0031;"><?php echo $product_array[$i]["price"];?></p>
   </td>
    <td><img src=<?php $k=++$i; echo $product_array[$k]["image"];?> style="width:20%;float:left;float:left;margin-right:10px;">
     <p><?php echo $product_array[$k]["name"];?></p></td>
    <td>
      <p style="margin-left:-50px;color:#EF0031;"><?php echo $product_array[$k]["price"];?></p>
    </td>
  </tr>
  <?php
    }
  }
  ?>
</table>
<div style="text-align:center;margin-top:-45px;margin-bottom:50px;"> <a href="menu.php" class="button" style="margin-top:-20px;">VER MENÚ HOY</a></div>

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
<ul>
<li><a href="#" class="fa fa-lg fa-pinterest"></a></li>
<li><a href="#" class="fa fa-lg fa-facebook"></a></li>
<li><a href="#" class="fa fa-lg fa-twitter"></a></li>
<li><a href="#" class="fa fa-lg fa-linkedin"></a></li>
<li><a href="#" class="fa fa-lg fa-vimeo"></a></li>
<li><a href="#" class="fa fa-lg fa-heart"></a></li>
</ul>
<br>
<ul style="margin-top:60px;"><li>Copyright © 2020 Todos los derechos reservados | Este sitlo esta hecho con </li><li><a href="#" class="fa fa-lg fa-heart"></a></li><li> por DiazApps</li></ul>
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

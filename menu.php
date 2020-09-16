<?php
require_once("config2.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="icon.css">
<link rel="stylesheet" type="text/css" href="ciudad.css">
<title>menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrapper">
<div class="menu">
<div class="header1">
  <div class="topnav">
    <a href="#default" class="logo" style="margin-left:0px;margin-right:100px;margin-bottom:30px;margin-top:30px;color:black;">Logo</a>
    <a style="margin-left:50px;color:black;">INCIO</a>
    <a href=incio.php>INCIO</a>
    <a href= sobre.php>SOBRE NOSOTROS</a>
    <a class="active" href="menu.html">MENU</a>
    <a href="http://sxr6494.uta.cloud/blog1/">BLOG</a>
    <a href="contact.php">CONTACTO</a>
    <a href="register.php">REGISTRO</a>
    <a href="login.php">INCIAR SESION</a>
  </div>
  <div class="headercontent1">
  LAS MEJORES DE LA CIUDAD
  <h1 style="margin-top:-10px;">Menú</h1>
  </div>
</div
><div class="tri11">
  zbc
</div><div class="tri21">
  zbc
</div><div class="img1">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="content2">
<h2 style="margin-top:-5px;">Elija su Hamburguesa</h2>
</div>
<div class="row">
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
<table>
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
  if (!empty($product_array)) {
    for($i=12;$i<20;$i++){
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

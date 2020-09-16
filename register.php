<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="icon.css">
<link rel="stylesheet" type="text/css" href="ciudad.css">
<title>Registro</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php include 'reg.php';?>
<div class="wrapper">
<div class="contact">
<div class="header1">
  <div class="topnav">
    <a href="#default" class="logo" style="margin-left:0px;margin-right:100px;margin-bottom:30px;margin-top:30px;color:black;">Logo</a>
    <a style="margin-left:50px;color:black;" >INCIO</a>
    <a href=incio.php>INCIO</a>
    <a href=sobre.php>SOBRE NOSOTROS</a>
    <a href=menu.php>MENU</a>
    <a href="http://sxr6494.uta.cloud/blog1/">BLOG</a>
    <a href=contact.php>CONTACTO</a>
    <a class="active" href="#">REGISTRO</a>
    <a href="login.php">INCIAR SESION</a>

  </div>
  <div class="headercontent1">
  DI HOLA
  <h1 style="margin-top:-10px;">REGISTRO</h1>
  </div>
</div>
<div class="tri11">
  zbc
</div><div class="tri21">
  zbc
</div><div class="img1">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="logina">
<div class="subscribe">
<div class="img2">
  <img src="./Menu_files/Burguer.png" alt="logo" style="width:30px;height:30px;"/>
<h2 style="margin-top:0px;">Registro de Usuario</h2>
</div>
<div class="loginform" style=" height:100px;margin-bottom:900px;">
  <form name="loginform1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateFormre()" method="post">

    <div class="container">
      <label for="aname"><b>Nombre y apellido</b></label>
      <input type="text" placeholder="Nombre y apellido" name="aname" pattern='/^[A-Za-z]+([\ A-Za-z]+)*/' required>
      <p id="demo2" style="color:red"></p>
      <p class="error" style="color:red"><?php echo $anameErr;?> </p>

      <label for="uname"><b>Correo</b></label>
      <input type="text" placeholder="Correo" name="uname" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
      <p id="demo" style="color:red"></p>
      <p class="error"style="color:red"><?php echo $nameErr;?> </p>


      <label for="psw"><b>Contrasena</b></label>
      <input type="password" placeholder="Contrasena" name="psw" pattern="((*=.*\d)(?=.*[a-z])(*=.*[A-Z])(*=.*[@#$%]).{8,10})" required minlength="8" maxlength="10">
      <p id="demo1" style="color:red"></p>
      <p class="error" style="color:red"><?php echo $passwErr;?></p>
      <label for="repsw"><b>Reptir Contrasena</b></label>
      <input type="password" placeholder="Reptir Contrasena" name="repsw" pattern="((*=.*\d)(?=.*[a-z])(*=.*[A-Z])(*=.*[@#$%]).{8,10})" required minlength="8" maxlength="10">
      <p id="demo3" style="color:red"></p>
      <p class="error" style="color:red"><?php echo $repasswErr;?> </p>

      <label for="addr"><b>Direccion</b></label>
      <input type="text" placeholder="Direccion" name="addr" pattern='/^[A-Za-z0-9;-:]+([\ A-Za-z0-9;-:]+)*/' required>
      <p id="demo4" style="color:red"></p>
      <p class="error" style="color:red"><?php echo $addrErr;?></p>
      <button type="submit" style="font-size:15px;font-family:'Open Sans';">Cargar</button>
      <p class="error" style="color:red"><?php echo $commErr;?> </p>
      <p>Already have an account? <a href="login.php" style="color:green">Login here</a>.</p>
    </div>

    <div class="container" style="background-color:black">
      <button type="button" class="cancelbtn" style="color:white;font-size:15px;font-family:'Open Sans';"><a href="incio.html" style="color:white">Cancel</button>
    </div>
  </form>
</div>
</div>
</div>

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

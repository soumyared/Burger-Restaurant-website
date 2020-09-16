<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
}
else{
  echo "<script>window.location.href='login.php'</script>";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="icon.css">
<link rel="stylesheet" type="text/css" href="ciudad.css">
<title>checkout</title>
<meta charset="UTF-8">
  <script  src="checkoutvalid.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
    <a href="register.php" >REGISTRO</a>
    <a href="login.php">INCIAR SESION</a>

  </div>
  <div class="headercontent1">
  <h1 style="margin-top:-10px;">Checkout</h1>
  </div>
</div>
<div class="tri11">
  zbc
</div><div class="tri21">
  zbc
</div><div class="img1">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="img2">
<img src="./Menu_files/Burguer.png" alt="logo" style="width:30px;height:30px;"/>
<h2 style="margin-top:0px;">Checkout</h2>
</div>
<div class="checkout">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <div id="error_message">
              <p></p>
            </div>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" required pattern='/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i' placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" required minlength="5" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" required pattern="^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" required pattern="^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" required pattern="^\d{5}$" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" required pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" maxlength="16" placeholder="1111222233334444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" required pattern="^[a-zA-Z\s]+$" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" required pattern="^\d{4}$" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required pattern="^[0-9]{3,4}$" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" style="font-family:'Open Sans'">
      </form>
    </div>
  </div>

</div>
</div>
<div class="abc">
<div id="id01" class="modal">

<form class="modal-content animate" action="/action_page.php" method="post" return valid()>
 <div class="imgcontainer">
   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"style="margin-top:-35px;">&times;</span>
   <img src="./Menu_files/Burguer.png" alt="Avatar" class="avatar" style="height:50px;width:50px;margin-left:130px;margin-top:20px;float:left;">
   <h3 style="color:black;font-family: 'Beyond The Mountains';float:left;margin-right:100px;font-size: 30px;">INICIAR SESION</h3>

 </div>

 <div class="container">
   <label for="uname"><b>Usuario</b></label>
   <input type="text" placeholder="Usuario" name="Usario" required>

   <label for="psw"><b>Contrasena</b></label>
   <input type="password" placeholder="Contrasena" name="Contrasena" required>
    <div class="a">
   <button type="submit">Entrar</button></div>
   <label>
     <input type="checkbox" checked="checked" name="remember"> Remember me
   </label>
 </div>

 <div class="container" style="background-color:#f1f1f1">
   <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
   <span class="psw" style="color:black"><a href="#">Forgot password?</a></span>
 </div>
</form>
</div>

<div id="id02" class="modal">

<form class="modal-content animate" action="/action_page.php" method="post">
 <div class="imgcontainer">
   <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"style="margin-top:-35px;">&times;</span>
   <img src="./Menu_files/Burguer.png" alt="Avatar" class="avatar" style="height:50px;width:50px;margin-left:130px;margin-top:20px;float:left;">
   <h3 style="color:black;font-family: 'Beyond The Mountains';float:left;margin-right:100px;font-size: 30px;">Registro de Usuario</h3>

 </div>

 <div class="container">
   <label for="uname"><b>Nombre y apellido:</b></label>
   <input type="text" placeholder="Nombre y apellido:" name="uname" required>
   <label for="psw"><b>Correo:</b></label>
   <input type="text" placeholder="Correo" name="psw" required>
   <label for="psw"><b>Contrasena:</b></label>
   <input type="password" placeholder="Contrasena:" name="psw" required>
   <label for="psw"><b>Reptir Contrasena:</b></label>
   <input type="password" placeholder="Reptir Contrasena:" name="psw" required>
   <label for="psw"><b>Direccion:</b></label>
   <input type="text" style="height:100px;" placeholder="Direccion" name="psw" required>
    <div class="a">
   <button type="submit">Cargar</button></div>
 </div>

 <div class="container" style="background-color:#f1f1f1">
   <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
 </div>
</form>
</div>

<!--<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
 if (event.target == modal) {
     modal.style.display = "none";
 }
}
</script>-->
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

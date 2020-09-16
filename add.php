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
<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["cred"]=="admin"){
}
else{
	echo "<script>window.location.href='login.php'</script>";
}
require_once "config.php";
$Err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$aname = $_POST['aname'];
$link1 = $_POST['link1'];
$price = $_POST['price'];
$code = $_POST['code'];
$sql = "SELECT id FROM tblproduct WHERE code = ?";
if($stmt = mysqli_prepare($link, $sql)){
  mysqli_stmt_bind_param($stmt, "s", $param_code);
  $param_code = trim($_POST["code"]);

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) == 1){
            $Err = "#This code is already taken.";
        } else{
          $sql = "INSERT INTO tblproduct (name,code,image,price) VALUES (?, ?, ?, ?)";
          if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_code,$param_image, $param_price);
            $param_name = $aname;
            $param_code = $code;
            $param_image=$link1;
            $param_price=$price;
            if(mysqli_stmt_execute($stmt)){
							echo "<script>window.location.href='admin.php'</script>";
            } else{

                $Err= mysqli_stmt_error($stmt);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($link);
}
?>
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
  <h1 style="margin-top:-10px;">ADD MENU</h1>
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
<h2 style="margin-top:0px;">ADD MENU</h2>
</div>
<div class="loginform" style=" height:100px;margin-bottom:900px;">
  <form name="loginform1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <div class="container">
      <label for="aname"><b>Item Name</b></label>
      <input type="text" placeholder="Item Name" name="aname" pattern='/^[A-Za-z]+([\ A-Za-z]+)*/' required>

      <label for="link1"><b>Image link</b></label>
      <input type="text" placeholder="Menu_files/yourimg.jpg" name="link1" pattern='^Menu_files\/.*.jpg$' required>

      <label for="price"><b>Price</b></label>
      <input type="text" placeholder="Price" name="price" pattern='^\d+(,\d{3})*(\.\d{1,2})?$' required>

      <label for="code"><b>Code</b></label>
      <input type="text" placeholder="Code" name="code" pattern=='/^[A-Za-z]+([\ A-Za-z]+)*/' required>
      <p class="error" style="color:red"><?php echo $Err;?> </p>


      <button type="submit" style="font-size:15px;font-family:'Open Sans';">Add</button>
    </div>

    <div class="container" style="background-color:black">
      <button type="button" class="cancelbtn" style="color:white;font-size:15px;font-family:'Open Sans';"><a href="admin.php" style="color:white">Cancel</button>
      <button type="button" class="cancelbtn" style="color:white;font-size:15px;font-family:'Open Sans';"><a href="logout.php" style="color:white">Logout</button>

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

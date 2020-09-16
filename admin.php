<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["cred"]=="admin"){
}
else{
	echo "<script>window.location.href='login.php'</script>";
	exit;

}
require_once("config2.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "remove":
  $productByCode = $db_handle->runQuery("DELETE FROM tblproduct WHERE code='" . $_GET["code"] . "'");
	break;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="icon.css">
<link rel="stylesheet" type="text/css" href="ciudad.css">
<title>Inciarsession</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="script.js"></script>
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
    <a href=register.php >REGISTRO</a>
    <a class="active" href="#">INCIAR SESION</a>

  </div>
  <div class="headercontent1">
  <h1 style="margin-top:-10px;">Change Menu</h1>
  </div>
</div>
<div class="tri11">
  zbc
</div><div class="tri21">
  zbc
</div><div class="img1">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="logina" style="margin-bottom:1500px;">
<div class="subscribe">
<div class="img2">
  <img src="./Menu_files/Burguer.png" alt="logo" style="width:30px;height:30px;"/>
<h2 style="margin-top:0px;">Change Menu</h2>
</div>
<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) {
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><a href="admin.php?action=remove&code=<?php echo $product_array[$key]["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</div>
<div>
<a id="btnEmpty" style="margin-right:100px;" href="add.php">Add Item</a>
<a id="btnEmpty" style="margin-right:100px;" href="logout.php">Logout</a>
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

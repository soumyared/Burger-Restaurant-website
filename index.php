<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
}
else{
	echo "<script>window.location.href='login.php'</script>";
	exit;
}
require_once("config2.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
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
  <h1 style="margin-top:-10px;">Order Ahora</h1>
  </div>
</div>
<div class="tri11">
  zbc
</div><div class="tri21">
  zbc
</div><div class="img1">
<img src="./Menu_files/5.png" alt="logo" width="150" height="100">
</div>
<div class="logina" style="margin-bottom:1200px;">
<div class="subscribe">
<div class="img2">
  <img src="./Menu_files/Burguer.png" alt="logo" style="width:30px;height:30px;"/>
<h2 style="margin-top:0px;">Order Ahora</h2>
</div>
<div id="shopping-cart">
<div class="txt-heading">Cart</div>
<a id="btnEmpty" href="checkout.php" style="margin-left:10px;">Checkout</a>
<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>
<?php
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Menu</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) {
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</div>
<a id="btnEmpty" style="margin-right:100px;" href="logout.php">Logout</a>
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

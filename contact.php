<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="icon.css">
    <link rel="stylesheet" type="text/css" href="ciudad.css">
    <script src="Valid.js"></script>
    <title>contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$nameErr = $emailErr = $subjectErr = $commentErr = "";
$name = $email  = $comment = $subject= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if(empty($_POST["subject"])){
        $subjectErr = "Subject is required";
    } else{
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["comment"])) {
        $commentErr = "Message is required";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if($nameErr == ''and $emailErr == '' and $subjectErr == '' and $commentErr == ''){
        unset($_POST['submit']);
        foreach ($_POST as $key=> $value){
                $comment .= "$key: $value\n";
                }
        $to = 'rohithpaulreddy550@gmail.com';
        $subject = 'contact from submit';
        if(mail($to,$subject,$comment)){
            $success = "Message sent, thank you for contacting us!";
            $name = $email = $subject = $comment ="";
        }
        }
    }


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
                <a href=blog.html>BLOG</a>
                <a class="active" href=contact.php>CONTACTO</a>
                <a href="register.php">REGISTRO</a>
                <a href="login.php">INCIAR SESION</a>

            </div>
            <div class="headercontent1">
                DI HOLA
                <h1 style="margin-top:-10px;">Contacto</h1>
            </div>
        </div>
        <div class="tri11">
            zbc
        </div><div class="tri21">
            zbc
        </div><div class="img1">
            <img src="./Menu_files/5.png" alt="logo" width="150" height="100">
        </div>

        <form id ="subscribe"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"onsubmit = "return validate();">
            <form class="subscribe">
                <div class="img2">
                    <img src="./Menu_files/Burguer.png" alt="logo" style="width:30px;height:30px;"/>
                    <h2 style="margin-top:0px;">Di hola</h2>
                    <p style="margin-top:-20px;">Di hola, envianos un mensaje</p>
                    <p>Envianos tus comentarios y suguerencias ustedes son importante para nosotros</p>
                </div>
                <div id="error_message">
                    <p></p>
                </div>
                <div class="form" style=" height:100px;margin-bottom:300px;margin-top: 100px;" >
                    <form name="contact" >
                        <div class="two-col" style="height: 50px">
                            <div class = "namef">
                                <input type="text"  id="name" name="name" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$"  placeholder="Name" style="height: 44px; width:95%;">
                            </div>
                            <div class = "email">
                                <label for="email"></label><input type ="email" id = "email" name = "email" required pattern='/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i'  placeholder = "E-Mail" style="height: 44px; width:96%;">
                            </div>
                        </div>
                        <div class = "subject">
                            <input type ="text"  id = "subject" required minlength="1" name = "subject"  placeholder = "Subject"style="width:98% ; height:50px;margin-top: 2%" ><br>

                        </div>

                        <div class = "message">
                            <textarea name="comment" placeholder="Message" id ="message" required minlength="1" style="width:98% ; height:90px;margin-top: 2%" ></textarea>

                        </div>
                        <div class="row">
                            <input type="submit" style="margin-top:10px;" value="ENVIAR MENSAJE" align="center"><br>
                            <span class="sucess" style="color:red;"><?= $success;?></span>
                            <span class="error" style="color:red;"><?php echo $nameErr;?></span><br>
                            <span class="error" style="color:red;"><?php echo $emailErr;?></span><br>
                            <span class="error" style="color:red;"><?php echo $subjectErr;?></span><br>
                            <span class="error" style="color:red;"><?php echo $commentErr;?></span><br>
                        </div>
                    </form>
            </form>
        </form>
    </div>
    <div class="abc">
        <div id="id01" class="modal">

            <form class="modal-content animate" action="/action_page.php" method="post">
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

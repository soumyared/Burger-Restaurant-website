<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  if($_SESSION["cred"] =="admin"){
    echo "<script>window.location.href='admin.php'</script>";
    exit;
  }
  else{
    echo "<script>window.location.href='index.php'</script>";
    exit;
  }
}
require_once "config.php";

$nameErr = $passw =$passwErr=$name=$commErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $nameErr = "# Name is required";
  }
  else {
    $name = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$name)) {
      $nameErr = "# Required format";
    }
  }

  if (empty($_POST["psw"])) {
    $passwErr= "# Password is required";
  }
  else {
    $passw = test_input($_POST["psw"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z0-9@#$%^*]{8,10}$/",$passw)) {
      $passwErr= "# Required format";
    }
  }

if(empty($nameErr) && empty($passwErr)){
        $sql = "SELECT id, username, password, cred FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $name;
                        if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $name, $hashed_password,$cred);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($passw, $hashed_password)){
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $name;
                            $_SESSION["cred"] = $cred;

                            // Redirect user to welcome page
                            if($cred=="admin"){
                              echo "<script>window.location.href='admin.php'</script>";
                          }
                          else{
                            echo "<script>window.location.href='index.php'</script>";
                          }
                        } else{
                            // Display an error message if password is not valid
                            $passwErr = "# The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $nameErr = "# No account found with that username.";
                }
            } else{
                  $commErr= mysqli_stmt_error($stmt);

            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
require_once "config.php";

$nameErr = $passw =$passwErr=$name=$repasswErr=$addrErr=$anameErr=$addrErr=$commErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $nameErr = "# Email is required";
  }
  else {
    $name = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$name)) {
      $nameErr = "# Required format";
    }
    else{
            $sql = "SELECT id FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                $param_username = trim($_POST["uname"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $nameErr = "#This username is already taken.";
                    } else{
                        $name = trim($_POST["uname"]);
                    }
                } else{
                    $commErr= "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
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

  if (empty($_POST["addr"])) {
    $addrErr= "# Address is required";
  }
  else {
    $addr = test_input($_POST["addr"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z0-9@#$%^*]{8,10}$/",$passw)) {
      $addrErr= "# Required format Address";
    }
  }
  if (empty($_POST["repsw"])) {
    $repasswErr= "# Password is required";
  }
  else {
    $repassw = test_input($_POST["repsw"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z0-9@#$%^*]{8,10}$/",$repassw)) {
      $repasswErr= "# Required Password format";
    }
    else{
      if($repassw!=$passw){
        $repasswErr= "# Password Mismatch";
      }
    }
  }
  if (empty($_POST["aname"])) {
    $anameErr= "# Name is required";
  }
  else {
    $aname = test_input($_POST["aname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z]+([\ A-Za-z]+)*/",$aname)) {
      $anameErr= "# Required format Name";
    }
  }
  if(empty($nameErr) && empty($passwErr) && empty($repasswErr)&& empty($anameErr)&&empty($addrErr)){
    $sql = "INSERT INTO users (username, password,address,name) VALUES (?, ?, ?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password,$param_address, $param_name);
      $param_username = $name;
      $param_password = password_hash($passw, PASSWORD_DEFAULT);
      $param_address=$addr;
      $param_name=$aname;
      if(mysqli_stmt_execute($stmt)){
          // Redirect to login page
      $subject = "Hello User";
			$content = "Thank You for registering with us";
			$mailHeaders = "From: Admin\r\n";
			 mail($name, $subject, $content, $mailHeaders);
       echo "<script>window.location.href='login.php'</script>";
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

<?php
session_start(); /*función para utilizar variables de sesión*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
 /* Session variables are set with the PHP global variable: $_SESSION.*/ 
if (isset($_SESSION["nombre"]) && isset($_SESSION["username"])){
    echo "El nombre es: " .htmlspecialchars ($_SESSION["nombre"]) . "\n";
    echo "El username es: " .htmlspecialchars ($_SESSION["username"]);
}else{
    echo "No hay variables de sesión creadas";
}

// Validating that the user name is added or not
if (empty($_POST["Username"])) {
      $errorMsg = "User Name is required";
} else {
  // If username is added, we can use it for further use
      $userName = input_data($_POST["Username"]);
}

?>

</body>
</html>
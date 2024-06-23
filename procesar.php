<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user = $_POST['user'];
    $Password = $_POST['Password'];
    $Edad = $_POST['Edad'];

    $errors = [];

    if ($user != "luis" || $Password != "mendoza") {
    $errors[] = "El usuario o contraseña son  incorrectos.";
    }

    if (!is_numeric($Edad) || $Edad < 18) {
        $errors[] = "Debe  ser mayor de edad 18";
    }

    if (empty($user) || empty($Password) || empty($Edad)) {
    $errors[] = "Todos los campos deben ser llenados.";
    }
  
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        echo "<p>Todos los campos han sido llenados correctamente.</p>";
    }
}
    ?>    

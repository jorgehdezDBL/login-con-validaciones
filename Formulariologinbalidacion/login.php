<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    $errors = [];

    if (empty($user) || empty($password) || empty($edad)) {
        $errors[] = "Todos los campos son obligatorios.";
    }

    if (!is_numeric($edad)) {
        $errors[] = "La edad debe ser un número.";
    } elseif ($edad < 18) {
        $errors[] = "Debes ser mayor de edad (18 años o más).";
    }

    if ($user !== "luis" || $password !== "mendoza") {
        $errors[] = "Usuario o contraseña incorrectos.";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Login exitoso.</p>";
    }
}
?>

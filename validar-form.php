<?php
 if (isset($_POST['submit'])) {
if (empty($nombre)) {
    echo "<p class= 'error'> * Agrega tu nombre </p>";
} else {
    if (strlen($nombre) < 6) {
        echo "<p class= 'error'> * El nombre es muy corto </p>";
    }
}
if (empty($email)) {
    echo "<p class= 'error'> * Agrega tu email </p>";
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class= 'error'> * El mail es incorrecto </p>";
    }
}
if (empty($password)) {
    echo "<p class= 'error'> * Agrega la contraseña </p>";
} else {
    if (strlen($password) < 6) {
        echo "<p class= 'error'> * La contraseña es muy corta </p>";
}
if (empty($password2)) {
    echo "<p class= 'error'> * Agrega la contraseña </p>";
} else {
    if ($password2 <> $password) {
        echo "<p class= 'error'> * Las contraseñas son diferentes </p>";
}
 }

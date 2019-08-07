<?php

/* Validar mail
-------------------------------------------------- */
​function validarEmail() {

  if ($_POST) {
    if (strlen($_POST["email"]) == 0) {
      return "El campo esta vacio";
    }

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      return "El campo no es un email";
    }

    if (strlen($_POST["email"]) > 0 && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == true) {
      return "Correcto";
    }
  }


}

/* Validar password
-------------------------------------------------- */
function validarPass() {
if (strlen($_POST["password"])==0 && strlen($_POST["confirmar"])==0){
 return "Los dos campos de contraseña estan vacios";
}
 if (strlen($_POST["password"])==0){
   return "La contraseña esta vacia";
 }
 if (strlen($_POST["confirmar"])==0){
   return "Falta la confirmacion de contraseña";
 }
 if ($_POST["password"] != $_POST["confirmar"]){
   return "Las contraseñas no verifican";
 } else {
   return "Correcto";
 }
}

/* Crear Usuario
-------------------------------------------------- */
function crearUsuario() {
 $usuario = [
   "email" => $_POST["email"],
   "username" => $_POST["username"],
   "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
 ];
 $usuarios = file_get_contents("usuarios.json");
 $usuariosArray = json_decode($usuarios, true);
 $usuariosArray[] = $usuario;
 $usuariosFinal = json_encode($usuariosArray);
 file_put_contents("usuarios.json", $usuariosFinal);
}


/* Errores
-------------------------------------------------- */
$errors = [];
​
function is_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
​
function between($txt, $min, $max) {
    return strlen($txt) < $min || strlen($txt) > $max;
}
​
if (!empty($_POST)) {
​
    if (empty($_POST['email'])) {
        $errors['email'][] = 'El email es requerido';
    }
​
    if (!is_email($_POST['email'])) {
        $errors['email'][] = 'El email no es valido';
    }
​
    if (between($_POST['password'], 6, 12)) {
        $errors['password'][] = 'El password debe ser entre 6 y 12 caracteres';
    }
​
}
​
var_dump($errors);
​
?>

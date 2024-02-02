<?php
// Simulo Base de datos con usuarios y contraseñas en claro
// Recupero datos
$logins = array( // usuario => contraseña
"admin" => "admin"
);

function checkLogin($username, $password, $logins) {
if (!isset($username) || !isset($password)) {
return false;
}
return (array_key_exists($username, $logins) && strcmp($logins[$username], $password) == 0);
}

// Validar el login
if (!checkLogin($_REQUEST['username'], $_REQUEST['password'], $logins)) {
session_destroy();
$errorLogin = "El usuario o la contraseña son incorrectos";
header("Location: login.php?errorLogin=$errorLogin"); // vuelve a Login.php p con error
} else {
session_start(); // comienzo sesión
$_SESSION['username'] = $_REQUEST['username']; // guardo datos en la sesión
header("Location: pedidos.php"); // Redirijo a la página de usuario logado
}
?>
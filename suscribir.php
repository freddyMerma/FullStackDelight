<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "id20457151_admin";
$password = ">Nn3FI-6i%i6n]Uu";
$base_de_datos = "id20457151_bbdd_solicitar";

// Establecer conexión
$conn = mysqli_connect($servidor, $usuario, $password, $base_de_datos);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
// Obtenemos los valores del formulario
$email = $_POST['email'];


// Preparamos la consulta SQL para insertar los datos en la tabla correspondiente
$sql = "INSERT INTO suscripciones (email) 
            VALUES ('$email')";

// Ejecutamos la consulta SQL
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerramos la conexión con la base de datos
$conn->close();
?>
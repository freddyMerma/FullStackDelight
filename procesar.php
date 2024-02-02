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
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$presupuesto = $_POST['presupuesto'];
$metodo_pago = $_POST['metodo_pago'];
$descripcion = $_POST['descripcion'];

// Procesar la imagen subida
$imagen = $_POST['imagen'];

// Preparamos la consulta SQL para insertar los datos en la tabla correspondiente
$sql = "INSERT INTO datos_formulario (nombre, apellidos, email, presupuesto, metodo_pago, descripcion, imagen) 
            VALUES ('$nombre', '$apellidos', '$email', '$presupuesto', '$metodo_pago', '$descripcion', '$imagen')";

// Ejecutamos la consulta SQL
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerramos la conexión con la base de datos
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Solicitar Diseño - EpicVlur</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Techie
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <!-- MODIFICACIONES FREDDY MERMA -->
    <script src="assets/js/wallet.js"></script>


</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <?php include "template/header.php"; ?>
</header><!-- End Header -->

<main id="main">
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>¡Diseño exclusivo solicitado!</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Solicitar diseño</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <h2>La solicitud se ha enviado correctamente</h2></br>
            <h3>Nos pondremos en contacto lo antes posible. ¡Gracias por elegir nuestros servicios!</h3>
        </div>

    </section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <?php include "template/footer.php"; ?>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/image-uploader.min.js"></script>
<script>
    $(function () {
        $('.input-images').imageUploader();
    });

</script>

</body>

</html>

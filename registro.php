<?php
//echo $_GET['id'];
$id = $_GET['id'];
$mysqli = new MySQLi("localhost:3306", "root", "", "tecnologico");
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT idProyectos, nombre, dinero,meta, tema, descripcion FROM proyectos WHERE idProyectos = '$id'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EmprendeTEC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->

    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <?php include 'header.php' ?>
    <!--/ Nav End /-->

    <!--/ Intro Single star /-->

    <!--/ Intro Single End /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Registrate</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Contact Star /-->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-t4">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <form class="form-a" action="registroend.php" method="post" role="form">
                                <div id="sendmessage"> Tu mensaje fue enviado correctamente!</div>
                                <div id="errormessage"></div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group text-center">
                                            <input type="text" name="email" class="form-control form-control-lg form-control-a" placeholder="Email" data-rule="minlen:1" data-msg="Compañia de contacto">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group text-center">
                                            <input type="text" name="contra" class="form-control form-control-lg form-control-a" placeholder="contraseña" data-rule="minlen:1" data-msg="Compañia de contacto">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-0 col-md-4"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <button type="submit" class="btn btn-b">Registrarme</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--/ Contact End /-->

    <!--/ footer Star /-->
    <?php include 'footer.php' ?>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>
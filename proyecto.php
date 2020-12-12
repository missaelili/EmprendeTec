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
  <title><?php
          echo $row['nombre'];
          ?></title>
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
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?php
                                      echo $row['nombre'];
                                      ?></h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php
                echo $row['nombre'];
                ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="img/<?php echo $id ?>/1.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/<?php echo $id ?>/2.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/<?php echo $id ?>/3.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo"> 
                <div class="card-header-c d-flex">
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">
                      <?php
                      echo "$" . $row['meta'];
                      ?>
                    </h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Breve descripción</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>ID:</strong>
                      <span><?php echo $row['idProyectos']; ?> </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Categoria:</strong>
                      <span><?php echo $row['tema']; ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Meta:</strong>
                      <span><?php echo $row['meta']; ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Dinero Actual:</strong>
                      <span><?php echo $row['dinero']; ?></span>
                    </li>
                  </ul>
                  <a href="donar.php?id=<?php echo $id; ?>" class="link-a">Saber más sobre el proyecto
                    <button type="submit" value="Donar" class="btn btn-b">Donar</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Descripción</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  <?php echo $row['descripcion']; ?>
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Puntos</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>Seguridad</li>
                  <li>Integracion</li>
                  <li>Interactivo</li>
                  <li>Facilidad</li>
                  <li>Maximización</li>
                  <li>Internet</li>
                  <li>Amabilidad</li>
                  <li>Tacto</li>
                  <li>Limpieza</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!--/ Property Single End /-->

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
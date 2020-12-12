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
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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
   <?php include 'header.php'?>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Estadisticas de proyectos</h1>
            <span class="color-text-a">Eneit / Incubadora</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
           
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->

  
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="img/Esta/1.jpeg" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">Número de proyectos
                      </h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    <canvas id="oilChart2" width="50" height="50"></canvas>
                  </p>
                
                </div>
                
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>

  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="img/Esta/2.jpeg" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">Proyectos
                      <br> Eneit</h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    <canvas id="oilChart" width="50" height="50"></canvas>
                  </p>
                
                </div>
                
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="img/Esta/3.png" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">Proyectos
                      <br>Incubadora</h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    <canvas id="oilChart1" width="50" height="50"></canvas>
                  </p>
                
                </div>
                
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>


  

  <!--/ Agent Single End /-->

  <!--/ footer Star /-->
  <?php include 'footer.php'?>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <script>
    var oilCanvas1 = document.getElementById("oilChart1");
  
  Chart.defaults.global.defaultFontFamily = "Lato";
  Chart.defaults.global.defaultFontSize = 18;
  
  var oilData = {
      labels: [
          "Inovacion Social",
          "Proceso",
          "Software",
          "Producto y Servicio",
          "Alimento"
  
      ],
      datasets: [
          {
              
              data: [11,66,30,50,12],
              backgroundColor: [
                  "#686de0",
                  "#6ab04c",
                  "#36a2eb",
                  "#cc65fe",
                  "#63FF84"
              ]
          }]
  };
  
  var pieChart = new Chart(oilCanvas1, {
    type: 'pie',
    data: oilData
  });
  
    </script>
  <!-- JavaScript Libraries -->
  <script>
    var oilCanvas = document.getElementById("oilChart");
  
  Chart.defaults.global.defaultFontFamily = "Lato";
  Chart.defaults.global.defaultFontSize = 18;
  
  var oilData = {
      labels: [
          "Inovacion Social",
          "Proceso",
          "Software",
          "Producto y Servicio",
          "Alimento"
  
      ],
      datasets: [
          {
              data: [20,10,19,11,12],
              backgroundColor: [
                  "#686de0",
                  "#6ab04c",
                  "#36a2eb",
                  "#cc65fe",
                  "#63FF84"
              ]
          }]
  };
  
  var pieChart = new Chart(oilCanvas, {
    type: 'pie',
    data: oilData
  });
  
    </script>

<script>
  var oilCanvas = document.getElementById("oilChart2");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var oilData = {
    labels: [
        "Total",
        "Eneit",
        "Incubadora"

    ],
    datasets: [
        {
          label: 'Total de proyectos',
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 1,
            data: [321,198,123],
            backgroundColor: [
                "#686de0",
                "#6ab04c",
                "#36a2eb"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: "bar",
  data: oilData
});

  </script>



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

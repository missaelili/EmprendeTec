<?php
session_start();
?>

<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Emprende<span class="color-b">TEC</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="conocenos.php">Conocenos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Proyectos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="catalogoEneit.php">Eneit</a>
              <a class="dropdown-item" href="catalogoIncuvadora.php">Incubación</a>
            
            </div>
          </li>
          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Traspariencia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <a class="dropdown-item" href="estaProyectos.php">Proyectos</a>
              <?php
              if(isset($_SESSION['id'])){
            
                if($_SESSION['rol']===1){
                  echo '<a class="dropdown-item" href="blog-single.html">Avance de proyecto</a>';
                }
            }
              
              ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contacto</a>
          </li>


          </li>
          <li class="nav-item">
            <a class="nav-link" href="donargeneral.php">Donar</a>
          </li>
          
        </ul>
     
         
         
      </div>
      
    </div>
    
  </nav>
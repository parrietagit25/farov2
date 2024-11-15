<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container justify-content-center">
    <a class="navbar-brand" href="#">Faro V2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>/public/index.php?controller=main&action=index">Principal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BI
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">BI</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            IT
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/public/index.php?controller=user&action=index">Usuarios</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/public/index.php?controller=objetos&action=index">Objetos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>/public/">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

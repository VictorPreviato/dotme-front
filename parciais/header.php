<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dotme</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS/style.css">
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
      <link rel="icon" type="image/x-icon" href="IMG/LOGOS/Logosn.svg">
</head>
<body>

 <div class="headdesk"> <!-- Navbar Desktop -->
   
<div>
  <a href="index.php"><img src="IMG/LOGOS/Logosn.svg" alt="" class="logonav"></a>
  <button onclick="document.location='adocao.php'" class="bnav">Adote um Pet</button>
  <button onclick="document.location='desaparecidos.php'" class="bnav">Desaparecidos</button>
  <button onclick="document.location=''" class="bnav">Sobre o Projeto</button>
</div>

<div class="user-actions">
  <form action="">
    <img src="IMG/search.svg" class="pesbtn" alt="">
    <input type="search" id="pesqicon">
  </form>
  <button onclick="document.location='cadastro.php'" id="bcad">Cadastrar-se</button>
  <button onclick="document.location='login.php'" id="blog">Login</button>
</div>
</div>


 <nav class="navbar bg-body-tertiary fixed-top"> <!-- Navbar Mobile --> 
  <div class="container-fluid">
    <a href="index.php">
    <img src="IMG/LOGOS/Logosn.svg" alt="" class="logonav"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button onclick="document.location='login.php'" id="blog">Login</button>
  <button onclick="document.location='cadastro.php'" id="bcad">Cadastrar-se</button>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="container ms-1 mt-4">

</a>
<div>


  <form action="" class="ms-3">
    <img src="IMG/search.svg" class="pesbtn" alt="">
    <input type="search">
  </form>
</div>
</div>
      <div class="offcanvas-body mt-4 ms-3">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="adocao.php">Adote um Pet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="desaparecidos.php">Desaparecidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre o Projeto</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


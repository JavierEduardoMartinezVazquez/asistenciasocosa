@extends('layouts.plantilla')

@section('tittle','Inicio')
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
@section('content')


<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
<div class="container">
  <div class="navbar-brand" href="#"> 
    <img src="http://www.socasa.com.mx/images/logo_socasa.png" alt="logo" width="70" height="60">
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="bg-danger">Registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calendario</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Empleado
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
    <div class="container">
        
        <form class="col-2">
            <a href="http://localhost/asistenciasocasa/public/" class="btn btn-outline-light">Salir</a>
          </form>
      </div>
    </div>
  </nav>
<div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg- navbar-nav-scroll"></ul> 
  </div>
</div>
</nav>
<div class="col-md-12 border border-danger">
</div>
<div class="col-md-12 border border-danger">
</div>

      <br>
      <br>
      <br>
<header>

    <div class="p-5 text-center bg-image" style="height: 437px;"></div>
      </div>

</header>

<footer class="bg-light text-center text-lg-start">
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgb(233, 18, 18);">
    <div class="text-white">
  © 2022 Copyright JET
</div>
<!-- Copyright -->
</footer>
@endsection


@extends('layouts.plantilla')

@section('tittle','SISA-Prueba')
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
@section('content')



<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
<div class="container">
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
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
    <ul class="navbar-nav me-auto my-2 my-lg-navbar-nav-scroll"></ul> 
  </div>
</div>
</nav>
<div class="col-md-12 border border-danger">
</div>
<div class="col-md-12 border border-danger">
</div>
<br>

<header>
<br>
  <center>
    <h2>
        <strong>
<p class="text-secondary">
R E G I S T R A T E  </p>
</strong>
    </h2>
  <div class="col-md-1 border border-danger">
</div>
<br>
</center>
<br>
</strong>

  <div class="container">
    <div class="row justify-content-md-center">
  <form class="row g-3">
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Nombre</label>
      <input type="email" class="form-control" id="inputNombre4">
    </div>
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Apellido Paterno</label>
      <input type="email" class="form-control" id="inputApaterno4">
    </div>
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Apellido Materno</label>
      <input type="email" class="form-control" id="inputNombre4">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Sucursal</label>
      <select id="inputState" class="form-select">
        <option>SOCOSA TOLUCA</option>
        <option>SOCOSA REFACCIONARIA</option>
        <option>SOCOSA XONACATLAN</option>
        <option>SOCASA ADMINISTRACION</option>
        <option>UTP USADOS</option>
        <option>UTP TRASLADOS</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputCity" class="form-label">Area</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputCity" class="form-label">Cargo</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
        
    <div class="col">
      <div class="form-check">
      </div>
    </div>
  </form>

  <div class="row-12">
    <div class="row justify-content-md-center">
    <button type="submit" class="btn btn-outline-danger">Enviar</button>
  </div>
<br>
</header>
<br>
<br>
<footer class="bg-light text-center text-lg-start">
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgb(233, 18, 18);">
    <div class="text-white">
  © 2022 Copyright JET
</div>
<!-- Copyright -->
</footer>
@endsection


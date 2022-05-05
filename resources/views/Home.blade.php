@extends('layouts.plantilla')

@section('tittle','Home')
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
@section('content')

<nav class="navbar navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h1></h1>
      </a>
    </div>
</nav>
  <center>
    <p><h1>Sistema de Asistencias</h1></p>
</center>
</nav>
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-10 col-lg-6 col-xl-4 offset-xl-1">
          <form>
           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            </div>
  
            <div class="divider d-flex align-items-center my-4">
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder=""/>
              <label class="form-label" for="form3Example3">Correo Electronico</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
              <label class="form-label" for="form3Example4">Contraseña</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" class="btn btn-danger btn-lg
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar sesion</button>     
            </div>
          </form>
        
@endsection

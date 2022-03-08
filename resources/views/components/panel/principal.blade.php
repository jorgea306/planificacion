@extends('components.panel.panel')

@section('section_admin')

<div class="pagetitle">
    <h1>Principal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Home</a></li>
        <li class="breadcrumb-item active">Principal</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


    <!-- Card with an image on left -->
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/img/Panel.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bienvenido al panel de administracion</h5>
              <p class="card-text">En este panel podra realizar los cambios necesarios para el contenido del sitio oficial de la Direccion Provincial de Planificacion.</p>
              <p class="card-text">Por cualquier consulta puede comunicarse con Jorge Ruben Albornos Saint Claire. jorgea306@gmail.com o por celular 3834400061.</p>
            </div>
          </div>
        </div>
      </div><!-- End Card with an image on left -->


@endsection

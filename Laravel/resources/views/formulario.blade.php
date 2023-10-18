@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')
<h1 class="display-1 text-center text-danger mt-5"> FORMULARIO </h1>

<div class="container mt-5 cold-md-6">
<div class="card text-center text-primary fs-5 fw-semibold">
  <div class="card-header">
    Introduce tis recuercos :)
  </div>

  <div class="card-body">

  <form method="POST" action="/guardarRecuerdos">
    @csrf
  <div class="mb-3">
    <label class="form-label">Titulo: </label>
    <input type="text" name="txtTitulo" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Recuerdo: </label>
    <input type="text" name="txtRecuerdo" class="form-control">
  </div>

  </div>

  <div class="card-footer text-body-secondary">
    <div class>
  <button type="submit" class="btn btn-primary">Guardar Recuerdo</button>
  </div>
</form>

  </div>
</div> <!-- div tageta -->
</div> <!-- div center  -->
@endsection

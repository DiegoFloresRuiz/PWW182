@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')
<h1 class="display-1 text-center text-danger mt-5"> FORMULARIO </h1>

<div class="container mt-5 cold-md-6">

@if(session()->has('Confirmacion'))

<div class="alert alert-secces alert-dismissible fade show text-center" role="alert">
  <strong> {{ session('Confirmacion')}} </strong>  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())

@foreach($errors->all() as $error)
<div class="alert alert-secces alert-dismissible fade show text-center" role="alert">
  <strong> {{ $error }} </strong>  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif


<div class="card text-center text-primary fs-5 fw-semibold">
  <div class="card-header">
    Introduce tus recuercos :)
  </div>

  <div class="card-body">

  <form method="POST" action="/guardarRecuerdos">
    @csrf

  <div class="mb-3">
    <label class="form-label">Titulo: </label>
    <input type="text" name="txtTitulo" class="form-control" vlaue = "{{ old('txtTitulo') }}">
    <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}}</p>
  </div>

  <div class="mb-3">
    <label class="form-label">Recuerdo: </label>
    <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo') }}">

    <p class="text-danger fst-italic">{{$errors->first('txtRecuerdo')}}</p>
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

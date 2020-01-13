@extends('admin.layouts.dashboard')

@section('content')

<div class="container">


    <h3>Probando vista de formulario</h3>

<form action="/posts" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese el titulo">
    </div>

    <div class="form-group">
        <label for="">Contenido</label>
        <textarea class="form-control" name="contenido" id="" cols="30" rows="10"></textarea>
    </div>


    <div class="form-group">
        <label for="">Enlace de Imagen</label>
        <input type="text" class="form-control" name="image_url" placeholder="Ingrese link de imagen">
    </div>

    <div class="form-group">
        <label for="">Id de Usuario</label>
        <input type="number" class="form-control" name="userid" placeholder="Ingrese id de usuario">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
     <input type="submit" value="Subir" />

</form>

</div>



@endsection

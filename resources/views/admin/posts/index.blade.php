@extends('admin.layouts.dashboard')

@section('content')

<h2>Probando index de carpeta Posts</h2>

<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titulo</th>
              <th>Contenido</th>
              <th>Imagen_Url</th>
              <th>Usuario</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Titulo</th>
              <th>Contenido</th>
              <th>Imagen_Url</th>
              <th>Usuario</th>
              <th>Opciones</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($posts as $post)

              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->contenido }}</td>
                <td>{{ $post->image_url }}</td>
                <td>{{ $post->user['name'] }} </td>

              </tr>
              @endforeach


          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection

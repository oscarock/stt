@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Usuarios Registrados</div>

                <div class="card-body">
                     <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Email</th>
                          <th>Departamento</th>
                          <th>Municipio</th>
                          <th>Fecha Creado</th>
                        </tr>
                        <tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                            <td>{{ $user->town }}</td>
                            <td>{{ $user->created_at }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

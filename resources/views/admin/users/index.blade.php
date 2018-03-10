@extends('admin.layouts.app')

@section('content')
<div class="card">
<div class="card-body">
  <div class="row">
    <div class="col-sm-8"><h3 class="card-title mb-4">Listado de usuarios</h3></div>
    <div class="col-sm-4"><a href="#" class="btn btn-primary btn-md"><i class="fas fa-plus"></i><span> Crear nuevo usuario  </span></a></div>
  </div>
  <div class="table-responsive">
    <table class="table center-aligned-table">
      <thead>
        <tr>
          <th class="border-bottom-0">ID Usuario</th>
          <th class="border-bottom-0">Name</th>
          <th class="border-bottom-0">E-mail</th>
          <th class="border-bottom-0">Accion</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          {{-- <td><label class="badge badge-teal">Approved</label></td> --}}
          <td>
            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm"><i class="fas fa-wrench"></i></a>
            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection

@extends('layouts.default')

@section('content')



<div class="class=col-md-12 mt-5">

</div>




<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Número e clientes </h2>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="new">
      <form action="{{ route('recargas.all') }}" method="GET" enctype="multipart/form-data">
        <div class="col-md-5 ">
            <label for="search" class="form-label">Pesquisar : </label>
            <input value="{{ request()->search}}" type="text" class="form-control border border-primary" name="search" id="search">
            <button type="submit" class="btn btn-outline-primary me-2">Pesquisar</button>
        </div>
      </form>
        <div class="buttons">
            <a href="{{route('recargas.novo') }}"  type="button" class="btn btn-secondary btn-sm ">Adicionar novo</a>
        </div>
    </div>
    <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Número</th>
            <th scope="col">Operadora</th>
            <th scope="col">Cliente</th>
            <th scope="col" colspan="2">Opções</th>
            <th scope="col" ></th>


          </tr>
        </thead>
        @foreach ($recargas as $recarga)
        <tbody>
            <tr>

              <td><img src="{{ \Illuminate\Support\Facades\Storage::url($recarga->cover)}}" alt="ALT" class="imagen"></td>
              <td>{{ $recarga->number }}</td>
              <td>{{ $recarga->type }}</td>
              <td>{{ $recarga->name}}</td>
              <td>
                  <button type="button" class="btn btn-link">Editar</button>
              </td>
              <td>
                  <a type="button" class="btn btn-link" href="{{route('admin.deleteViewsRecarga', $recarga->id ) }}">Eliminar</a>
              </td>
            </tr>
          </tbody>
        @endforeach
      </table>
    </div>
  </div>




@endsection

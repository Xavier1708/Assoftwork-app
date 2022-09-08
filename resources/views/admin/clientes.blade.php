@extends('layouts.default')

@section('content')



<div class="class=col-md-12 mt-5">

</div>




<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Columns with icons</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      
    <a href="{{route('novo') }}"  type="button" class="btn btn-secondary btn-sm new">Novo Cliente</a>

    <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Numero</th>
            <th scope="col">Genero</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="2">Opções</th>
            <th scope="col" ></th>


          </tr>
        </thead>
        @foreach ($clientes as $cliente)
        <tbody>
            <tr>
              <td>{{ $cliente->id }}</td>
              <td>{{ $cliente->name }}</td>
              <td>{{ $cliente->phone }}</td>
              <td>{{ $cliente->gender }}</td>
              <td>{{ $cliente->email }}</td>

              <td>
                  <button type="button" class="btn btn-link">Editar</button>
              </td>
              <td>
                  <button type="button" class="btn btn-link">Eliminar</button>
              </td>
              <td>

              </td>
            </tr>
          </tbody>
        @endforeach
</table>
    </div>
  </div>



@endsection

@extends('layouts.default')

@section('content')



<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Actualizar Cliente</h2>
    <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{ route('admin.updateCliente', $cliente->id) }}">


        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="name" class="form-label">Nome</label>
          <input value="{{ $cliente->name }}" type="text" class="form-control border border-secondary" name="name" id="name">
        </div>

        <div class="col-md-3">
            <label for="gender" class="form-label">State</label>
            <select id="gender" name="gender" class="form-select border border-secondary">
              <option value="Homen">{{ $cliente->gender }} </option>
              <option value="Mulher">{{ $cliente->gender }} </option>
            </select>
        </div>


        <div class="col-2">
          <label for="phone" class="form-label">Telefone</label>
          <input value="{{ $cliente->phone }}"  type="text" class="form-control border border-secondary" id="phone" name="phone" placeholder="Número de telefone">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input value="{{ $cliente->email }}"  type="email" class="form-control form-control border border-secondary" name="email" id="email">
          </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Actualizar</button>

        </div>
      </form>
  </div>



@endsection

@extends('layouts.default')

@section('content')

        

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Cadastro de novo Cliente</h2>
    <form class="row g-3" method="POST" action="{{ route('post') }}">
        @csrf
        <div class="col-md-6">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control border border-secondary" name="name" id="name">
        </div>

        <div class="col-md-3">
            <label for="gender" class="form-label">State</label>
            <select id="gender" name="gender" class="form-select border border-secondary">
              <option selected>Genero</option>
              <option value="Homen">Homen</option>
              <option value="Mulher">Mulher</option>
            </select>
        </div>

    
        <div class="col-2">
          <label for="phone" class="form-label">Telefone</label>
          <input type="text" class="form-control border border-secondary" id="phone" name="phone" placeholder="Número de telefone">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control border border-secondary" name="email" id="email">
          </div>
       
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Gurdar</button>
        </div> 
      </form>
  </div>
            
   

@endsection

@extends('layouts.default')

@section('content')



<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Numeros por clientes</h2>
    <form class="row g-3" method="POST" action="{{ route('recarga.post') }}">
        @csrf
        <div class="form-group" >
            <label for="cover">Carregar um foto:</label>
                <input type="file" id="cover" name="cover" class="form-controll-file">
            </div>

        <div class="col-md-6">
          <label for="number" class="form-label">Número</label>
          <input type="text" class="form-control border border-secondary" name="number" id="number">
        </div>

        <div class="col-md-3">
            <label for="type" class="form-label">Operadora</label>
            <select id="type" name="type" class="form-select border border-secondary">
              <option  value="UNITEL" >UNITEL</option>
              <option  value="MOVICEL">MOVICEL</option>
              <option  value="AFRICEL">AFRICEL</option>
              <option  value="ZAP">ZAP</option>
              <option  value="DSTV">DSTV</option>
              <option  value="OUTRO">OUTRO</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="type" class="form-label">Cliente</label>


            <select id="clientes_id" name="clientes_id" class="form-select border border-secondary">
                @foreach($clientes as $cli)
                 <option selected value="{{ $cli->id }}">{{ $cli->name }}</option>
              @endforeach

            </select>
            <div class="col-md-6">
                <label for="cover" class="form-label">Número</label>
                <input type="text" class="form-control border border-secondary" name="cover" id="cover">
              </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Gurdar</button>
        </div>
      </form>
  </div>



@endsection

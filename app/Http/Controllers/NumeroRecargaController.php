<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NumeroRecarga;
use App\Models\Cliente;
use Redirect;
use Illuminate\Support\Facades\DB;

class NumeroRecargaController extends Controller
{
    //

    public function novo (){

        $clientes = Cliente::all();
        //dd($clientes);
        return view('admin.NovoOperadoras', ['clientes'=> $clientes]);
    }

  public function operadoras(){

      $recargas = DB::table ('numero_recargas')
            ->join('clientes', 'numero_recargas.clientes_id', '=', 'clientes.id')
            ->select('numero_recargas.id','numero_recargas.number', 'numero_recargas.type', 'clientes.name' )
            ->get();
    return view('admin.operadoras', ['recargas'=> $recargas]);
  }


    public function store(Request $request){

        $input = $request->validate([
            'number' => 'required',
            'type'=> 'required|string',
            'clientes_id'=> 'required',
            'cover' => 'nullable'
        ]);

        //dd($input);
       NumeroRecarga::create($input);
       return Redirect::route('recargas.all');


    }
}

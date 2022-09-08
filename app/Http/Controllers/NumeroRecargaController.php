<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NumeroRecarga;
use App\Models\Cliente;

class NumeroRecargaController extends Controller
{
    //

    public function novo (){

        $clientes = Cliente::all();
        //dd($clientes);
        return view('admin.NovoOperadoras', ['clentes'=> $clientes]);
    }

  public function operadoras(){

    $recargas = NumeroRecarga::all();

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


    }
}

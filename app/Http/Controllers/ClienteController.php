<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Redirect;
use App\Http\Controllers\DefaultController;

class ClienteController extends Controller
{
    //

    public function all (){
        $count = 34;
        $clientes = Cliente::all();
        return view('admin.clientes', ['clientes' =>$clientes, 'count'=>$count ]);
    }

  // public function


    public function post(Request $request )
    {

       $input = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|integer',
        'gender' => 'nullable|string',
        'email' => 'nullable|string'
    ]);

    Cliente::create($input);
    return Redirect::route('admin.all');

    }

    public function novo (){
        return view('admin.novoCliente');
    }
}

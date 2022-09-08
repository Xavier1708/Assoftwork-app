<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Redirect;
use App\Http\Controllers\DefaultController;
use App\Http\Requests\ClienteStoreRequest;


class ClienteController extends Controller
{
    //

    public function all (){
        $count = 34;
        $clientes = Cliente::all();
        return view('admin.clientes', ['clientes' =>$clientes, 'count'=>$count ]);
    }

    public function post( ClienteStoreRequest $request )
    {

       $input = $request->validated();

    Cliente::create($input);
    return Redirect::route('admin.all');

    }

    public function novo (){
        return view('admin.novoCliente');
    }
}

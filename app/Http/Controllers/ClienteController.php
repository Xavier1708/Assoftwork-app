<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Redirect;
use does;
use App\Http\Controllers\DefaultController;
use App\Http\Requests\ClienteStoreRequest;
use Illuminate\Support\Facades\DB;



class ClienteController extends Controller
{
    //

    public function all (){
        $count = 34;
        $clientes = Cliente::where('deleted','=', '1')->get();
        return view('admin.clientes', ['clientes' =>$clientes, 'count'=>$count ]);
    }


    // REGRA PARA SALVAR
    public function post( ClienteStoreRequest $request )
    {

       $input = $request->validated();
       Cliente::create($input);
       return Redirect::route('admin.all');

    }

    public function novo (){
        return view('admin.novoCliente');
    }

    // REGRA PARA ACTUALIZAR
    public function showUpdateForm(Cliente $cliente){
        return view('admin.updateCliente', ['cliente' => $cliente]);
    }


    public function update( ClienteStoreRequest $request, Cliente $cliente){
         $input = $request -> validated();
         $cliente -> fill($input);
         $cliente -> save();
         return Redirect::route('admin.all');
    }


    public function deleteViews(Cliente $cliente){
        $cliente = DB::update('update clientes set deleted = 0 where id = ? ' , [$cliente->id]);
        return Redirect::route('admin.all'); //deleteViews

    }

}

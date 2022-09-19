<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NumeroRecarga;
use App\Models\Cliente;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NumeroRecargaRequest;
use App\Http\help\PictureControll;

class NumeroRecargaController extends Controller
{
    //

    public function novo (){

        PictureControll::picture('cover');
         $clientes = Cliente::where('deleted','=', '1')->get();

        return view('admin.NovoOperadoras', ['clientes'=> $clientes]);
    }

  public function operadoras(Request $request){

    $recarga = NumeroRecarga::query();
    $recargas =
       DB
       ::
       table('numero_recargas' )
            ->join('clientes', 'numero_recargas.clientes_id', '=', 'clientes.id')
            ->select('numero_recargas.id','numero_recargas.cover','numero_recargas.number', 'numero_recargas.type', 'clientes.name' )
            ->where( 'numero_recargas.deleted', '=', '1')
            ->where('clientes.name', 'like', '%'. $request->search .'%')
            ->get();

            $recargas->when( $request->search, function($query, $vl){
                $query-> where('clientes.name', 'like', '%'. $vl.'%');
                } );
    return view('admin.operadoras', ['recargas'=> $recargas]);
  }


  public function store(NumeroRecargaRequest $request)
  {

      $input = $request->validated();

      if(!empty($input['cover']) && $input['cover']->isValid() ){
          $file = $input['cover'];
          $path = $file->store('fotos');
          $input['cover'] = $path;
      }
      NumeroRecarga::create($input);
      return Redirect::route('recargas.all');

  }

    public function deleteViews(NumeroRecarga $recarga){
        $recarga = DB::update('update numero_recargas set deleted = 0 where id = ? ' , [$recarga->id]);
        return Redirect::route('recargas.all');

    }
}

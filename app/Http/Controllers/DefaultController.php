<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class DefaultController extends Controller
{
    //


    public function home(){
        $count;

        $clientes = Cliente::all();
        $count = count($clientes) + 1;
        return view('home', ['count' => $count]);
    }

    public function admin(){
        return view('admin.main');
    }


}

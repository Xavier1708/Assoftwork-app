<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class NumeroRecarga extends Model
{
    use HasFactory;

    public function Clientes(){
        return $this -> belongsTo(Cliente::class);
    }

    protected $fillable=[
        'number',
        'type',
        'clientes_id',
        'cover'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NumeroRecarga;

class Cliente extends Model
{
    use HasFactory;

    public function numeroRecargas(){
        return $this->hasMany(NumeroRecarga::class);
    }

    protected $fillable=[
        'name',
        'phone',
        'gender',
        'email'
    ];
}

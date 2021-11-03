<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';

    protected $dates = ['deleted_at'];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'categoria',
        'cantidad',
    ];
}

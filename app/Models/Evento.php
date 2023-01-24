<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table='evento';

    protected $primaryKey='cod_evento';

    public $timestamps=false;

    protected $fillable =[
        'img',
        'titulo',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'direccion',
        'url',
        'estado'
    ];

    protected $guarded =[

    ];
}

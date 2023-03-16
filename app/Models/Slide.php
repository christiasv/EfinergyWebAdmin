<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table='index-slider';

    protected $primaryKey='cod_slider';

    public $timestamps=false;

    protected $fillable =[
        'slider',
        'titulo',
        'subtitulo',
        'descripcion',
        'redireccion',
        'estado',
    ];

    protected $guarded =[

    ];
}

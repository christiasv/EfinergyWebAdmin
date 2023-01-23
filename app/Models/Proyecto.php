<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table='index-proyecto';

    protected $primaryKey='cod_proyecto';

    public $timestamps=false;

    protected $fillable =[
        'img_portada',
        'img_proyecto',
        'nombre_proyecto',
        'descripcion',
        'objetivo',
        'dirigido_a',
        'certificado',
        'fecha_inicio',
        'duracion',
        'duracion_clase',
        'cupos',
        'costo',
        'promocion',
        'descr_docente',
        'fotografia',
        'nom_docente',
        'estado'
    ];

    protected $guarded =[

    ];
}

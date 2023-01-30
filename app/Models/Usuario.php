<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';

    protected $primaryKey='cod_blog';

    public $timestamps=false;

    protected $fillable =[
        'cod_empresa',
        'cod_area',
        'nom_user',
        'tipo_doc',
        'num_doc',
        'fecha_nac',
        'direccion',
        'correo',
        'telefono',
        'estado',
        'usuario',
        'contraseña'
    ];

    protected $guarded =[

    ];
}

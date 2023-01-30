<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table='contacto';

    protected $primaryKey='cod_contacto';

    public $timestamps=false;

    protected $fillable =[
        'direccion',
        'telefono',
        'correo_contacto',
        'correo_frm'
    ];

    protected $guarded =[

    ];
}

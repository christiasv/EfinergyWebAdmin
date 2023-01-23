<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blog';

    protected $primaryKey='cod_blog';

    public $timestamps=false;

    protected $fillable =[
        'img_portada',
        'img_blog',
        'titular',
        'cod_user',
        'fecha',
        'descripcion',
        'estado'
    ];

    protected $guarded =[

    ];
}

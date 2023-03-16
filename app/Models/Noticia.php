<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='index-noticias';

    protected $primaryKey='cod_noticias';

    public $timestamps=true;

    protected $fillable =[
        'descripcion',
        'link',
        'estado'
    ];

    protected $guarded =[

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Blog extends Model
{
    protected $table='blog';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id');
    }

    protected $primaryKey='cod_blog';

    public $timestamps=true;

    protected $fillable =[
        'img_portada',
        'img_blog',
        'titular',
        'id',
        'descripcion',
        'estado'
    ];

    protected $guarded =[

    ];
}

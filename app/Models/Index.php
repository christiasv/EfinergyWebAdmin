<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table='index-index';

    protected $primaryKey='cod_index';

    public $timestamps=false;

    protected $fillable =[

    ];

    protected $guarded =[

    ];
}

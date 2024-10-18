<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstRoute extends Model
{
    use HasFactory;

    protected $table = 'mst_routes';

    protected $fillable = [
        'uri',
        'name',
        'method',
        'middleware',
        'component',
    ];
}

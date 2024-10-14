<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstGroup extends Model
{
    use HasFactory;
    protected $table = 'mst_groups';
    protected $fillable = [ 
        'id',
        'name',
        'description'
    ];
}

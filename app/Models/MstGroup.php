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

    // Mendefinisikan relasi ke MstUser
    public function users()
    {
        return $this->hasMany(MstUser::class, 'id_group', 'id_group');
    }
}

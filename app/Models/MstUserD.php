<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstUserD extends Model
{
    use HasFactory;

    protected $table = 'mst_user_d';

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'birth_date',
        'avatar',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(MstUser::class, 'user_id');
    }
}

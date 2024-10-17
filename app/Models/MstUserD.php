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
        'phone',
        'province',
        'regency',
        'district',
        'postal_code',
        'address'
    ];

    /**
     * Get the user associated with the user detail.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MstUser>
     */
    public function user()
    {
        return $this->belongsTo(MstUser::class, 'user_id', 'id');
    }
}

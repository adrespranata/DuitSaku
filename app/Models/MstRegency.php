<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstRegency extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'name'
    ];

    /**
     * Define the relationship to MstProvince.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MstProvince>
     */

    public function province()
    {
        return $this->belongsTo(MstProvince::class);
    }
}

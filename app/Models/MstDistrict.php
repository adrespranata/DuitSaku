<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstDistrict extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'regency_id'
    ];

    /**
     * Get the regency associated with the MstDistrict
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MstRegency>
     */
    public function regency()
    {
        return $this->belongsTo(MstRegency::class);
    }
}

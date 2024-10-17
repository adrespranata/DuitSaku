<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstProvince extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name'
    ];

    /**
     * Define the relationship to MstCountry.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MstCountry>
     */
    public function country()
    {
        return $this->belongsTo(MstCountry::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstAddress extends Model
{
    use HasFactory;

    protected $table = 'mst_addresses';

    protected $fillable = [
        'user_id',
        'country_id',
        'province_id',
        'district_id',
        'regency_id',
        'postal_code_id',
        'street_address'
    ];

    public function user()
    {
        return $this->belongsTo(MstUser::class, 'user_id');
    }

    public function country()
    {
        return $this->belongsTo(MstCountry::class, 'country_id');
    }

    public function province()
    {
        return $this->belongsTo(MstProvince::class, 'province_id');
    }

    public function district()
    {
        return $this->belongsTo(MstDistrict::class, 'district_id');
    }

    public function regency()
    {
        return $this->belongsTo(MstRegency::class, 'regency_id');
    }

    public function postalCode()
    {
        return $this->belongsTo(MstPostalCode::class, 'postal_code_id');
    }
}

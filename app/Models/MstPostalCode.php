<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstPostalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'code'
    ];

    /**
     * Rules for validating a postal code
     *
     * @return array<string, string>
     */
    public static function rules()
    {
        return [
            'code' => 'required|string|max:10|unique:postal_codes', // Pastikan kode pos unik
            'district_id' => 'required|exists:districts,id', // Pastikan district_id valid
        ];
    }

    /**
     * Get the district associated with the postal code
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MstDistrict>
     */
    public function district()
    {
        return $this->belongsTo(MstDistrict::class);
    }

    /**
     * Get the user details associated with the postal code.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<MstUserD>
     */
    public function userDetails()
    {
        return $this->hasMany(MstUserD::class, 'postal_code_id');
    }
}

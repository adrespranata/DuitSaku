<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MstUser extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'id_group',
        'is_active',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
     * Get the user detail associated with the MstUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<MstUserD>
     */
    public function userDetail()
    {
        return $this->hasOne(MstUserD::class, 'user_id');
    }

    /**
     * Get the group associated with the MstUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<MstGroup>
     */
    public function group()
    {
        return $this->belongsTo(MstGroup::class, 'id_group', 'id');
    }
}

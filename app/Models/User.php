<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
// use App\Models\Channel;
// use App\Models\UserChannel;
// use App\Models\UserDetail;
// use App\Models\UserOauth;
// use App\Models\UserAd;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // public function channel(){

    //     return $this->hasMany( Channel::class );
    // }

    // /**
    //  * The accessors to append to the model's array form.
    //  *
    //  * @var array
    //  */
    public function userOauth(){

        return $this->hasOne( UserOauth::class );
    }

    public function userDetail(){

        return $this->hasOne( UserDetail::class );
    }

    // /**
    //  * The accessors to append to the model's array form.
    //  *
    //  * @var array
    //  */
    public function userAd()
    {
        return $this->hasMany(UserAd::class);
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    public function userChannel(){

        return $this->hasMany( UserChannel::class );
    }

}

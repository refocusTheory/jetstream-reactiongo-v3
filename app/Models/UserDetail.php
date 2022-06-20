<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
        
    // protected $fillable = [
    //     // 'user_id',
    //     // 'uuid',
    //     // 'subdomain',
    //     // 'domain',
    //     // 'account',
    //     // 'integrations',
    //     // 'pages',
    //     // 'settings',
    //     // 'data',
    //     // 'searches',
    //     // 'analytics'
    // ];
    protected $table = 'user_oauth';

    public $timestamps = false;

    // protected static function newFactory()
    // {
    //     return \Modules\ReactionGo\Database\factories\ChannelFactory::new();
    // }

    public function user(){

        return $this->belongsTo( User::class );
        
    }

}

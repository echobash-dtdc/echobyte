<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $fillable = [
        'platform',
        'api_key',
        'api_secret',
        'access_token',
        'domain',
        'user_id',
    ];
}

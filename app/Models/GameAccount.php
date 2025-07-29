<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class GameAccount extends Authenticatable
{
    protected $connection = 'rathena';  // Uses rAthena DB
    protected $table = 'login';         // Example rAthena login table
    protected $primaryKey = 'account_id';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        // add other fields if needed
    ];
}

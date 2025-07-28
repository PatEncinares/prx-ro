<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    protected $connection = 'rathena';  // Uses rAthena DB
    protected $table = 'login';         // Example rAthena login table
    protected $primaryKey = 'account_id';
    public $timestamps = false;
}

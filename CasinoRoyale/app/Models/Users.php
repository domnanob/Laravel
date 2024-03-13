<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $connection = 'mysql';

    protected $table = 'users';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $attributes = [
        'Balance' => 500,
    ];
    protected $fillable = [
        'UserName',
        'Password',
        'Balance',
        'Email',
        'PFP',
    ];

}

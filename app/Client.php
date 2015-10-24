<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'type',
        'details',
        'budget',
        'deadline',
        'website_prod',
        'website_dev',
        'hear_about'
    ];
}

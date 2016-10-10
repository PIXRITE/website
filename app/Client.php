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
        'details',
        
        'budget',
        'deadline',
        'hear_about',
        'website_prod',
        
        'company',
        'type',
        'website_dev',
    ];
}

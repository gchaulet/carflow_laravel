<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'brand','model','year','kms','color','registration','description', 'available', 'active', 'user_id' 
    ];

    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'available' => 'boolean',
    ];
}
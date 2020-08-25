<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'start_datetime', 'end_datetime', 'description', 'status', 'start_town', 'end_town', 'step_towns','nb_passengers', 'created_at', 'updated_at'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'start_datetime' => 'datetime',
        'end_datetime' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published' => 'boolean',

    ];

}
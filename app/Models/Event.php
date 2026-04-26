<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    public $timestamps = false;

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'start' => 'string',
        'end' => 'string',
        'venue' => 'string',
    ];
}
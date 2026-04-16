<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $fillable = [
    'name',
    'description',
    'location',
    'ticket_price',
    'working_hours',
    'working_days',
    'image',
];

public function attractions()
{
    return $this->hasMany(Attraction::class);
}

}

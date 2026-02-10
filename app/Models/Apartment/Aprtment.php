<?php

namespace App\Models\Apartment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aprtment extends Model
{
use HasFactory;

protected $table = 'apartments';

protected $fillable = [
    'name',
    'image',
    'max_persons',
    'size',
    'view',
    'num_beds',
    'price',
    'hotel_id',
];

public $timestamps = true;

}

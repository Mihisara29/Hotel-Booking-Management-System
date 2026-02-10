<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Hotel extends Model
{
 use HasFactory;

protected $table = 'hotels';

protected $fillable = [
    'name',
    'image',
    'description',
    'location',
];

public $timestamps = true;


}

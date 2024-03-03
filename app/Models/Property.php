<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'location',
        'description',
        'image1', // Add image fields here
        'image2',
        'image3',
        'image4',
        'image5',
        'amount',
        'bedrooms',
        'bathrooms',
        'status',
    ];
}



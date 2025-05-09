<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // By default, Laravel will assume the ID column is 'id' and is an auto-incrementing integer.
    // For a 4-character alphanumeric ID, we need to set some properties.

    public $incrementing = false; // ID is not auto-incrementing
    protected $keyType = 'string'; // The ID is a string (4 chars)

    // Fillable fields to protect against mass assignment vulnerability
    protected $fillable = [
        'id',
        'name',
        'quantity',
        'size',
        'price', 
        'loc',
    ];
}

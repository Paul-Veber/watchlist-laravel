<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    public $timestamps = true;

    protected $casts = [
        'release_year' => 'integer'
    ];

    protected $fillable = [
        'name',
        'description',
        'release_year',
        'realisator'
    ];
}

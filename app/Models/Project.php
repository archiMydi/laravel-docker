<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cover_image',
        'images',
        'used_techs',
    ];

    // Cast JSON columns to array
    protected $casts = [
        'images' => 'array',
        'used_techs' => 'array',
    ];
}

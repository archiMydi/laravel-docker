<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
}

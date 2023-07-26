<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'linkedin',
        'twitter',
        'facebook', 
        'instagram',
        'isActive'
    ];
}

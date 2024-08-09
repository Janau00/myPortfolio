<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBento extends Model
{
    protected $table = 'portfoliodata';
    use HasFactory;

    protected $fillable = [
        'name',
        'introduction',
        'pronouns',
        'occupation',
        'about',
        'twitter',
        'instagram',
        'facebook',
        'threads',
        'profilepic',
        'image2',
        'image3',
    ];
}

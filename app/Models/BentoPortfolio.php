<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentoPortfolio extends Model
{
    use HasFactory;

    protected $table = 'bento_portfolio';
    protected $fillable =
    [
        'name',
        'introduction',
        'pronouns',
        'occupation',
        'twitter',
        'instagram',
        'facebook',
        'threads',
        'profilepic',
        'image2',
        'image3',
    ];
};

<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;


class ShortLink extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $fillable = ['code', 'link'];
}

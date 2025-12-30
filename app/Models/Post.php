<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slide',
        'category',
        'subcate',
        'date_kh',
        'time',
        'day',
        'status',
        'photo',
        'content',
        'user_id',
    ];
}

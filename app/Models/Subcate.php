<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcate extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcate_en',
        'subcate_kh',
        'category',
        'status',
    ];
}

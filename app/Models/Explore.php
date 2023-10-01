<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explore extends Model
{
    use HasFactory;
    protected $table = 'explore';
    protected $primarykey = 'id';
    protected $fillable = [
        'label',
        'title',
        'description',
        'img',
        'bg_img',
    ];
}


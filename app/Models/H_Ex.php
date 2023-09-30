<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class H_Ex extends Model
{
    use HasFactory;
    protected $table = 'h_ex';
    protected $primarykey = 'id';
    protected $fillable = [
        'label',
        'title',
        'items',
        'category',
        'img',
        'bg_img',
    ];
}
